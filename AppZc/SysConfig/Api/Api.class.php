<?php
namespace  SysConfig\Api;

abstract class Api{


	protected  $sysObj;


	public function __construct(){ $this->__init();}

	abstract  function __init();
}