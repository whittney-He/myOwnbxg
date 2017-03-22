<?php

$path = 'index';
$filename = 'index';

//如果存在，显示相应页面
 if(array_key_exists('PATH_INFO',$_SERVER)){
    // var_dump($_SERVER);
     $url = $_SERVER['PATH_INFO'];
     //$url的格式如:/index/index
     //将/index/index  中的第一个 /去掉
     $str = substr($url,1);
     $arr = explode('/',$str);   //根据‘/’截取字符串，返回值是一个数组
     if(count($arr) == 2){
        $path = $arr[0];
        $filename = $arr[1];

     }

 }else {
    //如果不存在显示登入页面
     include('./view/index/login.html');
 }

  include('./view/'.$path.'/'.$filename.'.html');
 ?>