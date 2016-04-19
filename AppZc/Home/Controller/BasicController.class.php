<?php
namespace Home\Controller;
use Think\Controller;

class BasicController extends Controller {

	public function _initialize(){
		if(!isset($_SESSION['zc_user_info']['st']))
		 			$this->error("您还没有登陆,请登陆后再进行操作!",U("Home/Login/index"));
	}


}
