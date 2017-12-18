<?php
//抓取百度页面，并修改页面中的“百度”为“屌丝”
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.baidu.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //执行之后不直接打印出来
$res = curl_exec($ch);
curl_close($ch);

echo str_replace('百度', '屌丝', $res);
