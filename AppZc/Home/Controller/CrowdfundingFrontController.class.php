<?php
/******************************************************************************
 * Builder-Tools:Zend Studio v10.6.2
 * Create-Date:2016-04-20 11:21:23
 * ZC-Project
 * Author:BarneyX
 * QQ:35353415
 * E-mail:vcmsdn@gmail.com
 * 此控制器主要是用于重筹用户的前端显示,
 *****************************************************************************/

namespace Home\Controller;
use ExtFunction\Crowdfunding\Api\CFController;
use Think\Controller;
use WeChat\Api\WeChatApp;


class CrowdfundingFrontController extends Controller{


        private static $Wap_FIX = 'CrowdfundingFront/wap/';
        private static $CFCobject = null;
        private static $WeChatAPP = null;

        public function _initialize(){
            static::$CFCobject = new CFController();
            static::$WeChatAPP = new WeChatApp();
          // if(empty($_SESSION['wechat_site']['appid']))
           
        }

        /**
         * 验证用户
         */
        public function WechatUserLogin(){
            switch(I("get.ccid")){
                case "list":
                    static::$WeChatAPP->getAccoutUserInfo("http://".$_SERVER['HTTP_HOST']."/index.php/home/CrowdfundingFront/index.html");
                    break;
                case "project":
                    $param_list = array('oid' => I("get.oid"), 'ssid' => I("get.ssid"), 'eesi' => I("get.eesi"));
                    if(!isset($_SESSION['wechat_login_info'])) {
                        static::$WeChatAPP->getAccoutUserInfo(U("/CrowdfundingFront/show",http_build_query($param_list)));
                    }else{
                        header("Location:"."http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'/index.php/home/CrowdfundingFront/show&'.http_build_query($param_list));
                        exit();
                    }
                    break;
                default:
                    break;
            }

        }
        public function index(){
            if(!I("get.bt")=="arc")
                 $this->saveWeChatUserInfoToDataBases(I("get.code"));
            $objlist = static::$CFCobject->getObjlist();
            $this->assign('list',$objlist);
            if(!is_mobile_request())
                $this->display();
            else
                $this->display(static::$Wap_FIX.ACTION_NAME);
        }
        public function show(){
            $now = strtotime(date("Y-m-d H:i:s")); // 当前日期
            $res = static::$CFCobject->getZcPoejctInfoById(I("get.oid"));
            $this->assign('objinfo',array(
                'title'=>$res[2],
                'start_time'=>time2Units($now-intval($res[4])),
                'residue'=>time2string(time(now)-$res[5]),
                'goal'=>$res[3],
                'body'=>$res[9]));
            if(!is_mobile_request())
                $this->display();
            else
                $this->display(static::$Wap_FIX.ACTION_NAME);
        }


    /**
         * 对授权的用户信息进行保存
         * @param $code 微信的Code
         */
        private function saveWeChatUserInfoToDataBases($code){
            //通用传递过来的微信的code进行获取用户的access_token数据
            $res_access_token  = static::$WeChatAPP->getAccToken($code);
            //如果用户的access_token到期,则重新的续期
            $res_refresh_token =  static::$WeChatAPP->refresh_token($res_access_token['refresh_token']);
            $res_userInfo = static::$WeChatAPP->getWeChatUserInfo($res_refresh_token['access_token'],$res_refresh_token['openid']);
            if(!static::$WeChatAPP->AddWeChatUserToDatabase($res_userInfo)) $this->redirect("http://".$_SERVER['HTTP_HOST']."/index.php?s=/home/CrowdfundingFront/WechatUserLogin&ccid=list");
        }

        /**
         * 处理众筹用户下列加载更多
         */
        public function LoadMore(){
            $more_id = I("get.mcid");

        }





}