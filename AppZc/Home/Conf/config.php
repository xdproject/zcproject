<?php
/***********************************
 * ZCProject Application Config  File!
 * Author:BarneyX
 * QQ:353532415
 * Email:VCMSDM@GMAIL.COM
 * Compile:2016-04-12 11:25:34
 * Builder Tools:Zend Studio 10.6
 */
//Global Config
$admin_config= array(
		"LOAD_EXT_CONFIG"=>"functions",
);

$db_config = require './Config/sys.inc.php';
return array_merge($admin_config,$db_config);