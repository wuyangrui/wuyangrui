<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo Carbon::now()."<br>";

        echo Carbon::now();

        echo Carbon::tomorrow()."<br>";
        echo Carbon::yesterday()."<br>";
        echo Carbon::today()."<br>";
        echo (Carbon::now()->year)."<br>";
        echo (Carbon::now()->month)."<br>";
        echo (Carbon::now()->day)."<br>";
        echo (CarBon::now()->hour)."<br>";
        echo (Carbon::now()->minute)."<br>";
        echo (Carbon::now()->second)."<br>";
        echo (Carbon::now()->micro)."<br>";
        echo (Carbon::now()->dayOfWeek)."<br>";
        echo (Carbon::now()->dayOfYear)."<br>";
        echo (Carbon::now()->weekOfMonth)."<br>";
        echo (Carbon::now()->weekOfYear)."<br>";
        echo (Carbon::now()->daysInMonth)."<br>";
        echo (Carbon::now()->timestamp)."<br>";

        $date = Carbon::create(2012, 1, 31, 12 ,31 , 22);

        echo $date."<br>";
        echo ($date->startOfDay())."<br>";
        echo ($date->endOfDay())."<br>";
        echo ($date->startOfMonth())."<br>";
        echo ($date->endOfMonth())."<br>";
        echo ($date->startOfYear())."<br>";
        echo ($date->endOfYear())."<br>";
        echo ($date->startOfDecade())."<br>";
        echo ($date->endOfDecade())."<br>";
        echo ($date->startOfCentury())."<br>";

        echo ($date->endOfCentury())."<br>";
        echo ($date->startOfWeek())."<br>";
        echo ($date->endOfWeek())."<br>";
        echo ($date->next())."<br>";
        echo ($date->previous())."<br>";

        echo ($date->next(Carbon::WEDNESDAY))."<br>";


        $date = Carbon::now();



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
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
        $data = $request->input('pic');
        var_dump($data);die;
        \Log::info($data);
        
        return response()->json(['status'=>'哈哈']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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


    public function testData(){
        return  response()->json(json_decode('{"code":0,"msg":"","count":1000,"data":[{"id":10000,"username":"user-0","sex":"女","city":"城市-0","sign":"签名-0","experience":499,"logins":138,"wealth":62007298,"classify":"词人","score":"11.47"},{"id":10001,"username":"user-1","sex":"男","city":"城市-1","sign":"签名-1","experience":960,"logins":24,"wealth":71513669,"classify":"诗人","score":"28.34"},{"id":10002,"username":"user-2","sex":"女","city":"城市-2","sign":"签名-2ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd","experience":911,"logins":49,"wealth":12867792,"classify":"作家","score":"25.85"},{"id":10003,"username":"user-3","sex":"男","city":"城市-3","sign":"签名-3","experience":112,"logins":32,"wealth":6736741,"classify":"作家","score":"95.36"},{"id":10004,"username":"user-4","sex":"女","city":"城市-4","sign":"签名-4","experience":695,"logins":159,"wealth":70617394,"classify":"酱油","score":"42.48"},{"id":10005,"username":"user-5","sex":"女","city":"城市-5","sign":"签名-5","experience":407,"logins":88,"wealth":98900963,"classify":"词人","score":"77.31"},{"id":10006,"username":"user-6","sex":"男","city":"城市-6","sign":"签名-6","experience":230,"logins":73,"wealth":4063839,"classify":"酱油","score":"72.66"},{"id":10007,"username":"user-7","sex":"女","city":"城市-7","sign":"签名-7","experience":1042,"logins":198,"wealth":9805772,"classify":"词人","score":"2.88"},{"id":10008,"username":"user-8","sex":"女","city":"城市-8","sign":"签名-8","experience":942,"logins":147,"wealth":96230862,"classify":"作家","score":"79.54"},{"id":10009,"username":"user-9","sex":"男","city":"城市-9","sign":"签名-9","experience":1014,"logins":104,"wealth":55726955,"classify":"酱油","score":"64.30"},{"id":10010,"username":"user-10","sex":"女","city":"城市-10","sign":"签名-10","experience":700,"logins":66,"wealth":93316089,"classify":"酱油","score":"94.40"},{"id":10011,"username":"user-11","sex":"男","city":"城市-11","sign":"签名-11","experience":1014,"logins":15,"wealth":74173151,"classify":"酱油","score":"12.68"},{"id":10012,"username":"user-12","sex":"女","city":"城市-12","sign":"签名-12","experience":332,"logins":48,"wealth":14365229,"classify":"词人","score":"86.82"},{"id":10013,"username":"user-13","sex":"男","city":"城市-13","sign":"签名-13","experience":405,"logins":120,"wealth":34695563,"classify":"词人","score":"33.42"},{"id":10014,"username":"user-14","sex":"男","city":"城市-14","sign":"签名-14","experience":1026,"logins":72,"wealth":90734164,"classify":"作家","score":"75.31"},{"id":10015,"username":"user-15","sex":"女","city":"城市-15","sign":"签名-15","experience":916,"logins":32,"wealth":90446407,"classify":"词人","score":"86.95"},{"id":10016,"username":"user-16","sex":"女","city":"城市-16","sign":"签名-16","experience":1086,"logins":148,"wealth":43784209,"classify":"诗人","score":"30.62"},{"id":10017,"username":"user-17","sex":"男","city":"城市-17","sign":"签名-17","experience":675,"logins":11,"wealth":42448971,"classify":"酱油","score":"74.11"},{"id":10018,"username":"user-18","sex":"女","city":"城市-18","sign":"签名-18","experience":576,"logins":42,"wealth":85830822,"classify":"酱油","score":"42.84"},{"id":10019,"username":"user-19","sex":"女","city":"城市-19","sign":"签名-19","experience":196,"logins":54,"wealth":51475132,"classify":"酱油","score":"15.24"},{"id":10020,"username":"user-20","sex":"男","city":"城市-20","sign":"签名-20","experience":283,"logins":65,"wealth":73233524,"classify":"作家","score":"83.49"},{"id":10021,"username":"user-21","sex":"女","city":"城市-21","sign":"签名-21","experience":867,"logins":157,"wealth":28876711,"classify":"诗人","score":"62.48"},{"id":10022,"username":"user-22","sex":"男","city":"城市-22","sign":"签名-22","experience":163,"logins":124,"wealth":81671948,"classify":"诗人","score":"87.03"},{"id":10023,"username":"user-23","sex":"男","city":"城市-23","sign":"签名-23","experience":799,"logins":55,"wealth":22322407,"classify":"词人","score":"8.18"},{"id":10024,"username":"user-24","sex":"女","city":"城市-24","sign":"签名-24","experience":420,"logins":86,"wealth":97581235,"classify":"诗人","score":"6.86"},{"id":10025,"username":"user-25","sex":"男","city":"城市-25","sign":"签名-25","experience":766,"logins":83,"wealth":51342572,"classify":"作家","score":"11.04"},{"id":10026,"username":"user-26","sex":"女","city":"城市-26","sign":"签名-26","experience":725,"logins":107,"wealth":39802662,"classify":"词人","score":"40.83"},{"id":10027,"username":"user-27","sex":"男","city":"城市-27","sign":"签名-27","experience":649,"logins":118,"wealth":87274288,"classify":"酱油","score":"17.97"},{"id":10028,"username":"user-28","sex":"男","city":"城市-28","sign":"签名-28","experience":1074,"logins":161,"wealth":55614074,"classify":"词人","score":"83.21"},{"id":10029,"username":"user-29","sex":"男","city":"城市-29","sign":"签名-29","experience":740,"logins":177,"wealth":12630674,"classify":"酱油","score":"77.64"}]}',true));
    }


    public function upload(Request $request){
        \Log::info(json_encode($_FILES));
        // return response()->json(['code'=>0,'msg'=>'ok','data'=>'dd']);
        echo '{"code":0,"msg":"'.$_FILES['file']['name'].'"}';
    }
}
