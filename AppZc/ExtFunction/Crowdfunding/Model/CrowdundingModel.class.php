<?php

namespace ExtFunction\Crowdfunding\Model;
use Think\Model;

class CrowdundingModel extends Model {

	protected $tableName = 'Object';

	protected $_validate = array(
			array('objname','','项目名称已经存在！',0,'unique',1),
			array('status',array(0,1),'值的范围不正确！',1,'in'),
			array('goal','currency','目标筹金格式不正确！',1),
			//array('oid','unique',''),
	);

	/**
	 * 获取所有项目
	 * @param string $obj_type 默认值为1 设置成2则返回的是回收站当中的项目(也就是删除的项目) 在表当中is_Trash的默认值是0也
	 * 就是不是回收站的的内容 3为状态为1的,4为状态不不可用的
	 * @return unknown|boolean
	 */
	public function getObjectList($obj_type = 0){

		$objlist = $this->where()->select();
		switch ($obj_type){
			case 0:
			case 1:{
				$res_temp_data = array();
				if(is_array($objlist)){
					for($i = 0;$i<count($objlist);$i++)
						if($objlist[$i]['is_trash']==0 && $objlist[$i]['status']==1)
							$res_temp_data[] = $objlist[$i];
						return $res_temp_data;
				}
				else
					return false;
			}break;
			case 2:{
				if(is_array($objlist) && $objlist['is_trash']==1)
					return $objlist;
				else
					return false;
			}break;
			case 3:{
				if(is_array($objlist) && $objlist['status']==1)
					return $objlist;
				else
					return false;
			}break;
			case 4:{
				if(is_array($objlist) && $objlist['status']==0)
					return $objlist;
				else
					return false;
			}break;
			default:
				return false;
		}

	}

	public function FileCheck($id,$is_name=false,$is_trash=0){
		$datamap  =  array();
		if($is_name)
			$datamap['objname'] = $id;
		else
			$datamap['id'] = $id;

		switch($is_trash){
			case 0:
				$datamap['is_trash']=0;
				break;
			case 1:
				$datamap['is_trash']=1;
				break;
			default:
				return -2;
				break;
		}


		$res_objinfo = $this->where($datamap)->find();
		if(is_array($res_objinfo))
			return array(
					$res_objinfo['id'],
					$res_objinfo['sort'],
					$res_objinfo['objname'],
					$res_objinfo['goal'],
					$res_objinfo['start_time'],
					$res_objinfo['end_time'],
					$res_objinfo['status'],
					$res_objinfo['is_trash'],
					$res_objinfo['descript']
					);
		else
			return false;
	}

	public function AddZcProjectBody($zc_pBody=array()){
		//$map_data = array();
		//$map_data['oid']=$oid;
		//$map_data['body']=$str_body;
		//查询当前数据库当中是否有此oid项目的主体记录数据
        //if(!$this->FileCheck($oid))
        //    return false;
		//var_dump($zc_pBody);
		//die();
		if(is_array($zc_pBody)){
			if( array_key_exists('oid',$zc_pBody)  ||
			    array_key_exists('body',$zc_pBody) ||
				array_key_exists('cdt',$zc_pBody)   ||
				array_key_exists('lastdt',$zc_pBody)
			)
				if($this->where(array('oid'=>$zc_pBody['oid']))->save($zc_pBody))
					return true;
			else
				return false;
		}

		return false;
	}

	public function getArticle($obj){

	}
}
