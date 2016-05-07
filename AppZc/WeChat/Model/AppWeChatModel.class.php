<?php

namespace WeChat\Model;
use Think\Model;

class AppWeChatModel extends Model{

    protected  $tableName = 'Appwechatuserinfo';

    /**
     * 检查数据库当中是否存在这个微信用户,如果存在则返回TRUE ,不存在返回FALSE
     * @param $openid
     */
    public function CheckAppWechatUser($openid){
        return $this->where(array('openid'=>$openid))->count()>0 ? true:false;
    }

    /**
     * 对已经存在的用户微信用户,通过用户的OpenId来获取在数据库当中的的用户微信个人信息
     * @param $openid 用户的Openid
     */
    public function getWeChatUserInfo($openid){
        $res_wechatUserInfo = $this->where(array('openid'=>$openid))->field('id','openid','nickname','sex','city','province','headimgurl')->find();
        if(is_array($res_wechatUserInfo))
            return $res_wechatUserInfo;
        else
            return false;
    }

    /**
     * 保存或是修改通过授权的微信用户的个人信息到应用类类型的数据库当中去
     * @param array $wechatuserInfo 微信用户数据
     * @return bool 如果成功,则返回TRUE 否则返回FALSE
     */
    public function AddWeChatUser($wechatuserInfo = array()){
        //如果当前传递进来的参数不是一上微信的用户数组,则以失败的方式返回
        if(!is_array($wechatuserInfo)) return false;
        if(!$this->CheckAppWechatUser($wechatuserInfo['openid'])){
            $res = $this->add($wechatuserInfo);
            if($res){
                $this->WechatUserInfoWriteSession($wechatuserInfo);
                return true;
            }else
                return false;
        }else{
            $this->save($wechatuserInfo);
            $this->WechatUserInfoWriteSession($this->getWeChatUserInfo($wechatuserInfo['openid']));
            return true;
        }
    }

    /**
     * 将当前授权的用户的个人信息写入SESSION当中,方便在后面使用
     * @param array $wechatuserinfo
     */
    private function WechatUserInfoWriteSession($wechatuserinfo=array()){
        $_SESSION['wechat_login_info'] =$wechatuserinfo;
    }

}