<?php
namespace Home\Controller;

class CrowdfundingController extends BasicController {
	public function index(){
		$this->display();
	}

	public function replayindex(){$this->display();}
	public function crlist(){$this->display();}
}
