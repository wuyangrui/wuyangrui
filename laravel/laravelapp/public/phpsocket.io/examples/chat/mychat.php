<?php
use Workerman\Worker;
use Workerman\WebServer;
use Workerman\Autoloader;
use PHPSocketIO\SocketIO;

// composer autoload
require_once __DIR__ . '/../../vendor/autoload.php';

$io = new SocketIO(3306);
$chatId = 1;
$clients = array();
$users   = array();

$io->on('connection',function($socket){
	echo 'connect';
	global $clients;
	
	// $socket->on('userJoined', function($userId)use($socket){
		
	// 	onUserJoined($userId, $socket);
	// });
	// $socket->on('message', function($message) use ($socket){

	// 	onMessageReceived($message, $socket);
	// });

});


function onMessageReceived($message, $sendersocket){
	global $users;
	echo '=================';
	var_dump(array_key_exists($sendersocket->username, $users));
	if(array_key_exists($sendersocket->username, $users)){

		_sendAndSaveMessage($message, $sendersocket);
	}
}
function onUserJoined($userId, $socket){
	global $users;

		if(!$userId){
			$user_id = (string)rand(100,999);
			var_export($user_id);
			$socket->emit('userJoined', $user_id);
			$socket->username = $user_id;
			$users[$user_id] =  $user_id;
			_sendExistingMessage($socket);
		}else{
			$socket->username = $userId;
			$users[$userId] = $userId;
			_sendExistingMessage($socket);
		}
	
}

function _sendExistingMessage($socket){
	$message = array();
	$message['_id'] = 1;
	$message['text'] = 'My message Gary';
	$message['createdAt'] = date('Y-m-d H:i:s');
	$message['user'] = array('_id'=>2,'name'=>'React','avatar'=>'https://facebook.github.io/react/img/logo_og.png');
	$socket->emit('message',$message);
}

function _sendAndSaveMessage($message1, $sendersocket){
	var_dump($message1);
	$message = array();
	$message['_id'] = $message1['_id'];
	$message['text'] = $message1['text'];
	$message['createdAt'] = date('Y-m-d H:i:s');
	$message['user'] = array('_id'=>$message1['user']['_id'],'name'=>'Gary','avatar'=>'https://facebook.github.io/react/img/logo_og.png');
	$sendersocket->emit('message',$message);

}

if (!defined('GLOBAL_START')) {
    Worker::runAll();
}
?>