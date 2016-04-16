<?php
namespace SysConfig\Api;
use SysConfig\Api\Api;
use SysConfig\Model\SysConfigModel;

class SysConfig extends Api{
		public  function __init(){
			$this->sysObj = new SysConfigModel();
		}

		/**
		 * 获取所有系统参数adf
		 * @return Ambigous <number, \SysConfig\Model\multitype:unknown, multitype:unknown Ambigous <> , \Think\mixed, boolean, string, NULL, mixed, unknown, multitype:, object>
		 */
		public function getSysConfigList(){
			$_result = $this->sysObj->getSysConfigInfo('',true);
			return $_result?$_result:-1;
		}
}