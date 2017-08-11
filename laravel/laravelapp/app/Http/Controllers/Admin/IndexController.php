<?php

namespace App\Http\Controllers\Admin;

use App\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\TestContract;
use Auth;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TestContract $test)
    {
        //
        // $test->callMe('Gary');
        // return  Auth::id();
        return  view('admin.list');
        
        // session(['sessionOne' => 'session value']);
        
        // return back()->withInput()->with('status','ok');
        // echo csrf_token();
         // return view('test.create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        // return  response()->file('11.gif');
        $session = $request->session()->all();

        // var_dump($session);die;
        return view('test.create',compact('session'));
        // echo 'this is cteate function';
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
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test, $show_id)
    {
        //
        echo 'this is  show  fucntion, the show_id = '.session('status');

        return  back()->with('status','come from show session');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
