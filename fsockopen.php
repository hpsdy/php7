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
		$out = "GET / HTTP/1.1\n";
		$out .= "Host: $url\n";
		$out .= "Connection: Close\n\n";
		fwrite($fp, $out);
			$rel = fgetss($fp,1000);
			//preg_match("/Content-Length:.?(\d+)/", $rel, $matches);
			//var_dump($matches);
			file_put_contents('./msg',$rel,FILE_APPEND);
		}
		fclose($fp);
	}
}

for($i=0;$i<2;$i++){
	fopen_m('www.example.com');
}
?>
