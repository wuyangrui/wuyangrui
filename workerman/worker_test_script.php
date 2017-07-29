<?php
$client = stream_socket_client('tcp://127.0.0.1:5678',$error,$message,1);
$data = array('uid'=>'10000', 'percent' => '88%');

fwrite($client, json_encode($data)."\n");
echo fread($client, 8192);
?>