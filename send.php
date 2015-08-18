<?php  
      
    // if(isset($_SESSION['user'])){  
    //     print_r($_SESSION['user']);
    // exit;
    // }
    $APPID='wx17c5ef4ec2fe2eb2';
    $REDIRECT_URI='http://mob.jinad.cn/testweixin/backcall.php';
    $scope='snsapi_base';
    //$scope='snsapi_userinfo';
    //需要授权 '&state='.$state
    $url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$APPID.'&redirect_uri='.urlencode($REDIRECT_URI).'&response_type=code&scope='.$scope.'#wechat_redirect';
    header("Location:".$url);
    ?>