<?php
/**************************
 * Abstract Class
 * Author:小白怕怕
 *
 */
namespace User\Api;
define('UCENTER_CLASS_PATH', dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR);
require_once UCENTER_CLASS_PATH.'Common'.DIRECTORY_SEPARATOR.'common.php';

abstract class Api{

	protected  $model;

	public function __construct(){
		$this->_init();
	}

	abstract  protected  function _init();
}
