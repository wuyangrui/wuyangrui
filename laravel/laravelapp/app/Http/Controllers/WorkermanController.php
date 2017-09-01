<?php

namespace App\Http\Controllers;

use App\Workerman;
use Illuminate\Http\Request;

class WorkermanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('workerman.index');
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
     * @param  \App\Workerman  $workerman
     * @return \Illuminate\Http\Response
     */
    public function show(Workerman $workerman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workerman  $workerman
     * @return \Illuminate\Http\Response
     */
    public function edit(Workerman $workerman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workerman  $workerman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workerman $workerman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workerman  $workerman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workerman $workerman)
    {
        //
    }


    //layim init获取数据
    public function getInit(Request $request){
        $comfrom = $request->input('comfrom');
        $static_data = '{
            "code": 0,
            "msg": "",
            "data": {
                "mine": {
                    "username": "纸飞机",
                    "id": "100000",
                    "status": "online",
                    "sign": "在深邃的编码世界，做一枚轻盈的纸飞机",
                    "avatar": "//res.layui.com/images/fly/avatar/00.jpg"
                }
            }
        }';
        $arr = json_decode($static_data,true);
        return json_encode($arr);
    }
}
