<?php
namespace ExtFunction\Crowdfunding\Api;


use ExtFunction\Crowdfunding\Model\CrowdundingArchivesModel;
use ExtFunction\Crowdfunding\Model\CrowdundingModel;
use ExtFunction\Crowdfunding\Model\CrowdundingAddonObjectModel;
/******************************************************************************
 * Builder-Tools:Zend Studio v10.6.2
* Create-Date:2016-04-29
* ZC-Project
* Author:BarneyX
* QQ:35353415
* E-mail:vcmsdn@gmail.com
*****************************************************************************/

class CFController extends Api{

		public function _init(){
			$this->crowdfundingObj = new CrowdundingModel();
			$this->corwdfundingOAddOnObj = new  CrowdundingAddonObjectModel();
			$this->corwdfundingArchivesObj = new CrowdundingArchivesModel();
		}
		/**
		 * 新建众筹项目
		 * @param array $objinfo
		 * @return boolean
		 */
		public function AddZcPorject($objinfo=array()){

//			var_dump($objinfo);
//			die();
			if(!is_array($objinfo)) return false;
			if(!array_key_exists('objname', $objinfo))  	return false;
			if(!array_key_exists('sort', $objinfo)) 		return false;
			if(!array_key_exists('goal', $objinfo)) 		return false;
			if(!array_key_exists('start_time', $objinfo))	return false;
			if(!array_key_exists('end_time', $objinfo)) 	return false;
			if(!array_key_exists('status', $objinfo)) 		return false;
			if(!array_key_exists('descript', $objinfo)) 	return false;
			$add_objflag = D("Object");
			if($add_objflag->add($objinfo))
				return true;
			else
				return false;
			//return $this->crowdfundingObj->AddProject($objinfo) ? true :false;
		}

	/**
	 * 获取项目列表
	 * @return mixed
	 */
		public function getObjlist(){
			//return $this->crowdfundingObj->getObjectList();
			$temp_addQrArr = $this->crowdfundingObj->getObjectList();
			for($i = 0; $i<count($temp_addQrArr);$i++){
				$temp_addQrArr[$i]['qrimgurl'] =getQRcodeUrl('http://www.baidu.com');
				//获取并统计项目下的文章数量,再进行和项目数且合并
				$temp_addQrArr[$i]['oc_count'] =$this->corwdfundingArchivesObj->getObjArticleCount($temp_addQrArr[$i]['id']);
//				var_dump(time()>$temp_addQrArr[$i]['end_time']);
//				die();
				//判断当前项目是否过期
				if(intval(time())>=intval($temp_addQrArr[$i]['end_time']))
					$temp_addQrArr[$i]['is_finish'] =0;
				else
					$temp_addQrArr[$i]['is_finish'] =1;
			}
			return $temp_addQrArr;
		}

	/**
	 * 通过指定的项目编号获取指定项目的详情数据
	 * @param $oid 项目编号
	 */
	public function getZcPoejctInfoById($oid){
		$temp_objinfo = $this->crowdfundingObj->FileCheck($oid);
		$obj_info = array_merge($temp_objinfo,array($this->getObjBody($oid)));
		if(is_array($obj_info)) return $obj_info; else false;
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

	/**
	 * 添加文章表指定的项目当中去
	 * @param array $archives 文章基本信息 即文章的archives表
	 * @param array $addonobject 文章主体内容 即文章附加表的内容
	 */
	public function AddZcProjectArticle($opt='add',$archives=array(),$addonobject=array()){
		if($this->corwdfundingArchivesObj->AddArchives($opt,$archives,$addonobject))
			return true;
		else
			return false;
	}

	/**
	 * 查询指定项目下的所有文章
	 * @param $oid  项目编号
	 */
	public function getZcProjectArticleList($oid){
        return $this->corwdfundingArchivesObj->CheckData($oid);
	}


	/**
	 * 返回文章信息
	 * @param $aid
	 * @param int $type 类型参数:
	 * 1.编号(默认)
	 * 2.标题(需要设置标志为2)
	 * 3.模型当中已经写好了,需要可以自己扩展!
	 * @return mixed 返回相应类型的结果
	 */
	public function getOneZcProjectArticle($aid,$type=1){
		switch($type){
			//按文章的编号来查询
			case 1:
				return $this->ArticleMarge($aid);
				break;
			//按文章的标题来查询
			case 2:
				return $this->ArticleMarge($aid,2);
				break;
			//其他的则默认也是按照文章的编号来查询
			default:
				return $this->ArticleMarge($aid);
				break;
		}

	}

	/**
	 * 全拼文章的概要信息和文章的主体信息成为一个数组
	 * @param $aid 文章的编号
	 * @param int $type
	 * @return array
	 */
	private function ArticleMarge($aid,$type=1){
		//获取文章概要信息
		$res_info= $this->corwdfundingArchivesObj->CheckData($aid,$type);
		//获取文章的主体内容
		$res_body = $this->corwdfundingArchivesObj->getArticleBody($aid);

		//合拼成为一个数组并返回
		return array_merge($res_info,$res_body);
	}

	/**
	 * @param $oid 项目编号
	 * @param $qrUrl 二维码的地址
	 */
	public function setZcProjectQRcodeUrl($oid,$qrUrl){

	}





}