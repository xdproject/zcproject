<?php
/**********************************************************************************************
* 微信关注管理
* 作者:小白怕怕
* QQ:353532415
*
*/
namespace WeChat\Api;
use WeChat\Api\WeChatBasic;

class WeChatUser extends WeChatBasic{

	//private $
	/**
	 *   获取微信公众平台下的所有关注人的信息
	 * @return Ambigous <boolean, mixed>|boolean
	 */
	public function SaveWeChatAttentionUserToDataBase(){
			$res_UserAppIdList = $this->wechatObj->getUserList();
			$UserInfo_DataMap = array();
			for($i = 0; $i<=count($res_UserAppIdList['data']['openid']);$i++){
				$UserInfo_DataMap[] = $this->wechatObj->getUserInfo($res_UserAppIdList['data']['openid'][$i]);
			}
			if(is_array($UserInfo_DataMap))
				if($this->model->SaveToDataBase($UserInfo_DataMap)){
					return true;
				}
			else
				return false;
	}

	/**
	 * 获取所所有关注的微信用户列表
	 */
	public function getWeChatAttentionUserList(){
			$user_list = $this->model->Info('',true);
			if(is_array($user_list))
				return $user_list;
			else false;
	}
}