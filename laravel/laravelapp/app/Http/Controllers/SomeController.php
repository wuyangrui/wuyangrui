<?php

namespace App\Http\Controllers;

use App\Some;
use Illuminate\Http\Request;

class SomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        copy(public_path().'/img/11.gif',public_path().'/img2/12.gif');
        return  view('some.index');

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
     * @param  \App\Some  $some
     * @return \Illuminate\Http\Response
     */
    public function show(Some $some)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Some  $some
     * @return \Illuminate\Http\Response
     */
    public function edit(Some $some)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Some  $some
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Some $some)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Some  $some
     * @return \Illuminate\Http\Response
     */
    public function destroy(Some $some)
    {
        //
    }
}
