<?php
use Workerman\Worker;
use Workerman\WebServer;
use Workerman\Autoloader;
use PHPSocketIO\SocketIO;

require_once __DIR__.'/../../vendor/autoload.php';

$io = new SocketIO(2000);
$io->on('workerStart',function()use($io){
	global $redis;
	$redis = new Redis();
	$redis->connect('127.0.0.1',6379);


});
$io->on('connection', function($socket){
	// $socket->addedUser = false;
	$socket->on('ping', function($data)use($socket){
		echo 'ping';
		$socket->emit('ping',$data);
	});

	// $socket->on('new message',function($data)use($socket){
	// 	$socket->broadcast->emit('new message', array(
	// 		'username' => $socket->username,
	// 		'message' => $data
	// 		));
	// });

	// $socket->on('add user', function($username)use($socket){
	// 	global $usernames,$numUsers;
	// 	$socket->username = $username;
	// 	$usernames[$username] = $username;
	// 	$numUsers++;
	// 	$socket->addedUser = true;
	// 	$socket->emit('login', array(
	// 		'numUsers' => $numUsers
	// 		));
	// 	$socket->broadcast->emit('user joined', array(
	// 		'username' => $socket->username,
	// 		'numUsers' => $numUsers
	// 		));


	// });




	// $socket->on('typing',function()use($socket){
	// 	$socket->broadcast->emit('typing', array(
	// 		'username' => $socket->username
	// 		));

	// });

	// $socket->on('stop typing', function()use($socket){
	// 	$socket->broadcast->emit('stop typing', array(
	// 		'username' => $socket->username
	// 		));
	// });

	// $socket->on('disconnect', function()use($socket){
	// 	global $usernames,$numUsers;
	// 	if($socket->addedUser){
	// 		unset($usernames[$socket->username]);
	// 		--$numUsers;

	// 		$socket->broadcast->emit('user left', array(
	// 			'username' => $socket->username,
	// 			'numUsers' => $numUsers
	// 			));
	// 	}
	// });


	$socket->on('useradd',function($userId)use($socket){
		echo $userId;
		global $users,$userNum,$redis;
		if(!isset($users[$userId])){
			$socket->userId = $userId;
			$users[$userId] = $socket;
			$userNum++;

			$socket->emit('user joined',array(
				array('name'=>'老武','id'=>20000)
				));
		}
		
	});
	//客服上线处理
	$socket->on('kefu online',function($userId)use($socket){
		echo '客服上线了';
		global $users;
		if(!isset($users['kefu'])){
			$users['kefu'] = $socket;
			$socket->broadcast->emit('kefu online',10000);
		}
		
	});

	$socket->on('user message',function($data)use($socket){
		var_dump($data);
		global $users;
		$to = $data['to'];
		$to['content'] = $data['mine']['content'];
		if(isset($users['kefu'])){
			$users['kefu']->emit('user message',$to);
		}
	});

	$socket->on('server message',function($data)use($socket){
		var_dump($data);
		global $users;
		$to = $data['to'];
		$to['content'] = $data['mine']['content'];
		if(isset($users[$to['id']])){
			$users[$to['id']]->emit('kefu message',$to);
		}
	});

	if(!defined("GLOBAL_START")){
		Worker:runAll();
	}
});
?>