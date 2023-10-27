<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Models\User;


use App\Http\Controllers\ListController;


class ListController extends Controller
{
function index(){
    return view('list');
}



    function list()
    {
        $users =  User::all();
        return view('listnew', ["users"=>$users]);
    }

    // function create(Request $req) {
    //     return $req->input();
    // }
}
