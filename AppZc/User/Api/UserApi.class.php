<?php
/*****************************************
 * UserClass
 * Author:小白怕怕
 * QQ:353532415
 */
namespace User\Api;
use User\Api\Api;
use User\Model\UCenterMemberModel;

class UserApi extends Api{

		protected function _init(){
			$this->model = new UCenterMemberModel();
		}

		/**
		 *用户登陆
		 * @param string $str_name
		 * @param string $str_pwd
		 * @param number $type
		 * @return Ambigous <number, \User\Model\unknown>
		 */
		public function login($str_name,$str_pwd,$type =1){
			return $this->model->login($str_name,$str_pwd, $type);
		}

		/**
		 * 获取用户信息
		 * @param integer $uid 用户编号|用户账号
		 * @param string $is_username  是否要以用户名来查询用户信息
		 */
		public function info($uid,$is_username = false){
			return $this->model->info($uid,$is_username);
		}


		/**
		 * 检查用户名
		 * @param string $str_uname 用户名
		 */
		public function CheckUserName($str_uname){
			return $this->model->CheckField($str_uname);
		}




}