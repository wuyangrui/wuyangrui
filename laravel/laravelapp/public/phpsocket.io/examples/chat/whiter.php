<?php
use Workerman\Worker;
use Workerman\WebServer;
use Workerman\Autoloader;
use PHPSocketIO\SocketIO;


// composer autoload
require_once __DIR__ . '/../../vendor/autoload.php';

$io = new SocketIO(4406);


$io->on('connection', function($socket)use($io){
	$socket->on('drawing', function($data)use($io){
		var_dump($data);
		$io->emit('drawing', $data);
	});
});

if (!defined('GLOBAL_START')) {
    Worker::runAll();
}
?>