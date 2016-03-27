<?php
/**
 * Created by PhpStorm.
 * User: qinhan
 * Date: 2016/3/27
 * Time: 11:14
 */
function fopen_m($url)
{
	$fp = fsockopen($url, 80, $errno, $errstr, 30);
	if (!$fp) {
		echo "$errstr ($errno)<br />\n";
	} else {
		/*$out = "GET / HTTP/1.1\r\n";
		$out .= "Host: $url\r\n";
		$out .= "Connection: Close\r\n\r\n";
		fwrite($fp, $out);*/
		while (!feof($fp)) {
			$rel = fgetss($fp, 128);
			file_put_contents('./msg',$rel,FILE_APPEND);
		}
		fclose($fp);
	}
}

for($i=0;$i<10;$i++){
	fopen_m('www.example.com');
}
?>