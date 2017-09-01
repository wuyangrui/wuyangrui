<?php
use Workerman\Worker;
use Workerman\Lib\Timer;
use Channel\Server;
use Channel\Client;
require_once __DIR__.'/Workerman/Autoloader.php';
require_once __DIR__.'/Channel/src/Server.php';
require_once __DIR__.'/Channel/src/Client.php';


$worker = new Worker();
$worker->onWorkerStart = function(){
	Client::connect('127.0.0.1',2206);
	Client::on('test event', function($event_data){
		echo 'data return back:';
		var_dump($event_data);

	});

	Timer::add(10,function(){
		Client::unsubscribe('test event');
	},array(),false);
	
};
Worker::runAll();


?>