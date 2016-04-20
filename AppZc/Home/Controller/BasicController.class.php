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
use Think\Controller;

class BasicController extends Controller {

	public function _initialize(){
		if(!isset($_SESSION['zc_user_info']['st']))
		 			$this->error("您还没有登陆,请登陆后再进行操作!",U("Home/Login/index"));
	}





}
