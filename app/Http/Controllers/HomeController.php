<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Constants\GlobalConstants;

class HomeController extends Controller
{
    public function index() {
        $users = User::getUsers('', GlobalConstants::ALL, GlobalConstants::ALL, GlobalConstants::ALL);
        return view('home')->with('users', $users);
    }

    public function getMoreUsers(Request $request) {
        $query = $request->search_query;
        $country = $request->country;
        $sort_by = $request->sort_by;
        $range = $request->range;
        if($request->ajax()) {
            $users = User::getUsers($query, $country, $sort_by, $range);
                return view('pages.user_data', compact('users'))->render();
        }
    }
}
