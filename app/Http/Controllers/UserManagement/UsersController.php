<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        return view('users.usersList');
    }
    public function userDetails()
    {
        return view('users.userView');
    }
}
