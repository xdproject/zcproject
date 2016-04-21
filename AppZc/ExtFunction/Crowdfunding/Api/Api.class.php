<?php
/******************************************************************************
 * Builder-Tools:Zend Studio v10.6.2
* Create-Date:2016-04-20 11:21:23
* ZC-Project
* Author:BarneyX
* QQ:35353415
* E-mail:vcmsdn@gmail.com
*****************************************************************************/
namespace ExtFunction\Crowdfunding\Api;

define('CROWDFUNDING_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
if(!defined(EXTFUNCTION_FUNCTIONPLUGIN)) define('EXTFUNCTION_FUNCTIONPLUGIN',dirname(dirname(CROWDFUNDING_PATH)).DIRECTORY_SEPARATOR);


abstract  class Api{

	protected  $crowdfundingObj;

	abstract  function _init();
	public function __construct(){$this->_init();}
}