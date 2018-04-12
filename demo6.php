<?php

class Common
{
    public static function isMobileView()
    {
        $agent      = strtolower($_SERVER['HTTP_USER_AGENT']);
        $is_pc      = (strpos($agent, 'windows nt')) ? true : false;
        $is_mac     = (strpos($agent, 'mac os')) ? true : false;
        $is_iphone  = (strpos($agent, 'iphone')) ? true : false;
        $is_android = (strpos($agent, 'android')) ? true : false;
        $is_ipad    = (strpos($agent, 'ipad')) ? true : false;
        if ($is_iphone) {
            return true;
        }
        if ($is_android) {
            return true;
        }
        if ($is_ipad) {
            return true;
        }
        if ($is_mac) {
            return false;
        }
        if ($is_pc) {
            return false;
        }
        
        return false;
    }
}

if(Common::isMobileView()){
    echo "我是手机页面";
}else{
    echo  "我是pc页面";
}