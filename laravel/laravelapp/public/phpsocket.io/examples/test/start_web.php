<?php
use Workerman\Worker;
use Workerman\WebServer;
use Workerman\Autoloader;
use PHPSocketIO\SocketIO;

require_once __DIR__.'/../../vendor/autoload.php';

$web = new WebServer('http://0.0.0.0:8080');
$web->addRoot('socketio.dev',__DIR__.'/web');

if(!defined('GLOBAL_START')){
	Worker::runAll();
}
?>