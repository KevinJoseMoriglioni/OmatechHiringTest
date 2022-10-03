<?php

namespace App\Http\Controllers;

use App\Validators\UserCreateValidator;
use App\Validators\UserEditValidator;
use Illuminate\Support\Facades\Redirect;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select(['id','email'])->orderBy('created_at', 'desc')->get();
        return view('dashboardPages/home', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardPages/createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = UserCreateValidator::UserCreateValidate($request->all());
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();;

        User::create(['name' => $request->name,'email' => $request->email,'description'=> $request->description,'password' => bcrypt($request->password), 'email_verified_at' => now()]);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboardPages/userInfo', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboardPages/userEdit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validator = UserEditValidator::UserEditValidate($request->all(), $user->id);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->description = $request->description;
        $user-> save();
        return redirect::route('showUser', [$user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('home');
    }
}
