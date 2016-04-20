<?php
/******************************************************************************
 * Builder-Tools:Zend Studio v10.6.2
* Create-Date:2016-04-20 11:21:23
* ZC-Project
* Author:BarneyX
* QQ:35353415
* E-mail:vcmsdn@gmail.com
*****************************************************************************/
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
			parent::_initialize();
	}


	public function syspage(){

		$this->display();
	}
}
