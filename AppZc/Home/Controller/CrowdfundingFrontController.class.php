<?php
/******************************************************************************
 * Builder-Tools:Zend Studio v10.6.2
 * Create-Date:2016-04-20 11:21:23
 * ZC-Project
 * Author:BarneyX
 * QQ:35353415
 * E-mail:vcmsdn@gmail.com
 * �˿�������Ҫ�������س��û���ǰ����ʾ,
 *****************************************************************************/

namespace Home\Controller;
use Think\Controller;
use ExtFunction\Crowdfunding\Api\CFController;
define('EXT_FUNCTS',dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'Common'.DIRECTORY_SEPARATOR.'functions.php');
include_once EXT_FUNCTS;

class CrowdfundingFrontController extends Controller{

        private static $Wap_FIX = 'CrowdfundingFront/wap/';         //�ֻ�����
      //  public static $CFCObject = new CFController();

        public function index(){

            if(!is_mobile_request())
                $this->display();
            else
                $this->display(static::$Wap_FIX.ACTION_NAME);
        }





}