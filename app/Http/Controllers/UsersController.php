<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    use App\User;

    public function index() {
    	return User::all();
    }
}
