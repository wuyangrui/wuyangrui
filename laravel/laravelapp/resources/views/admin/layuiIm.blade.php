<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />

	<!-- 全局样式导入  -->
	<link rel="stylesheet" type="text/css" href="css/admin.css">
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


	<title>layuiIm</title>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">菜鸟教程</a>
			</div>

			<div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">iOS</a></li>
					<li><a href="#">SVN</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Java
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">jmeter</a></li>
							<li><a href="#">EJB</a></li>
							<li><a href="#">Jasper Report</a></li>
							<li class="divider"></li>
							<li><a href="#">分离的链接</a></li>
							<li class="divider"></li>
							<li><a href="#">另一个分离的链接</a></li>
						</ul>
					</li>
				</ul>
			</div>

			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">提交</button>
			</form>

			<div>
				<p class="navbar-text navbar-right">导航栏文本</p>
			</div>

			<ul class="nav navbar-nav navbar-right"> 
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> 注册</a></li> 
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li> 
			</ul> 
		</div>


	</nav>
	<div>
		
		<div id="myCarousel" class="carousel slide">
			<!-- 轮播（Carousel）指标 -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- 轮播（Carousel）项目 -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="https://f11.baidu.com/it/u=1981748892,3031683197&fm=72" alt="First slide">
					<div class="carousel-caption">标题 1</div>
				</div>
				<div class="item">
					<img src="https://f11.baidu.com/it/u=1981748892,3031683197&fm=72" alt="Second slide">
					<div class="carousel-caption">标题 2</div>
				</div>
				<div class="item">
					<img src="https://f11.baidu.com/it/u=1981748892,3031683197&fm=72" alt="Third slide">
					<div class="carousel-caption">标题 3</div>
				</div>
			</div>
			<!-- 轮播（Carousel）导航 -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			<!-- 控制按钮 -->
			
		</div> 
		
		
	</div>
	
	
	<div class="container">
		<div style="background-color: #fff;">
			<ul class="nav nav-pills">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">SVN</a></li>
				<li><a href="#">iOS</a></li>
				<li><a href="#">VB.Net</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Java <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Swing</a></li>
						<li><a href="#">jMeter</a></li>
						<li><a href="#">EJB</a></li>
						<li class="divider"></li>
						<li><a href="#">分离的链接</a></li>
					</ul>
				</li>
				<li><a href="#">PHP</a></li>
			</ul>
		</div>
		<div class="jumbotron">
			<div class="row">
				<div class="col-sm-8">
					<div class="jumbotron layui-bg-green"></div>
					<div class="jumbotron layui-bg-green"></div>
					<div class="jumbotron layui-bg-green"></div>
				</div>
				<div class="col-sm-4">
					<div class="jumbotron layui-bg-red"></div>
					<div class="jumbotron layui-bg-red"></div>
					<div class="jumbotron layui-bg-red"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="jumbotron"></div>
	</div>
	<script>
		$(function(){
			$('#myCarousel').carousel({
				interval: 1000
			})
		        // 初始化轮播
		        $(".start-slide").click(function(){
		        	$("#myCarousel").carousel('cycle');
		        });
		        // 停止轮播
		        $(".pause-slide").click(function(){
		        	$("#myCarousel").carousel('pause');
		        });
		        // 循环轮播到上一个项目
		        $(".prev-slide").click(function(){
		        	$("#myCarousel").carousel('prev');
		        });
		        // 循环轮播到下一个项目
		        $(".next-slide").click(function(){
		        	$("#myCarousel").carousel('next');
		        });
		        // 循环轮播到某个特定的帧 
		        $(".slide-one").click(function(){
		        	$("#myCarousel").carousel(0);
		        });
		        $(".slide-two").click(function(){
		        	$("#myCarousel").carousel(1);
		        });
		        $(".slide-three").click(function(){
		        	$("#myCarousel").carousel(2);
		        });
		    });
		</script>
		<script type="text/javascript">
			layui.use('layim', function(layim){

				var layim = layui.layim;

				layim.config({
					init: {
				      //配置客户信息
				      mine: {
				        "username": "访客" //我的昵称
				        ,"id": "100000123" //我的ID
				        ,"status": "online" //在线状态 online：在线、hide：隐身
				        ,"remark": "在深邃的编码世界，做一枚轻盈的纸飞机" //我的签名
				        ,"avatar": "//res.layui.com/images/fly/avatar/00.jpg" //我的头像
				    }
				}
				    //开启客服模式
				    ,brief: true
				});

				  //打开一个客服面板
				  layim.chat({
				    name: '在线客服一' //名称
				    ,type: 'kefu' //聊天类型
				    ,avatar: '//tp1.sinaimg.cn/5619439268/180/40030060651/1' //头像
				    ,id: 1111111 //定义唯一的id方便你处理信息
				}).chat({
				    name: '在线客服二' //名称
				    ,type: 'kefu' //聊天类型
				    ,avatar: '//tp1.sinaimg.cn/5619439268/180/40030060651/1' //头像
				    ,id: 2222222 //定义唯一的id方便你处理信息
				});
				  layim.setChatMin(); //收缩聊天面板

				});

			
		</script>
	</body>
	</html>