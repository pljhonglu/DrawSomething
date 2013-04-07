<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        header("Content-Type:text/html; charset=utf-8");
		echo 'hello ThinkPHP!';
	}
	public function demo1(){
	
		$this->display();
	}
	public function resault(){
	
		$this->display();
	}
	public function test(){
		$this->display();
	}
	public function test_1(){
		$this->display();
	}
	public function guest(){
		$this->display();
	}
	public function push(){
		$tools = $_POST['tools'];
		$color = $_POST['color'];
		$size = $_POST['size'];
		$pathx  = $_POST['pathx'];
		$pathy = $_POST['pathy'];
		$sql = 'CREATE TABLE `draw_room1` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`tools` varchar(255) NOT NULL DEFAULT \'pen\' COMMENT \'工具：画笔，橡皮，清除\',
				`color` varchar(255) DEFAULT \'#000000\' COMMENT \'画笔颜色\',
				`size` int(11) DEFAULT NULL COMMENT \'画笔粗细\',
				`pathx` text NOT NULL COMMENT \'路径\',
				`pathy` text NOT NULL,
				PRIMARY KEY (`id`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;';	
		
		
		
		$this->AjaxReturn($pathx," ",1);
	}
	public function getQuestion(){
		$roomnum = $_GET['roomnum'];
		echo $roomnum;
	}
}