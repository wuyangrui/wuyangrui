<!DOCTYPE html>
<html>
<head>
	<title>websocket</title>
</head>
<body>
<script type="text/javascript">
	ws = new WebSocket("ws://192.168.0.103:2346");
	ws.onopen = function(){
		alert('连接成功');
		ws.send('tom');
		alert("给服务里发送了讯息");
	};
	ws.onmessage = function(e){
		alert("收到服务器的讯息：" + e.data);
	};
</script>>
</body>
</html>