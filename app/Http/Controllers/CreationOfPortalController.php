<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreationOfPortal;
use Illuminate\Support\Str;



class CreationOfPortalController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creators = CreationOfPortal::all();
        
        // ddd($creators);
        // ddd($creation);

        

        return view('new', [
            'creators' => $creators
        ]);
    }

    // function index() {
    //     return view('create');

    // }

    

    public function store(Request $request)
    {
        // return $request->input();
        // ddd($request->all());
        $portals = new CreationOfPortal;

        $portals->portal_name=$request->input("portal_name");
        $portals->creator_name=$request->input("creator_name");
        $portals->password=$request->input("passwords");
        $portals->save();
        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        ddd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
