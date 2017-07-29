<?php
require_once __DIR__.'/GlobalData/src/Client.php';
use GlobalData\Client;

$globalData = new Client('127.0.0.1:2207');

if(isset($globalData->somedata)){
	var_dump($globalData->somedata);
	unset($globalData->somedata);
}else{
	$globalData->somedata = array(1,2,3);

}
?>