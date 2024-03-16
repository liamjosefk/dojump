<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Website;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index() {
        $websites = Website::where('id', '=', '1')->get();
        $users = User::where('is_active', '=', '1')->get();
        return view('admin.users.index', [
            'websites' => $websites,
            'users' => $users
        ]);
    }
    public function show(User $user) {
        $websites = Website::where('id', '=', '1')->get();
//        $currentUser = User::where('id', '=', auth()->user()->id)->get();
        return view('admin.users.profile', [
            'websites' => $websites,
            'user' => $user
        ]);
    }
    public function add_user() {
        $websites = Website::where('id', '=', '1')->get();
        return view('admin.users.add-user', [
            'websites' => $websites
        ]);
    }
    public function inactive() {
        $websites = Website::where('id', '=', '1')->get();
        $users = User::where('is_active', '=', '0')->get();
        return view('admin.users.inactive', [
            'websites' => $websites,
            'users' => $users
        ]);
    }
    public function enable(User $user) {
        $inputs = request()->validate([
            'is_active' => ['required']
        ]);

        $user->update($inputs);

        session()->flash('message', 'User Enabled');
        return back();
    }
    public function disable(User $user) {
        $inputs = request()->validate([
            'is_active' => ['required']
        ]);

        $user->update($inputs);

        session()->flash('message', 'User Disabled');
        return back();
    }


    public function store() {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required','string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'unique:users'],
            'password' => ['min:8', 'max:255', 'confirmed'],
            'is_active' => ['required']
        ]);
        User::create([
            'name' => request('name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'password' => request('password'),
            'phone' => request('phone'),
            'is_active' => request('is_active', '1'),
            'avatar' => request('avatar', 'profile-images/7AE1l2Rbnb150EjPHNXjW73s9Tk1wnagJNrKH59r.jpg')
        ]);

        session()->flash('message', request('name') . ' has been added');
        return redirect()->route('admin.users');

    }

    public function update(User $user) {
        $inputs = request()->validate([
            'name' => ['required', 'min:2', 'max:255'],
            'last_name' => ['min:2', 'max:255'],
            'email' => ['required', 'email', 'min:5', 'max:255'],
            'phone' => ['required'],
            'avatar' => ['file']
        ]);

        if(request('avatar')) {
            $inputs['avatar'] = request('avatar')->store('profile-images');
        }
        $user->update($inputs);

        session()->flash('message', 'Your Profile has been updated');
        return back();
    }

    public function update_userPage(User $user) {
        $inputs = request()->validate([
            'name' => ['required', 'min:2', 'max:255'],
            'last_name' => ['min:2', 'max:255'],
            'email' => ['required', 'email', 'min:5', 'max:255'],
            'phone' => ['required'],
            'avatar' => ['file']
        ]);
        $user->update($inputs);

        session()->flash('message', $inputs['name'] . ' ' . $inputs['last_name'] . ' has been updated');
        return back();
    }

    public function update_password(User $user) {
        $inputs = request()->validate([
            'password' => ['min:8', 'max:255', 'confirmed']
        ]);

        $user->update($inputs);

        session()->flash('message', 'Your password has been updated');
        return back();

    }











}
