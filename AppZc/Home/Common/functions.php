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
 * ͨ���������ӿڻ�ȡ��ά��ͼƬ:ע��ά������StuidoiT�������ṩ
 * @param $url ��ά���URL��ַ
 * @param string $level ��ά��ĵȼ� Ĭ��ֵ��M
 * @param int $size 1-7��ά�Ĵ�С   Ĭ��ֵ��4
 * @return mixed ������óɹ��򷵻ص��Ƕ�ά���URL��ַ,���Խ������ַ�������ݿ⵱��
 */
 function getQRcodeUrl($url,$level='M',$size=4){
    return json_decode(file_get_contents('http://xd.studioit.cn/process.php?dt='.$url.'&level='.$level.'&size='.$size),true)['imgurl'];

}
