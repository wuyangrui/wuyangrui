<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- layUI -->
	<!-- <link rel="stylesheet" href="/layui/css/layui.css">
	<script type="text/javascript" src="/layui/layui.all.js"></script> -->
</head>
<body>
	<h1>ajax 测试</h1>
	<button id="send">发送</button>

	<script type="text/javascript">
		$('#send').click(function(){
			var data = {"api_token":"12345678","username":'gary',"sex":'boy',"pic":["/Uploads/Uploads/2017-08-26/RZIlODrcBinrUXKN.jpg","/Uploads/Uploads/2017-08-26/ahAVfJJljCJfxlpQ.jpg","/Uploads/Uploads/2017-08-26/sEU9HiGXSQufjOGk.jpg"]};

			$.ajax({
				type: "POST",
				url : "/api/user?api_token=12345678",
				dataType : "json",
				contentType : 'application/json;charset=utf-8',
				data : JSON.stringify(data),
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				beforeSend : function(){

				},
				success : function(data){
					alert(data.status);
				}
			});
		});
	</script>
	<h1>ui table测试</h1>
	<table class="layui-table" lay-data="{height:315, url:'http://www.layui.com/demo/table/user/?page=1&limit=30', page:true, id:'test'}"  lay-filter="test">
		<thead>
			<tr>
				<th lay-data="{field:'id', width:80, sort: true}">ID</th>
				<th lay-data="{field:'username', width:80}">用户名</th>
				<th lay-data="{field:'sex', width:80, sort: true}">性别</th>
				<th lay-data="{field:'city', width:80}">城市</th>
				<th lay-data="{field:'sign', width:177}">签名</th>
				<th lay-data="{field:'experience', width:80, sort: true}">积分</th>
				<th lay-data="{field:'score', width:80, sort: true}">评分</th>
				<th lay-data="{field:'classify', width:80}">职业</th>
				<th lay-data="{field:'wealth', width:135, sort: true}">财富</th>
			</tr>
		</thead>
	</table>
	
</body>
</html>