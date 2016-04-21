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
	public function _initialize(){parent::_initialize();}

	public function index(){
		//$this->display();
		$test = new CFController();
		$test->Start();
	}

	public function replayindex(){$this->display();}
	public function crlist(){$this->display();}

	public function AddProject(){
		if(!IS_POST)
			$this->error("系统错误,请稍后重试!");
		else{


		}


	}
}
