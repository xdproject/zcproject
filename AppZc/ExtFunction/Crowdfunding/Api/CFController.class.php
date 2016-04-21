<?php
namespace ExtFunction\Crowdfunding\Api;


/******************************************************************************
 * Builder-Tools:Zend Studio v10.6.2
* Create-Date:2016-04-20 11:21:23
* ZC-Project
* Author:BarneyX
* QQ:35353415
* E-mail:vcmsdn@gmail.com
*****************************************************************************/

class CFController extends Api{

	private    $STR_FUNCTIONNAME="众筹应用";
	private    $STR_FUNCITONVERSION="v1.0.0";
	private    $STR_FUNCTIONSTATUS=TRUE;

	/* (non-PHPdoc)
	 * @see \ExtFunction\IFunctionsPlugin::getFunctionName()
	 */
	public function getFunctionName() {
		return static::$STR_FUNCTIONNAME;
	}

	/* (non-PHPdoc)
	 * @see \ExtFunction\IFunctionsPlugin::getFunctionStatus()
	 */
	public function getFunctionStatus() {
		return static::$STR_FUNCTIONSTATUS;

	}

	/* (non-PHPdoc)
	 * @see \ExtFunction\IFunctionsPlugin::getFunctionVersion()
	 */
	public function getFunctionVersion() {
		return static::$STR_FUNCITONVERSION;

	}

	/* (non-PHPdoc)
	 * @see \ExtFunction\IFunctionsPlugin::InitPlugin()
	 */
	public function InitPlugin() {
		// TODO Auto-generated method stub

	}

	/* (non-PHPdoc)
	 * @see \ExtFunction\IFunctionsPlugin::Start()
	 */
	public function Start() {
		$this->index();

	}

	public function __construct(){
	//	$this->InitPlugin();
	}


	private function index(){
		$this->display();
	}





}