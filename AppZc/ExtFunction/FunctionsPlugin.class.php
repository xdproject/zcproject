<?php
/******************************************************************************
 * Builder-Tools:Zend Studio v10.6.2
* Create-Date:2016-04-20 11:21:23
* ZC-Project Funciton Public Plugin Interface!!!
* Author:BarneyX
* QQ:35353415
* E-mail:vcmsdn@gmail.com
*****************************************************************************/
namespace ExtFunction;

interface  IFunctionsPlugin{
	/**
	 * 开始运行功能插件
	 */
	public function Start();
	/**
	 * 获取功能插件的名称
	 */
	public function getFunctionName();
	/**
	 * 获取功能插件的版本号
	 */
	public function getFunctionVersion();
	/**
	 * 获取当前功能插件的状态
	 */
	public function getFunctionStatus();
	/**
	 * 初始化功能插件
	 */
	public function InitPlugin();
}