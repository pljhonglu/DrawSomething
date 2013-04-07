<?php 
require_once 'HandlerInterface.php';
require_once 'WebSocket.class.php';
require_once 'WebClient.class.php';

class MyHandler implements HandlerInterface
{
	public function __construct() {}
	
	public function handle($sourceUser, $msg, $server)
	{
		var_dump($msg['msg']);
		if ($msg['msg'] == '火车') {
			# code...
			foreach ($server->getUsers() as $user) {
			# code...
				$msg = '恭喜id为:"'.$sourceUser->id.'"的朋友回答正确';
				$server->send($user->socket,$msg);
			}
		}else{
			foreach ($server->getUsers() as $user) {
			# code...
			$server->send($user->socket,$msg['msg']);
			}
		}
	}
}