<?php
namespace Home\Controller;
use Think\Controller;
use WeChat\Api\WeChatExternal;


class PwechatController extends Controller {

		public function __construct(){

		}

		public function index(){
			$WeChatExternal =new WeChatExternal();
			$WeChatExternal->Start();
		}
}
