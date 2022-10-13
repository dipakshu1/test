<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class roleController extends Controller
{
    public function index()
    {
        return view('UserManagement.roles');
    }
    public function viewRole()
    {
        return view('UserManagement.viewRole');
    }
}
