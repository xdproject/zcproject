<?php
namespace Home\Controller;

class WeChatUserController extends BasicController {
	public function index(){
		$this->display();
	}

	public function replayindex(){$this->display();}
	public function replaylist(){$this->display();}
}
