<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\AdminupRequest;
use App\Http\Requests\YetRequest;
use App\Http\Requests\MakeRequest;
use App\User;
use App\Yet;
use DateTime;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!isset(Auth::user()->number)) {
            return redirect('/error')->with('flash_message', 'エラーが出ました');
        }
        $user_number = Auth::user()->number;
        if ($user_number !== '20238297') {
            return  redirect('/error');
        }
        $users = User::all();
        return view('admins.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!isset(Auth::user()->number)) {
            return redirect('/error')->with('flash_message', 'エラーが出ました');
        }
        $user_number = Auth::user()->number;
        if ($user_number !== '20238297') {
            return  redirect('/error');
        }
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        if (!isset(Auth::user()->number)) {
            return redirect('/error')->with('flash_message', 'エラーが出ました');
        }
        $user_number = Auth::user()->number;
        if ($user_number !== '20238297') {
            return  redirect('/error');
        }
        $user = new User;
        $user->name = $request->name;
        $user->number = $request->number;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!isset(Auth::user()->number)) {
            return redirect('/error')->with('flash_message', 'エラーが出ました');
        }
        $user_number = Auth::user()->number;
        if ($user_number !== '20238297') {
            return  redirect('/error');
        }
        $user = User::find($id);
        return view('admins.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!isset(Auth::user()->number)) {
            return redirect('/error')->with('flash_message', 'エラーが出ました');
        }
        $user_number = Auth::user()->number;
        if ($user_number !== '20238297') {
            return  redirect('/error');
        }
        $user = User::find($id);
        return view('admins.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminupRequest $request, $id)
    {
        if (!isset(Auth::user()->number)) {
            return redirect('/error')->with('flash_message', 'エラーが出ました');
        }
        $user_number = Auth::user()->number;
        if ($user_number !== '20238297') {
            return  redirect('/error');
        }
        $user = User::find($id);
        $user->name = $request->name;
        $user->count = $request->count;
        if (isset($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->route('admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!isset(Auth::user()->number)) {
            return redirect('/error')->with('flash_message', 'エラーが出ました');
        }
        $user_number = Auth::user()->number;
        if ($user_number !== '20238297') {
            return  redirect('/error');
        }
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admins.index');
    }
}
