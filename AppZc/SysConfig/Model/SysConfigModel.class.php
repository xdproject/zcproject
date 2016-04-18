<?php
namespace SysConfig\Model;
use Think\Model;

class SysConfigModel extends  Model{
		protected  $tableName = 'Sysconfig';


		/**
		 * 获取指定的系统配制或是通过系统设置的ID来获取设置参数
		 * @param unknown $sid  编号或是名称
		 * @param string $is_all 是否要取出所有系统设置参数
		 * @param string $is_keyname
		 * @return multitype:unknown Ambigous <> |number
		 */
		public function getSysConfigInfo($sid,$is_all = false,$is_keyname = false){
			//判断是否要获取所有的系统设置参数
			if(!$is_all){
				$sys_param = array();
				if($is_keyname){
					$sys_param['zc_key']  = $sid;
				}else{
					$sys_param['id'] = $sid;
				}

				$sys_result = $this->where($sys_param)->field('id,zc_key,zc_val,zc_descript')->find();
				if(is_array($sys_result)){
					return array($sys_result['id'],$sys_result['zc_key'],$sys_result['zc_val'],$sys_result['zc_descript']);
				}else{
					return -1;
				}
			}else{
				//返回的所有的系统配制参数列表
				$sys_result_all = $this->where()->select();
				if(is_array($sys_result_all))
					return $sys_result_all;
				else
					return -1;
			}
		}

		/**
		 * 返回微信配制信息
		 * @return multitype:Ambigous <\SysConfig\Model\multitype:unknown, number> Ambigous <\SysConfig\Model\multitype:unknown, number, multitype:unknown Ambigous <> , \Think\mixed, boolean, string, NULL, mixed, unknown, multitype:, object> |boolean
		 */
		public function getWeChatInfo(){

			$token 			= $this->getSysConfigInfo('ZC_TOKEN',false,true);
			$appsecret 	    = $this->getSysConfigInfo('ZC_APPSECRET',false,true);
			$appId 			= $this->getSysConfigInfo('ZC_APPID',false,true);
			$encodingaeskey = $this->getSysConfigInfo('ZC_ENCODINGAESKEY',false,true);

			if(is_array($token) && is_array($appsecret) && is_array($appId) && is_array($encodingaeskey)){
					return array($token,$appsecret,$appId,$encodingaeskey);
			}
			return false;
		}

		/**
		 * 保存设置选项
		 * @param unknown $sid
		 * @param unknown $sval
		 * @param string $is_keyname
		 * @return boolean
		 */
		public function setSysConfigInfo($sid,$sval,$is_keyname=false){
			$sys_sysmap = array();
			if($is_keyname){
				$sys_sysmap['zc_key']= $sid;
				$sys_sysmap['zc_val'] = $sval;
			}else{
				$sys_sysmap['id'] = $sid;
				$sys_sysmap['zc_val'] = $sid;
			}

			return $this->save($sys_sysmap)>0?true:false;
		}



}