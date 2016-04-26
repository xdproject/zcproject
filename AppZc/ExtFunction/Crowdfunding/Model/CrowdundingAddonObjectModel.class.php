<?php

namespace ExtFunction\Crowdfunding\Model;
use Think\Model;

class CrowdundingModel extends Model {

	protected $tableName = 'addonobject';

	protected $_validate = array(
			//array('oid','','项目名称已经存在！',0,'unique',1),
	);

	/**
	 * 获取所有项目
	 * @param string $obj_type 默认值为1 设置成2则返回的是回收站当中的项目(也就是删除的项目) 在表当中is_Trash的默认值是0也
	 * 就是不是回收站的的内容 3为状态为1的,4为状态不不可用的
	 * @return unknown|boolean
	 */
	public function FileCheck($id,$type=0){
		$datamap  =  array();
		switch($type){
			case 0:
				$datamap['oid']=$id;
				break;
			case 1:
				$datamap['cdt']=$id;
				break;
			case 2:
				$datamap['lastdt']=$id;
				break;
			default:
				return -2;
				break;
		}


		$res_objinfo = $this->where($datamap)->find();
		if(is_array($res_objinfo))
			return array(
					$res_objinfo['id'],
					$res_objinfo['cid'],
					$res_objinfo['lastid'],
					$res_objinfo['body'],
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
