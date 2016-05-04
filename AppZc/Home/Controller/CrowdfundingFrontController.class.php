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


class CrowdfundingFrontController extends Controller{

        private static $Wap_FIX = 'CrowdfundingFront/wap/';
        private static $CFCobject = null;

        public function _initialize(){
            static::$CFCobject = new CFController();
        }
        public function show(){
            $now = strtotime(date("Y-m-d H:i:s")); // 当前日期
            $res = static::$CFCobject->getZcPoejctInfoById(1);

            $this->assign('objinfo',array(
                'title'=>$res[8],
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

        }





}