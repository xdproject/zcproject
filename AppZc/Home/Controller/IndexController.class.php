<?php
namespace Home\Controller;

class IndexController extends BasicController {
	public function _initialize(){parent::_initialize();}
    public function index(){
		 $this->display();
    }
}
