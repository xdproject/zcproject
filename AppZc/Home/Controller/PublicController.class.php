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

class PublicController extends BasicController {

	public function _initialize(){parent::_initialize();}
	public function nav(){$this->display();}
	public function header(){$this->display();}
	public function footer(){$this->display();}
	public function uedit(){$this->display();}
	public function msgbox{$this->display();}

}
