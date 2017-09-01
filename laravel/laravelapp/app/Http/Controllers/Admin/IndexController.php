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

    

    public function layuiIm(){
        return  view('admin.layuiIm');
    }

    public function kefu2(){
        return view('admin.kefu2');
    }
    public function layuiImQQ(){
        return view('admin.layui_im_qq');
    }

    public  function getList(){
        $json = '{
          "code": 0
          ,"msg": ""
          ,"data": {
            "mine": {
              "username": "纸飞机"
              ,"id": "100000"
              ,"status": "online"
              ,"sign": "在深邃的编码世界，做一枚轻盈的纸飞机"
              ,"avatar": "//res.layui.com/images/fly/avatar/00.jpg"
          }
          ,"friend": [{
              "groupname": "知名人物"
              ,"id": 0
              ,"list": [{
                "username": "贤心"
                ,"id": "100001"
                ,"avatar": "//tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"
                ,"sign": "这些都是测试数据，实际使用请严格按照该格式返回"
                ,"status": "online"
            },{
                "username": "刘涛tamia"
                ,"id": "100001222"
                ,"sign": "如约而至，不负姊妹欢乐颂"
                ,"avatar": "//tva4.sinaimg.cn/crop.0.1.1125.1125.180/475bb144jw8f9nwebnuhkj20v90vbwh9.jpg"
            },{
                "username": "谢楠"
                ,"id": "10034001"
                ,"avatar": "//tva2.sinaimg.cn/crop.1.0.747.747.180/633f068fjw8f9h040n951j20ku0kr74t.jpg"
                ,"sign": ""
            },{
                "username": "马小云"
                ,"id": "168168"
                ,"avatar": "//tva1.sinaimg.cn/crop.0.0.180.180.180/7fde8b93jw1e8qgp5bmzyj2050050aa8.jpg"
                ,"sign": "让天下没有难写的代码"
            },{
                "username": "徐小峥"
                ,"id": "666666"
                ,"avatar": "//tva1.sinaimg.cn/crop.0.0.512.512.180/6a4acad5jw8eqi6yaholjj20e80e8t9f.jpg"
                ,"sign": "代码在囧途，也要写到底"
            }]
        },{
          "groupname": "网红"
          ,"id": 1
          ,"list": [{
            "username": "罗玉凤"
            ,"id": "121286"
            ,"avatar": "//tva4.sinaimg.cn/crop.0.0.640.640.180/4a02849cjw8fc8vn18vktj20hs0hs75v.jpg"
            ,"sign": "在自己实力不济的时候，不要去相信什么媒体和记者。他们不是善良的人，有时候候他们的采访对当事人而言就是陷阱"
        },{
            "username": "Z_子晴"
            ,"id": "108101"
            ,"avatar": "//tva1.sinaimg.cn/crop.0.23.1242.1242.180/8693225ajw8fbimjimpjwj20yi0zs77l.jpg"
            ,"sign": "微电商达人"
        },{
            "username": "大鱼_MsYuyu"
            ,"id": "12123454"
            ,"avatar": "//tva2.sinaimg.cn/crop.0.0.512.512.180/005LMAegjw8f2bp9qg4mrj30e80e8dg5.jpg"
            ,"sign": "我瘋了！這也太準了吧  超級笑點低"
        },{
            "username": "Lemon_CC"
            ,"id": "102101"
            ,"avatar": "//tva4.sinaimg.cn/crop.0.0.180.180.180/6d424ea5jw1e8qgp5bmzyj2050050aa8.jpg"
            ,"sign": ""
        },{
            "username": "柏雪近在它香"
            ,"id": "3435343"
            ,"avatar": "//tva2.sinaimg.cn/crop.0.8.751.751.180/961a9be5jw8fczq7q98i7j20kv0lcwfn.jpg"
            ,"sign": ""
        }]
    },{
      "groupname": "我心中的女神"
      ,"id": 2
      ,"list": [{
        "username": "林心如"
        ,"id": "76543"
        ,"avatar": "//tva3.sinaimg.cn/crop.0.0.512.512.180/48f122e6jw8fcmi072lkyj20e80e8t9i.jpg"
        ,"sign": "我爱贤心"
    },{
        "username": "佟丽娅"
        ,"id": "4803920"
        ,"avatar": "//tva3.sinaimg.cn/crop.0.0.750.750.180/5033b6dbjw8etqysyifpkj20ku0kuwfw.jpg"
        ,"sign": "我也爱贤心吖吖啊"
    }]
}]
,"group": [{
  "groupname": "前端群"
  ,"id": "101"
  ,"avatar": "//tva1.sinaimg.cn/crop.0.0.200.200.50/006q8Q6bjw8f20zsdem2mj305k05kdfw.jpg"
},{
  "groupname": "Fly社区官方群"
  ,"id": "102"
  ,"avatar": "//tva2.sinaimg.cn/crop.0.0.199.199.180/005Zseqhjw1eplix1brxxj305k05kjrf.jpg"
}]
}
}';
return response()->json(json_decode($json,true));
}


