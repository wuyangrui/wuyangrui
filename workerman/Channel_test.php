<?php
use Workerman\Worker;
use Channel\Server;
use Channel\Client;
require_once __DIR__.'/Workerman/Autoloader.php';
require_once __DIR__.'/Channel/src/Server.php';
require_once __DIR__.'/Channel/src/Client.php';

$channel_server = new Server('0.0.0.0',2206);

$worker = new Worker('websocket://0.0.0.0:4236');
$worker->count = 2;
$worker->name = 'pusher';
$worker->onWorkerStart = function($worker){
	Client::connect('127.0.0.1',2206);
	$event_name = $worker->id;
	Client::on($event_name,function($event_data)use($worker){
		$to_connection_id = $event_data['to_connection_id'];
		$message = $event_data['connect'];
		if(!isset($worker->connections[$to_connection_id])){
			echo 'conection'
		}
	})
}
?>