<?php
//access_token 获取类
class WxAccessToken
{
    private $access_token;
    private $appid;
    private $appsecret;
    
    //构造方法
    public function __construct($appid, $appsecret)
    {
        if (!$appid || !$appsecret)
        {
            exit('param error!');
        }
        $this->appid = $appid;
        $this->appsecret = $appsecret;
    }

}
?>
