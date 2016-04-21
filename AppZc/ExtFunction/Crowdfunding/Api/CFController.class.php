<?php
namespace ExtFunction\Crowdfunding\Api;


use ExtFunction\Crowdfunding\Model\CrowdundingModel;
/******************************************************************************
 * Builder-Tools:Zend Studio v10.6.2
* Create-Date:2016-04-20 11:21:23
* ZC-Project
* Author:BarneyX
* QQ:35353415
* E-mail:vcmsdn@gmail.com
*****************************************************************************/

class CFController extends Api{

		public function _init(){
			$this->crowdfundingObj = new CrowdundingModel();
		}
		/**
		 * 新建众筹项目
		 * @param array $objinfo
		 * @return boolean
		 */
		public function AddZcPorject($objinfo=array()){

			if(!is_array($objinfo)) return false;
			if(!array_key_exists('objname', $objinfo))  	return false;
			if(!array_key_exists('sort', $objinfo)) 		return false;
			if(!array_key_exists('goal', $objinfo)) 		return false;
			if(!array_key_exists('start_time', $objinfo))	return false;
			if(!array_key_exists('end_time', $objinfo)) 	return false;
			if(!array_key_exists('status', $objinfo)) 		return false;
			if(!array_key_exists('descript', $objinfo)) 	return false;
			return $this->crowdfundingObj->AddProject($objinfo) ? true :false;
		}


		public function getObjlist(){
			return $this->crowdfundingObj->getObjectList();
		}
}