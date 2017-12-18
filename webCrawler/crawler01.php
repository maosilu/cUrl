<?php
//抓取百度页面
$ch = curl_init('http://www.baidu.com');
curl_exec($ch);
curl_close($ch);