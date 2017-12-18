<?php
//下载网络上面的一个https的资源
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.js"); //设置访问网页的URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //执行之后不直接打印出来

//设置HTTPS支持
date_default_timezone_set('PRC'); //使用Cookie时，必须先设置时区
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //对认证证书来源的检查，从证书中检查SSL加密算法是否存在
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

$res = curl_exec($ch);

curl_close($ch);

echo $res;