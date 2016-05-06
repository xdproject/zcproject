<?php
/*********************************************************************
 * ÓÃ»§
 *
 *
 */
namespace WeChat\Api;

class WeChatApp extends WeChatBasic{

    public function getAccoutUserInfo(){
       // $this->valid();
        var_dump($this->wechatObj->getOauthRedirect());
        die();
      //  $this->wechatObj->getOauthAccessToken();

        die();

    }
}