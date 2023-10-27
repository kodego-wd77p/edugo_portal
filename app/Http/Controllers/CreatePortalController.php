<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreationOfPortal;

use App\Http\Controllers\CreatePortalController;



class CreatePortalController extends Controller
{
    function index() {
        return view('create');
        
    }

    

    // public function store(Request $request){
    //     // return $req->input();
    //     $portals = new CreationOfPortal;$portals->portal_name=$request->input("portal_name");
    //     $portals->creator_name=$request->input("creator_name");
    //     $portals->password=$request->input("passwords");
    //     $portals->save();
        


    // }
}
