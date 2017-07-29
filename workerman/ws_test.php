<?php
use Workerman\Worker;
use Workerman\WebServer;
require_once __DIR__.'/Workerman/Autoloader.php';

$ws_worker = new Worker("websocket://0.0.0.0:2346");

$ws_worker->count = 4;

$ws_worker->onMessage = function($connection, $data){
	$connection->send('hello world'.$data);

};

$web_server = new WebServer("http://0.0.0.0:2345");
$web_server->addRoot('wuyangrui2.com',__DIR__."/web");


$tcp_worker = new Worker("tcp://0.0.0.0:2347");

// 启动4个进程对外提供服务
$tcp_worker->count = 4;

// 当客户端发来数据时
$tcp_worker->onMessage = function($connection, $data)
{
    // 向客户端发送hello $data
    $connection->send('hello ' . $data);
};
Worker::runAll();
?>