<?php
namespace Home\Controller;

use WeChat\Api\WeChatUser;
class WeChatUserController extends BasicController {
	private static $USER_LIST;
	public function _initialize(){
		static::$USER_LIST = new WeChatUser();

	}
	public function index(){
		$this->assign('wulist',static::$USER_LIST->getWeChatAttentionUserList());
		$this->display();
	}

	public function UpdateUserList(){
		if(static::$USER_LIST->SaveWeChatAttentionUserToDataBase())
			$this->success("OK!");
		else
			$this->error("NO!!");
	}

	public function replayindex(){$this->display();}
	public function replaylist(){$this->display();}
}
