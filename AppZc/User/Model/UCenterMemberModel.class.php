<?php
/*****************************************************
 * 用户模型
 *
 *
 *
 */
namespace User\Model;
use Think\Model;

class UCenterMemberModel extends Model{
 		protected $tableName = 'Admin';

		protected  $_auto = array(
			array('uname','confirm','用户账号错误'),
			array('upwd','zc_ucenter_md5',self::MODEL_BOTH, 'function')
		);

		/**
		 *
		 * @param 用户名称或是下面的其他字段名称 $str_uname
		 * @param 用户密码 $str_pwd
		 * @param 类型编号 $type
		 * @return number|unknown
		 */
		public function login($str_uname,$str_pwd,$type = 1){
				$map = array();
				switch ($type){
					case 1:
						$map['uname'] = $str_uname;
						break;
					case 2:
						$map['upwd'] = $str_pwd;
						break;
					case 3:
						$map['id'] = $str_uname;
						break;
					case 4:
						$map['last_time'] = $str_uname;
						break;
					case 5:
						$map['last_ip'] = $str_uname;
						break;
					case 6:
						$map['status'] = $str_uname;
						break;
					default:
						return 0;
				}


				$user  = $this->where($map)->find();
				if(is_array($user) && $user['status']){
					if(zc_ucenter_md5($str_pwd)===$user['upwd']){
						$_SESSION['zc_user_info']['st'] = true;
						$_SESSION['zc_user_info']['uid'] =$user['id'];
						$_SESSION['zc_user_info']['uname']=$user['uname'];
						$_SESSION['zc_user_lofo']['logintime'] = time();
						return $user['id'];
					}else{
						return -2; //只是单单的用户密码错误
					}
				}else{
					return -1;  //用户账号状态是不能使用的状态
				}
		}
		/**
		 * 获取指定的字段的值
		 * @param integer $uid 用户编号
		 * @param string $is_username 是否要使用用户名名称来查询用户信息
		 * @return multitype:unknown Ambigous <> |number
		 */
		public function info($uid,$is_username= false){
				$map = array();
				//判断是否要使用用户名称来查询
				if($is_username){
					$map['uname'] = $uid;
				}else{
					$map['id'] = $uid;
				}

				$user = $this->where($map)->field('id,uname,login_time,login_ip,status')->find();
				if(is_array($user && $user['status'])){
					return array($user['id'],$user['uname'],$user['login_time'],$user['login_ip'],$user['status']);
				}else{
					return -1;
				}
		}
		/**
		 *
		 * @param string $field 用户名
		 * @param number $type 待扩展目前ZC Project只最多只有 uname
		 * @return number 错误编号
		 */
		public function CheckField($field,$type=1){
				$data = array();
				switch ($type){
					case 1:
						$data['uname'] = $field;
						break;
					default:
						return 0; //参数错误
				}

			return $this->create($data)?1:$this->getError();
		}





}