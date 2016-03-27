<?php
/**
 * Created by PhpStorm.
 * User: qinhan
 * Date: 2016/3/27
 * Time: 11:14
 */
error_reporting(0);
function fopen_m($url)
{
	$fp = fsockopen($url, 80, $errno, $errstr, 30);
	stream_set_blocking($fp,0);
	if (!$fp) {
		echo "$errstr ($errno)<br />\n";
	} else {
		$http = "GET /save.php  / HTTP/1.1\r\n";
		$http .= "Host: www.example.com\r\n";
		$http .= "Connection: Close\r\n\r\n";
		fwrite($fp,$http);
		fclose($fp);
	}
}
echo date('Y-m-d H:i:s');
echo "\n";
for($i=0;$i<100;$i++){
	fopen_m('www.example.com');
}
echo date('Y-m-d H:i:s');
?>
