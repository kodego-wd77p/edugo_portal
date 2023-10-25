<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\CreatePortalController;


class CreatePortalController extends Controller
{
    function index() {
        return view('create');
    }
}
