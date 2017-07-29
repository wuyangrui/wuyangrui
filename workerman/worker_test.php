<?php
use Workerman\Worker;
use Workerman\WebServer;
require_once './Workerman/Autoloader.php';

$worker = new Worker('websocket://0.0.0.0:1234');

$worker->count = 1;
$worker->onWorkerStart = function($worker){
	$inner_text_worker = new Worker('text://0.0.0.0:5678');
	$inner_text_worker->onMessage = function($connection, $buffer){
		
		
		$data = json_decode($buffer, true);
		$uid = $data['uid'];
		$ret = sendMessageByUid($uid, $buffer);
		$connection->send($ret ? 'ok' : 'fail');

	};

	$inner_text_worker->listen();
};

$worker->uidConnections = array();

$worker->onMessage = function($connection, $data){
	global $worker;
	if(!isset($connection->uid)){
		$connection->uid = $data;
		$worker->uidConnections[$connection->uid] = $connection;
		return;
	}
};

$worker->onClose = function($connection){
	global $worker;
	if(isset($connection->uid)){
		unset($worker->uidConnections[$connection->uid]);
	}
};


function broadcast($message){
	global $worker;
	foreach ($worker->uidConnections as $connection) {
		# code...
		$connection->send($message);
	}
}


function sendMessageByUid($uid, $message){
	global $worker;
	if(isset($worker->uidConnections[$uid])){
		$connection = $worker->uidConnections[$uid];
		$connection->send($message);
		return true;
	}
	return false;
}


$webserver = new WebServer("http://0.0.0.0:5555");
$webserver->addRoot('localhost',__DIR__.'/web');
Worker::runAll();
?>