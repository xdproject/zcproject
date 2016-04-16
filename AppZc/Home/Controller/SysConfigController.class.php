<?php
namespace Home\Controller;
use SysConfig\Api\SysConfig;

class SysConfigController extends BasicController {

	private static $sysConfigMap = array();
	private $sysObj = null;

	public function index(){
		$this->assign('syslist',static::$sysConfigMap);
		$this->display();

	}

	public function _initialize(){
			$this->sysObj = new SysConfig();
			static::$sysConfigMap=$this->sysObj->getSysConfigList();
	}


	public function syspage(){

		$this->display();
	}
}
