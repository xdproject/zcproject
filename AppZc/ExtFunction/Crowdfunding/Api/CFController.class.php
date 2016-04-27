<?php
namespace ExtFunction\Crowdfunding\Api;


use ExtFunction\Crowdfunding\Model\CrowdundingModel;
use ExtFunction\Crowdfunding\Model\CrowdundingAddonObjectModel;
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
			$this->corwdfundingOAddOnObj = new  CrowdundingAddonObjectModel();
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
			//return $this->crowdfundingObj->getObjectList();
			$temp_addQrArr = $this->crowdfundingObj->getObjectList();
			//var_dump($temp_addQrArr);
			//echo $temp_addQrArr[0]['id'];
			//print_r($temp_addQrArr);
			//echo $temp_addQrArr[0]['objname'];
			//var_dump(json_decode(file_get_contents('http://xd.studioit.cn/process.php?dt=http://www.baidu.com&level=M&size=4'),true)['imgurl']);
			//echo getQRcodeUrl('http://www.baidu.com');
			//die();
			for($i = 0; $i<count($temp_addQrArr);$i++){
				$temp_addQrArr[$i]['qrimgurl'] =getQRcodeUrl('http://www.baidu.com');
			}
			return $temp_addQrArr;
		}



	/**
	 * 为项目添加项目说明
	 * @param $oid 项目编号
	 * @param $str_body 项目内容主体
	 */
		public function addObjBody($pinfo=array()){
			
				if($this->corwdfundingOAddOnObj->AddZcProjectBody($pinfo))
					return true;
				else
					return false;
		}

	/**
	 * 
	 * @param $oid
	 * @return mixed|string 如果有相应的项目介绍内容，则直接返回，如果没有项目介绍内容则返回一段 k k??
	 */	
	public function getObjBody($oid){
		$res = $this->corwdfundingOAddOnObj->FileCheck($oid);
		if(is_array($res))
			return $res['body'];
		else
			return "请在些添加项目介绍吧！！！";
		
	}

}