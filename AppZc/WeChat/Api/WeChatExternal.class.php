<?php
namespace WeChat\Api;
use WeChat\Api\WeChatBasic;

class WeChatExternal extends WeChatBasic{

	public function Start(){
		$this->InitWeChat();	}

	private function InitWeChat(){
		//var_dump($this->wechat_option);
		$this->wechatObj->valid();
		$res_type = $this->wechatObj->getRev()->getRevType();


		switch ($res_type){
			case "text":
				$this->TextMessageProcess($this->wechatObj->getRevContent());
				break;
		}

	}

	private function TextMessageProcess($str_key){
		switch ($str_key){
			case '123':
				$this->wechatObj->text('hello!!!!')->reply();
				break;

		}
	}




}