<?php
use Workerman\Worker;
use Workerman\Lib\Timer;
use Channel\Server;
use Channel\Client;
require_once __DIR__.'/Workerman/Autoloader.php';
require_once __DIR__.'/Channel/src/Server.php';
require_once __DIR__.'/Channel/src/Client.php';

$channel_server = new Server('0.0.0.0',2206);
$worker = new Worker();
$worker->onWorkerStart = function(){
	Client::connect('127.0.0.1',2206);
	Timer::add(1,function(){
		Client::publish('test event','some data'.date('Y-m-d H:i:s'));
	});
};
Worker::runAll();


?>