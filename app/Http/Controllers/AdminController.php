<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Roles;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }

    public function users()
    {

    	$users = User::all();
    	$roles = Roles::all();

    	return view('admin.users', compact('users', 'roles'));
    }

    public function changeRole(Request $request, $userId)
    {
    	$user = User::find($userId);
    	$user->role_id = $request->role_id;
    	$user->save();

    	return back();
    }
}
