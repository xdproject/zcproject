<?php
/**********************************************************************************************
 * 微信回复处理类,管理着管理员设置的关键字回复
 * 作者:小白怕怕
 * QQ:353532415
 *
 */
namespace WeChat\Api;
use WeChat\Api\WeChatBasic;

class WeChatExternal extends WeChatBasic{

	public function Start(){$this->InitWeChat();}

	/**
	 * 初始化微信对象
	 */
	private function InitWeChat(){
		$this->wechatObj->valid();
		$res_type = $this->wechatObj->getRev()->getRevType();
		//判断消息的类型
		switch ($res_type){
			case "text":
				$this->TextMsgProcess($this->wechatObj->getRevContent());
			case "Event":

				break;
			default:
				break;
		}

	}
	/**
	 * 回复普通的文本信息
	 * @param unknown $str_key
	 */
	private function TextMsgProcess($str_key){
		switch ($str_key){
			case '123':
				$this->wechatObj->text('hello!!!!')->reply();
				break;

		}
	}
	/**
	 * 回复图文信息
	 * @param unknown $str_key
	 */
	private function PrcMsgProcess($str_key){

	}




}