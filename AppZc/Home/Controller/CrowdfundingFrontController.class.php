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
        public function index(){
            static::$WeChatAPP->getAccoutUserInfo();
           // var_dump(static::$WeChatAPP->)
            $objlist = static::$CFCobject->getObjlist();
            $this->assign('list',$objlist);
//            var_dump($objlist);
//            die();
            if(!is_mobile_request())
                $this->display();
            else
                $this->display(static::$Wap_FIX.ACTION_NAME);
        }

        /**
         * 处理众筹用户下列加载更多
         */
        public function LoadMore(){
            $more_id = I("get.mcid");

        }





}