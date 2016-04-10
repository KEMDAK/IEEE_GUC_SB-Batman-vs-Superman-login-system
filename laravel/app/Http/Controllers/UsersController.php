<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index' , compact('users'));
    }

    public function show($user_id)
    {
        $user = User::findOrFail($user_id);

        if($user->type === '1')
            return view('users.showSuperman' , compact('user'));

        else if($user->type === '2')
            return view('users.showNeutral' , compact('user'));

        else
            return view('users.showBatman' , compact('user'));

    }
}
