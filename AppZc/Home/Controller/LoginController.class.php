<?php
namespace Home\Controller;
use Think\Controller;
use User\Api\UserApi;

class LoginController extends Controller {
	private $uname = "";
	private $upwd = "";
    public function index(){
		$this->display();
    }

    /**
     * 用户登入
     */
	public function LoginIn(){
		if(IS_POST){
			$user = new UserApi();
			$uid = $user->login(I("post.uname"), I("post.upwd"));
			if(0<$uid){
				$this->success("登陆成功!",U("Home/Index/index"));
			}else{
				switch ($uid){
					case -1: $error= '用户不存在';break;
					case -2:$error='用户密码错';break;
					default: $error = '未知错误!';break;
				}
				$this->error($error);
			}

		}else{
			$this->display();
		}


	}
	/**
	 * 用户登出
	 */
	public function LoginOut(){


	}


	private function CheckUserInfomation($str_uname,$str_upwd){

	}
}
