<?php
$data = 'theCityName=青岛';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.webxml.com.cn/WebServices/WeatherWebService.asmx/getWeatherbyCityName");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //执行之后不直接打印出来
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	"application/x-www-form-urlencoded; charset=utf-8", 
	'Content-length: '.strlen($data)
));
$res = curl_exec($ch);

if(!curl_errno($ch)){
	echo $res;
}else{
	echo 'Curl error: '.curl_error($ch);
}

curl_close($ch);