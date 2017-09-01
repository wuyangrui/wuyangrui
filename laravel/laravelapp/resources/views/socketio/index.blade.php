<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<div class="container">
		<ul class="nav nav-pills" ">
			<li class="active">
				<a href="#">
					<span class="badge pull-right">42</span>首页
				</a>
			</li>
			<li>
				<a href="#">简介</a>
			</li>
			<li>
				<a href="#">
					<span class="badge pull-right">3</span>消息
				</a>
			</li>
		</ul>
	</div>
	<div class="container">
		<button class="btn btn-primary" id="reload">刷新</button>
		<table class="layui-hide" id="test" lay-filter="test"></table>
	</div>
	<script type="text/javascript" src="/js/function.js"></script>
	<script type="text/javascript" src="/js/socket.io-client/socket.io.js"></script>
	<script type="text/javascript">
		
		
		layui.use(['table','laytpl','layer','layim'],function(){
			var socket = io('http://'+ document.domain +':2000');
			socket.emit('ping','pong');

			var table = layui.table;
			var laytpl = layui.laytpl;
			var layer = layui.layer;
			var layim = layui.layim;

			var table_data = table.render({
				elem: '#test'
				,url: '/socketio/tableData'
				,cols: [[
				{checkbox:true,LAY_CHECKED: true,fixed:true}
				,{field:'id', title: 'ID', width:80, sort: true, fixed: true}
				,{field:'username', title: '用户名', width:80,edit:'text'}
				,{field:'sex', title: '性别', width:80, sort: true}
				,{field:'city', title: '城市', width:80,templet: '#titleTpl'}
				,{field:'sign', title: '签名', width:177,event: 'setSign', style:'cursor: pointer;'}
				,{field:'experience', title: '积分', sort: true, width:80}
				,{field:'score', title: '评分', sort: true, width:80}
				,{field:'classify', title: '职业', width:80}
				,{field:'wealth', title: '财富', sort: true, width:135}
				,{fixed:'right', width:160, align:'center', toolbar: '#barDemo'}
				]]
				,page: true
				,height: 315
				,id:'test'
			});


			$('#reload').click(function(){
				table_data.reload({
					where:{
						key1:"hope_one",
						key2:"hope_two"
					}
				});
			});



			//************************************************


			//添加客服
			function kefuAdd(kefuId, kefuName){
				layim.chat({
					name:kefuName,
					type:"friend",
					avatar:"//tp1.sinaimg.cn/5619439268/180/40030060651/1",
					id:kefuId
				});
				layim.setChatMin();
			}

			var user_id = generateMixed(6);
			socket.on('ping',function(data){
				console.log(data);
				// userAdd(user_id);
				userAdd(20000);
				//同时返回两个客服的状态

			});
			socket.on('kefu online',function(data){
				// layim.setChatstatus('客服上线了');
				layer.msg('客服上线了');
				layim.setChatStatus('俺老孙上线了');
			});

			function userAdd(user_id){
				socket.emit('useradd',user_id);
				socket.on('user joined',function(data){
					//这里返还在线的客服
					$.each(data,function(index,row){
						kefuAdd(row.id, row.name);
					});
				});
			}
			

			layim.config({
				init: {
					mine: {
						"username":"Gary",
						"id": user_id,
						"status":"online",
						"remark":"热爱生命，敬畏自然",
						"avatar":"//tp1.sinaimg.cn/5619439268/180/40030060651/1"
					}
				},
				brief: true
			});



			
			

			

			//监听发送消息
			layim.on('sendMessage', function(data){
				var To = data.to;
			    //console.log(data);
			    
			    if(To.type === 'kefu'){
			    	layim.setChatStatus('<span style="color:#FF5722;">对方正在输入。。。</span>');
			    }
			    socket.emit('user message',data);
			    
			    //演示自动回复
			    // setTimeout(function(){
			    // 	var obj = {};
			    	
			    // 	obj = {
			    // 		username: To.name
			    // 		,avatar: To.avatar
			    // 		,id: To.id
			    // 		,type: To.type
			    // 		,content: "哈哈"
			    // 	}
			    // 	layim.setChatStatus('<span style="color:#FF5722;">在线</span>');
			    	
			    // 	layim.getMessage(obj);
			    // }, 1000);
			});

			socket.on('kefu message',function($data){
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