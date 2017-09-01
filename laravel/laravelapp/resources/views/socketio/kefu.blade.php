<!DOCTYPE html>
<html>
<head>
	<title>客服页面</title>
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


	<!-- <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>
<body>
<script type="text/javascript" src="/js/socket.io-client/socket.io.js"></script>
<script type="text/javascript">
	layui.use(['layim','layer'],function(){
		var layer = layui.layer;
		var layim = layui.layim;

		var socket = io('http://'+document.domain+':2000');
		socket.emit('ping','pong');
		socket.on('ping',function(data){
			layer.msg(data);
		});

		layim.config({
			init:{
				mine:{
					"username":"客服",
					"id":10000,
					"status":"online",
					"avatar":"//tp1.sinaimg.cn/5619439268/180/40030060651/1"
				}
			},
		});
		layim.chat({
			name:"小武",
			type:"friend",
			avatar:"//tp1.sinaimg.cn/5619439268/180/40030060651/1",
			id:20000
		});
		layim.setChatMin();
		//发送客服上线的
		socket.emit('kefu online',10000);

		layim.on('sendMessage',function(data){
			socket.emit('server message',data);
		});

		socket.on('user message',function($data){
				var obj = {};
			    	var To = $data;
			    	obj = {
			    		username: To.name
			    		,avatar: To.avatar
			    		,id: To.id
			    		,type: To.type
			    		,content: To.content
			    	}
			    	layim.setChatStatus('<span style="color:#FF5722;">在线</span>');
			    	
			    	layim.getMessage(obj);
			});
	});
</script>
</body>
</html>