<?php
require_once __DIR__.'/GlobalData/src/Client.php';
use GlobalData\Client;

$globalData = new Client('127.0.0.1:2207');

// if(isset($globalData->somedata)){
// 	var_dump($globalData->somedata);
// 	unset($globalData->somedata);
// }else{
// 	$globalData->somedata = array(1,2,3);

// }

$globalData-> user_list = array(1,2,3);
do{
	$old_value = $new_value = $globalData->user_list;
	$new_value[] = 4;
}while(!$globalData->cas('user_list',$old_value,$new_value));

var_export($globalData->user_list);
?>