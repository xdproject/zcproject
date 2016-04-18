<?php
namespace WeChat\Api;
use WeChat\Api\Wechat;
use SysConfig\Api\SysConfig;



class WeChatBasic extends Wechat{

	protected  $wechatObj;
	private $sysObj;
	protected $wechat_option = array();


	public function __construct(){
		$this->sysObj = new SysConfig();
		$this->wechat_option = $this->sysObj->getWeChatConfigInfo();
		//初始化微信助手对象
		if(is_array($this->wechat_option))
			$this->wechatObj = new Wechat($this->wechat_option);
		else
			die("APP ERROR!!!");
	}

}