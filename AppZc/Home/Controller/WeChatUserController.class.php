<?php
namespace Home\Controller;
use WeChat\Api\WeChatUser;

class WeChatUserController extends BasicController {

	private static $USER_LIST;
	public function _initialize(){
		static::$USER_LIST = new WeChatUser();
		parent::_initialize();

	}
	public function index(){
		//var_dump($_SESSION);
		//$this->assign('wulist',static::$USER_LIST->getWeChatAttentionUserList());
		$userlist = D("Wechatuserinfo");
		$count = $userlist->where()->count();
		$page = new \Think\Page($count,25);
		$show = $page->show();
		$list =$userlist->where()->order('id')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('wulist',$list);
		$this->assign('page',$show);
		$this->display();
	}

	public function UpdateUserList(){
		if(static::$USER_LIST->SaveWeChatAttentionUserToDataBase())
			$this->success("同步平台用户成功!",U("WeChatUser/index"));
		else
			$this->error("同步时可能出了点小意外!");
	}

	public function replayindex(){$this->display();}
	public function replaylist(){$this->display();}
}
