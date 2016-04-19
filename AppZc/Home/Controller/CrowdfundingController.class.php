<?php
namespace Home\Controller;

class CrowdfundingController extends BasicController {
	public function _initialize(){parent::_initialize();}

	public function index(){
		$this->display();
	}

	public function replayindex(){$this->display();}
	public function crlist(){$this->display();}
}
