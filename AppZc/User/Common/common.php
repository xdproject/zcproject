<?php
/*
 * Zc非常规的函数库;
 * Author:BarneyX
 * Email:VCMSDN@Gmail.com
 *
 */

/**
 *
 * @param  要加密的字符串 $str
 * @return string
 */
function zc_ucenter_md5($str){
	return '' === $str ? '': md5($str);
}


