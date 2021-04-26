<?php

namespace App\Http\Controllers;

use App\office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user= office::all();

        return view('search',compact('user'));

  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $request->validate([

            'name'=>'required|min:2|max:50',
            'user'=>'required|min:2|max:50',
            'afflate'=>'required|min:3|max:6',
            'count'=>'required|min:4|max:5',
            'type'=>'required|min:2|max:50',
            'data_activate'=>'date',
          
            
        ]);



        $user= new office;
        $user -> name = $request->name ;
        $user -> user = $request->user;
        $user -> afflate = $request->afflate;
        $user -> count = $request->count;
        $user -> type = $request->type;
        $user -> data_activate = $request->data_activate;
        $user -> discount = $request->discount;
        $user -> phone = $request->phone;



        $user->save();
        return view('create_seccfuly',compact('user'));
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(office $office)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\office  $office
     * @return \Illuminate\Http\Response
     */
    public function edit(office $office)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, office $office)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(office $office)
    {
        //
    }
  
}
