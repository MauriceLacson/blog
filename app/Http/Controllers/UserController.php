<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User

class UserController extends Controller
{
    public function profile()
    {
    	return view('user.profile');
    }

    public function store() 
    {
    	//
    }

    public function edit($id) 
    {
    	$user = User::find($id);
    	return view('user.home', compact('user->skills', 'user->experience'));
    }
}
