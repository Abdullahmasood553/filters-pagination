<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function index() {
        $users = User::getUsers();
        return view('home')->with('users', $users);
    }

    public function getMoreUsers(Request $request) {
        if($request->ajax()) {
            $users = User::getUsers();
                return view('pages.user_data', compact('users'))->render();
        }
    }
}
