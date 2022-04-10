<?php

namespace App\Http\Controllers;

use App\Http\Requests\IventRequest;
use App\Ivent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class IventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ivents = Ivent::all();
        $ivents->load('user');
        return view('ivents.index', compact('ivents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            return view('ivents.create');
        } else {
            return view('auth.login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IventRequest $request)
    {
        $ivent = new Ivent;
        $ivent->title  = $request->title;
        $ivent->group  = $request->group;
        $ivent->day  = $request->day;
        $ivent->body  = $request->body;
        $ivent->place  = $request->place;
        $ivent->time   = $request->time;
        $ivent->monney   = $request->monney;
        $ivent->user_id  = Auth::id();
        $ivent->save();
        // create() を使用して新規投稿を保存しましょう。
        return redirect()->route('ivents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id = Auth::id();
        $ivent = Ivent::find($id);

        return view('ivents.show', compact('ivent', 'user_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ivent = Ivent::find($id);
        if (Auth::id() !== $ivent->user_id) {
            return redirect()->route('ivents.index');
        }

        return view('ivents.edit', compact('ivent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IventRequest $request, $id)
    {
        $user_id = Auth::id();
        $ivent = Ivent::find($id);
        if (Auth::id() !== $ivent->user_id) {
            return abort(404);
        }
        $ivent->title  = $request->title;
        $ivent->group  = $request->group;
        $ivent->body  = $request->body;
        $ivent->place  = $request->place;
        $ivent->time   = $request->time;
        $ivent->monney   = $request->monney;
        $ivent->user_id  = Auth::id();
        $ivent->save();
        return view('ivents.show', compact('ivent', 'user_id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ivent = Ivent::find($id);
        if (Auth::id() !== $ivent->user_id) {
            return abort(404);
        }
        Storage::delete('public/images/circle/' . $ivent->image_path);
        $ivent->delete();
        return redirect()->route('ivents.index');
    }
}
