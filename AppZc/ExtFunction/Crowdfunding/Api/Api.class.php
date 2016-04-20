<?php
namespace ExtFunction\Crowdfunding\Api;

abstract  class Api{



	protected  $crowdfundingObj;

	protected function _init();
	public function __construct(){$this->_init();}
}