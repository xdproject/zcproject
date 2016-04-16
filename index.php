<?php
/********************************************
 *	Application Name:Zc Project Object!!(ZPO!)
 *	Author:BarneyX(小白怕怕)
 *  QQ:353532415
 *	Email:VCMSDN@gamil.com
 *
 *******************************************/
header('content-type:application:json;charset=utf8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('APP_DEBUG',True);
define('APP_PATH','./AppZc/');
require './Include/libs.inc.php';