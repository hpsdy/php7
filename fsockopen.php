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
		$out = "GET / HTTP/1.1\n";
		$out .= "Host: $url\n";
		$out .= "Connection: Close\n\n";
		fwrite($fp, $out);
		//while (!feof($fp)){
			$rel = fread($fp,10000000);
			preg_match("/Content-Length:.?(\d+)/", $rel, $matches);
			$content = substr($rel,-$matches[1]);
			$content = strip_tags($content);
			file_put_contents('./msg',$content,FILE_APPEND);
		//}
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
