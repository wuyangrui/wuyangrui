<!DOCTYPE html>
<html>
<head>
	<title>Workerman测试页面</title>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />

	<!-- 全局样式导入  -->
	<!-- <link rel="stylesheet" type="text/css" href="css/admin.css"> -->
	<!-- bootstrap样式 引入   -->
	<!-- <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7.min.css">
	

	<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap-3.3.7.min.js"></script>

	<!-- layUI -->
	<link rel="stylesheet" href="/layui/css/layui.css">
	<script type="text/javascript" src="/layui/layui.js"></script>
	

	<!-- 文件上传 -->
	<link rel="stylesheet" href="/dist/ssi-uploader/styles/ssi-uploader.css"/> 
	<script src="/dist/ssi-uploader/js/ssi-uploader.min.js"></script> 
</head>
<body>
	<div class="container">
		<table class="table">
			<caption>抓取到数据</caption>
			<thead>
				<tr>
					<th>时间</th>
					<th>内容</th>
				</tr>
			</thead>
			<tbody class="new-content">

			</tbody>
		</table>
	</div>
	<script type="text/javascript">

		
		layui.use(['layer','layim'],function(){
			var layim = layui.layim;
			var layer = layui.layer;
		//出书画websocket
		ws = new WebSocket("ws://laravel.nginx.dev:2345");
		ws.onopen = function(){
			layer.msg('连接成功');
			ws.send('10000');
			
		};
		ws.onmessage = function(e){
			layer.msg("收到服务器的讯息：" + e.data);
		};


		layim.config({
			init:{
				// url:"/workerman/getInit",
				// data:{"comform":100},
				// type:"get"
				//配置客户信息
			      mine: {
			        "username": "访客" //我的昵称
			        ,"id": "100000123" //我的ID
			        ,"status": "online" //在线状态 online：在线、hide：隐身
			        ,"remark": "在深邃的编码世界，做一枚轻盈的纸飞机" //我的签名
			        ,"avatar": "//tp1.sinaimg.cn/5619439268/180/40030060651/1" //我的头像
			      }
			},
			brief:true
		});

		layim.chat({
			name:'助理',
			type:'kefu',
			avatar:'//tp1.sinaimg.cn/5619439268/180/40030060651/1',
			id:'z-1000'
		});
		layim.setChatMin();
		
		layim.setChatStatus('<span style="color:green;">在线</span>');
		layim.getMessage({
			username:"助理",
			id:"z-1000",
			avatar:"//tp1.sinaimg.cn/5619439268/180/40030060651/1",
			type:"kefu",
			content:"你有啥问题，开始问我吧",
			timestamp:new Date().getTime()
		});

			// layim.on('sendMessage', function(data){
			// 	var To = data.to;
			//     console.log(data);
			    
			//     if(To.type === 'friend'){
			//     	layim.setChatStatus('<span style="color:#FF5722;">对方正在输入。。。</span>');
			//     }
			    
			//     //演示自动回复
			//     setTimeout(function(){
			//     	var obj = {};
			//     	if(To.type === 'group'){
			//     		obj = {
			//     			username: '模拟群员'+(Math.random()*100|0)
			//     			,avatar: layui.cache.dir + 'images/face/'+ (Math.random()*72|0) + '.gif'
			//     			,id: To.id
			//     			,type: To.type
			//     			,content: 'aaa'
			//     		}
			//     	} else {
			//     		obj = {
			//     			username: To.name
			//     			,avatar: To.avatar
			//     			,id: To.id
			//     			,type: To.type
			//     			,content: 'dd'
			//     		}
			//     		layim.setChatStatus('<span style="color:#FF5722;">在线</span>');
			//     	}
			//     	layim.getMessage(obj);
			//     }, 1000);
			// });


		});
	</script>
</body>
</html>