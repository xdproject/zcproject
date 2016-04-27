<?php

namespace ExtFunction\Crowdfunding\Model;
use Think\Model;

class CrowdundingAddonObjectModel extends Model {

	protected $tableName = 'addonobject';

	//protected $_validate = array( //array('oid','','项目名称已经存在！',0,'unique',1), );

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
			return $res_objinfo;//return array( $res_objinfo['id'], $res_objinfo['cid'], $res_objinfo['lastid'], $res_objinfo['body'], );
		else
			return false;
	}

	/**
	 * @param $oid 项目编号，在当前表中，一项目只存在一个这个编号的介绍
	 * @return bool	如果当前系统当中有已经有了项目的主体介绍则返回FALSE 否则返回 TRUE
	 */
	public function checkObjConent($oid){
		$res_ = $this->where(array('oid'=>$oid))->find();
		if($res_)
			return true;
		else
			return false;
	}
	

	/**
	 * 项目介绍内容介绍添加 修改 
	 * @param array $zc_pBody 项目介绍的主体内容
	 * @return bool 如果项目介绍添加成功，则返回TRUE 否则返回FALSE
	 */
	public function AddZcProjectBody($zc_pBody=array()){
		
		if(is_array($zc_pBody)){
			if( array_key_exists('oid',$zc_pBody)  ||
			    array_key_exists('body',$zc_pBody) ||
				array_key_exists('cdt',$zc_pBody)   ||
				array_key_exists('lastdt',$zc_pBody)
			)
				if($this->checkObjConent($zc_pBody['oid'])){
					if($this->save($zc_pBody)) {return true;}
				}else{
					if($this->add($zc_pBody)){return true;}	
				}
					
						
			else
				return false;
		}

		return false;
	}

}
