<?php
/******************************************************************************
 * Builder-Tools:Zend Studio v10.6.2
 * Create-Date:2016-04-20 11:21:23
 * ZC-Project
 * Author:BarneyX
 * QQ:35353415
 * E-mail:vcmsdn@gmail.com
 *****************************************************************************/

/**
 * 通过第三方接口获取二维码图片:注二维码是由StuidoiT工作室提供
 * @param $url 二维码的URL地址
 * @param string $level 二维码的等级 默认值是M
 * @param int $size 1-7二维的大小   默认值是4
 * @return mixed 如果调用成功则返回的是二维码的URL地址,可以将这个地址放在数据库当中
 */
 function getQRcodeUrl($url,$level='M',$size=4){
    return json_decode(file_get_contents('http://xd.studioit.cn/process.php?dt='.$url.'&level='.$level.'&size='.$size),true)['imgurl'];

}
