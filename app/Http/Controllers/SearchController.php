<?php

namespace App\Http\Controllers;

use App\office;
use App\search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q=$request->q;
        $user= office::where('name','LIKE','%'.$q.'%')->get();
        return view('search',compact('user'));
       

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\search  $search
     * @return \Illuminate\Http\Response
     */
    public function show(search $search)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit(search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\search  $search
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(search $search)
    {
        //
    }
}
