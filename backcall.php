<?php
    //
    $appid = "wx17c5ef4ec2fe2eb2";  
    $secret = "0cfa218e4635f2485f600a10a1f28ee8";  
    $code = $_GET["code"];  
    $get_token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$secret.'&code='.$code.'&grant_type=authorization_code';
    $json_obj = json_decode(file_get_contents($get_token_url));
    $access_token = $json_obj->access_token;  
    $openid = $json_obj->openid;
    $get_user_info_url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';  
    $user_obj = json_decode(file_get_contents($get_user_info_url));
	var_dump($user_obj);
    ?> 