public function getMembers(){
    $json = '{
      "code": 0
      ,"msg": ""
      ,"data": {
        "list": [{
          "username": "贤心"
          ,"id": "100001"
          ,"avatar": "//tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"
          ,"sign": "这些都是测试数据，实际使用请严格按照该格式返回"
      },{
          "username": "Z_子晴"
          ,"id": "108101"
          ,"avatar": "//tva1.sinaimg.cn/crop.0.23.1242.1242.180/8693225ajw8fbimjimpjwj20yi0zs77l.jpg"
          ,"sign": "微电商达人"
      },{
          "username": "Lemon_CC"
          ,"id": "102101"
          ,"avatar": "//tva4.sinaimg.cn/crop.0.0.180.180.180/6d424ea5jw1e8qgp5bmzyj2050050aa8.jpg"
          ,"sign": ""
      },{
          "username": "马小云"
          ,"id": "168168"
          ,"avatar": "//tva1.sinaimg.cn/crop.0.0.180.180.180/7fde8b93jw1e8qgp5bmzyj2050050aa8.jpg"
          ,"sign": "让天下没有难写的代码"
      },{
          "username": "徐小峥"
          ,"id": "666666"
          ,"avatar": "//tva1.sinaimg.cn/crop.0.0.512.512.180/6a4acad5jw8eqi6yaholjj20e80e8t9f.jpg"
          ,"sign": "代码在囧途，也要写到底"
      },{
          "username": "罗玉凤"
          ,"id": "121286"
          ,"avatar": "//tva4.sinaimg.cn/crop.0.0.640.640.180/4a02849cjw8fc8vn18vktj20hs0hs75v.jpg"
          ,"sign": "在自己实力不济的时候，不要去相信什么媒体和记者。他们不是善良的人，有时候候他们的采访对当事人而言就是陷阱"
      },{
          "username": "刘涛tamia"
          ,"id": "100001222"
          ,"avatar": "//tva4.sinaimg.cn/crop.0.1.1125.1125.180/475bb144jw8f9nwebnuhkj20v90vbwh9.jpg"
          ,"sign": "如约而至，不负姊妹欢乐颂"
      },{
        "username": "大鱼_MsYuyu"
        ,"id": "12123454"
        ,"avatar": "//tva2.sinaimg.cn/crop.0.0.512.512.180/005LMAegjw8f2bp9qg4mrj30e80e8dg5.jpg"
        ,"sign": "我瘋了！這也太準了吧  超級笑點低"
    },{
        "username": "谢楠"
        ,"id": "10034001"
        ,"avatar": "//tva2.sinaimg.cn/crop.1.0.747.747.180/633f068fjw8f9h040n951j20ku0kr74t.jpg"
        ,"sign": ""
    },{
        "username": "柏雪近在它香"
        ,"id": "3435343"
        ,"avatar": "//tva2.sinaimg.cn/crop.0.8.751.751.180/961a9be5jw8fczq7q98i7j20kv0lcwfn.jpg"
        ,"sign": ""
    },{
        "username": "林心如"
        ,"id": "76543"
        ,"avatar": "//tva3.sinaimg.cn/crop.0.0.512.512.180/48f122e6jw8fcmi072lkyj20e80e8t9i.jpg"
        ,"sign": "我爱贤心"
    },{
        "username": "佟丽娅"
        ,"id": "4803920"
        ,"avatar": "//tva3.sinaimg.cn/crop.0.0.750.750.180/5033b6dbjw8etqysyifpkj20ku0kuwfw.jpg"
        ,"sign": "我也爱贤心吖吖啊"
    }]
}
}';
return response()->json(json_decode($json,true));
}

    public  function layiMsgbox(){
        return view('admin.layim_msgbox');
    }

    public function layimFind(){
        return view('admin.layim_find');
    }

    public function layimChatLog(){
        return view('admin.layim_chat_log');
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


        // var_dump($session);die;
        return view('admin.create');
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

    public  function iframe(){
     return view('admin.iframe');
 }
}
