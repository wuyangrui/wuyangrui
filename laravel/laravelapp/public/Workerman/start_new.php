<?php
use Workerman\Worker;
use Workerman\WebSocket;

require_once __DIR__.'/Workerman/Autoloader.php';

$ws_worker = new Worker("websocket://0.0.0.0:2345");
$ws_worker->count = 4;
$ws_worker->onWorkerStart = function($ws_worker){
	echo 'start process';
};

$ws_worker->onMessage = function($connection, $data){
	$connection->send('hello'.$data);
};

Worker::runAll();
?>