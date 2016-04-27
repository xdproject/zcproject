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
define("HOME_PATH",dirname(dirname(dirname(CROWDFUNDING_PATH))).DIRECTORY_SEPARATOR.'Home'.DIRECTORY_SEPARATOR);
include_once HOME_PATH.'Common'.DIRECTORY_SEPARATOR.'functions.php';

abstract  class Api{

	protected  $crowdfundingObj;
	protected  $corwdfundingOAddOnObj;

	abstract  function _init();
	public function __construct(){$this->_init();}
}