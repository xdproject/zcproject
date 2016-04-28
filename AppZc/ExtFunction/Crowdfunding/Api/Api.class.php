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

	//下面两个写的有点繁琐,可以合并成一个对象,下次当成BUG把他修改了
	protected  $crowdfundingObj; //项目概要模型对象
	protected  $corwdfundingOAddOnObj; //项目附加表对象

	//项目文章对象
	protected  $corwdfundingArchivesObj;

	abstract  function _init();
	public function __construct(){$this->_init();}
}