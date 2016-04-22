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
use ExtFunction\Crowdfunding\Api\CFController;

class CrowdfundingController extends BasicController {

	public static $CFCObject = null;

	public function _initialize(){
		parent::_initialize();
		static::$CFCObject = new CFController();
	}

	public function index(){
		$this->_initialize();
		$this->assign('create_time',time());
		$this->assign('objlist',static ::$CFCObject->getObjlist());
// 		var_dump(static ::$CFCObject->getObjlist());
// 		die();
		$this->display();
	}

	public function replayindex(){$this->display();}
	public function crlist(){$this->display();}

	public function addBodyIndex(){
		if(empty(I("get.oid"))) $this->error('系统错误,请重试!');
		$this->assign('oid',I("get.oid"));
		$this->display();
	}
	public function addbodyem(){$this->display();}

	public function ueditor(){

		//$data= new Ueditor();
		$data = new \Org\Util\Ueditor();
		echo $data->output();
	}


	/**
	 * 添加新项目到数据库当中
	 */
	public function AddProject(){
		if(!IS_POST)
			$this->error("系统错误,请稍后重试!");
		$addProjectObj = D("Object");
		if($addProjectObj->create())
			$this->success("项目新建成功!");
		else
			$this->error("项目建立失败!!");


	}
}
