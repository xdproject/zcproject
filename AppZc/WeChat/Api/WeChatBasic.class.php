<?php
namespace WeChat\Api;
use WeChat\Api\Wechat;
use SysConfig\Api\SysConfig;
use WeChat\Model\WeChatModel;



class WeChatBasic extends Wechat{

	protected  $wechatObj;
	private $sysObj;
	private $wechat_option = array();
	protected $model;


	public function __construct(){
		$this->model = new WeChatModel();
		$this->sysObj = new SysConfig();
		$this->wechat_option = $this->sysObj->getWeChatConfigInfo();
		//初始化微信助手对象
		$this->wechatObj = new Wechat($this->wechat_option);
		$_SESSION['wechat_site']=$this->wechat_option;


	}

}