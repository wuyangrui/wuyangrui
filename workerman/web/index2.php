<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	
	var ws = new WebSocket("ws://192.168.0.103:1234");
	ws.onopen = function(){
		var uid = '10000';
		alert('发送成功');
		ws.send(uid);

	};
	ws.onmessage = function(e){
		alert(e.data);
	}
</script>>
</body>
</html>