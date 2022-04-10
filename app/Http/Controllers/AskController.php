<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ask;
use App\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asks = new Ask;
        $user_id = Auth::id();
        $asks = Ask::where('user_id', $user_id)->where('evaluation', '<', '3')->orderby('evaluation', 'asc')->get();
        $asks->load('ask', 'friend');
        return view('asks.index', compact('asks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(Auth::id());
        if ($user->image_path == NULL) {
            return redirect()->route('friends.index')->with('flash_message', 'プロフィール画像を設定してください');
        }
        $today = (new DateTime)->format('Ymd');
        $now = $user->updated_at->format('Ymd');
        if ($now == $today) {
            $user->ask_count += 1;
        } else {
            $user->ask_count = 0;
        }
        if ($user->ask_count > 5) {
            return redirect()->route('friends.index')->with('flash_message', '申請は1日5回までしかできません。');
        }
        $user->save();
        $ask = new Ask;
        $ask->ask_id = Auth::id();
        if ($ask->ask_id == $request->user_id) {
            return redirect()->route('friends.index')->with('flash_message', '自分の投稿です');
        }
        $ask_id =
            DB::table('asks')->where('friend_id', $request->friend_id)->where('ask_id', $ask->ask_id)->exists();
        if ($ask_id) {
            return redirect()->route('friends.index')->with('flash_message', '登録済みです');
        }
        $ask->friend_id = $request->friend_id;
        $ask->user_id = $request->user_id;
        $ask->evaluation = 1;
        $ask->save();
        return redirect()->route('friends.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ask = Ask::find($id);
        if (Auth::id() !== $ask->user_id) {
            return view('/error');
        }
        $ask->evaluation = $request->evaluation;
        $ask->save();
        return redirect()->route('asks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
