<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>无标题文档</title>
    <script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
    <!-- layUI -->
    <link rel="stylesheet" href="/layui/css/layui.css">
    <script type="text/javascript" src="/layui/layui.js"></script>
</head>
<style>
    body{padding:10px; font-size:14px; background:#fff; width:95%; margin:0 auto; font-size:14px; line-height:20px; overflow:hidden;}
    p{margin-bottom:10px;}
    button,input{border:1px solid #999; padding:5px 10px; margin:0 10px 10px 0;}
    button{ cursor:pointer;}
</style>
<body>
    <p><strong><label>请在关闭该层之前留个标记：</label></strong><input id="name" /></p>
    <p>这是一个新的页面，您可以通过父窗口得到这里的DOM(点击右上角关闭按钮试试)，从而操作这里的一切。也可以在这里操作父窗口。</p>

</div>
<pre class="layui-code" lay-title="标题" lay-height="200px" lay-skin="notepad" lay-encode="true" >
    <span class="run">
    var index = parent.layer.getFrameIndex(window.name); //获取窗口索引

        //让层自适应iframe
        $('#add').on('click', function(){
        $('body').append('插入很多酱油。插入很多酱油。插入很多酱油。插入很多酱油。插入很多酱油。插入很多酱油。插入很多酱油。');
        parent.layer.iframeAuto(index);
    });
    //在父层弹出一个层
    $('#new').on('click', function(){
    parent.layer.msg('Hi, man', {shade: 0.3})
});
//给父页面传值
$('#transmit').on('click', function(){
parent.$('#parentIframe').text('我被改变了');
parent.layer.tips('Look here', '#parentIframe', {time: 5000});
parent.layer.close(index);
});
//关闭iframe
$('#closeIframe').click(function(){
var val = $('#name').val();
if(val === ''){
parent.layer.msg('请填写标记');
return;
}
parent.layer.msg('您将标记 [ ' +val + ' ] 成功传送给了父窗口');
parent.layer.close(index);
});
</span>
</pre>
<div>
    <button id="add">让层自适应iframe</button>
    <button id="new">在父层弹出一个层</button>
    <button id="transmit">给父页面传值</button>
    <button id="closeIframe">关闭iframe</button>
</div>
<script type="text/javascript">
    layui.use(['code'],function(){
        layui.code();

    });
    var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
    $('#add').on('click', function(){
        $('body').append('插入很多酱油。插入很多酱油。插入很多酱油。插入很多酱油。插入很多酱油。插入很多酱油。插入很多酱油。');
        parent.layer.iframeAuto(index);
    });

    //在父层弹出一个层
    $('#new').on('click', function(){
        parent.layer.msg('Hi, man', {shade: 0.3})
    });

    //给父页面传值
    $('#transmit').on('click', function(){
        parent.$('#win-23').text('我被改变了');
        parent.layer.tips('Look here', '#win-23', {time: 5000});
        parent.layer.close(index);
    });

    //关闭iframe
    $('#closeIframe').click(function(){
        var val = $('#name').val();
        if(val === ''){
        parent.layer.msg('请填写标记');
        return;
        }
        parent.layer.msg('您将标记 [ ' +val + ' ] 成功传送给了父窗口');
        parent.layer.close(index);
    });
</script>
</body>
</html>
