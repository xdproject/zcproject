<?php
/*********************************************************************
 * �û�
 *
 *
 */
namespace WeChat\Api;

use WeChat\Model\AppWeChatModel;

class WeChatApp extends WeChatBasic{
    //微信应用的表的对象
    private $mode = null;
    private function __construect(){
        if($this->mode==null) $this->InitAppWechatMode();
    }

    private function InitAppWechatMode(){
        $this->mode = new AppWeChatModel();
    }
    /**
     * 用户同意授权，获取code
     * @param $callback 回调地址,用户制授权后由返回的跳转地址
     */
    public function getAccoutUserInfo($callback){
        header("Location:".$this->wechatObj->getOauthRedirect($callback));
    }

    /**
     * 通过code换取网页授权access_token
     * @param $code
     * @return array 成功返回access_token数据
     */
    public function getAccToken($code){
        return $this->wechatObj->getOauthAccessTokenParam($code);
    }

    /**
     * 获取授权的微信用户的个人信息
     * @param $access_token 用户的access_toen
     * @param $openid 用户的openid
     * @return array 成功返回用户的微信信息,失败返回false
     */
    public function getWeChatUserInfo($access_token,$openid){
      return  $this->wechatObj->getOauthUserinfo($access_token,$openid);
    }

    /**
     * 为用户的rfresh_token进行续期
     * @param $refresh_token 要续期的refresh_token
     * @return bool|mixed 成功返回json
     */
    public function refresh_token($refresh_token){
        return $this->wechatObj->getOauthRefreshToken($refresh_token);
    }

    /**
     * 将通过授权的微信用户信息进行保存
     * @param array $wechatserInfo
     * @return bool
     */
    public function AddWeChatUserToDatabase($wechatserInfo = array()){
        if($this->mode==null) $this->InitAppWechatMode();
        return $this->mode->AddWeChatUser($wechatserInfo) ? true:false;
    }
}