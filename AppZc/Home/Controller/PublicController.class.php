<?php
namespace Home\Controller;

class PublicController extends BasicController {

	public function _initialize(){parent::_initialize();}
	public function nav(){$this->display();}
	public function header(){$this->display();}
	public function footer(){$this->display();}

}
