<?php
/**********************************************************************************************
 *
* 作者:小白怕怕
* QQ:353532415
*
*/
namespace WeChat\Model;
use Think\Model;

class WeChatModel extends Model{

	protected  $tableName = 'Wechatuserinfo';

	public function SaveToDataBase($param =array()){


			if(is_array($param) && count($param)>0){
				for($i = 0; $i<count($param)+1;$i++){
					if(!$this->Info($param[$i]['openid'],false,false)){
 						if(!$this->add($param[$i])) return false;
					}
				}
				return true;
			}
			return false;
	}


	public function Info($openid,$r_all=false,$is_nickname = false){
		$data_map = array();

		if($is_nickname){
			$data_map['nickname'] 	= $openid;

		}else{
			$data_map['openid'] 	= $openid;
		}

		if($r_all){
			$res = $this->where()->select();
			if(is_array($res))
				return $res;
			return false;
		}else{
			$res = $this->where($data_map)->find();
			if(is_array($res))
				return $res;
			else
				return false;
		}

	}



}