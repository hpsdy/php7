<?php
/**
 * Created by PhpStorm.
 * User: qinhan
 * Date: 2016/3/27
 * Time: 15:33
 */
$num = $_GET['num'];
if(!is_numeric($num)){
	echo 'num必须为数值';exit;
}
for($i=0;$i<$num;$i++){
	//file_put_contents('./save.log',date('Y-m-d H:i:s')."\n",FILE_APPEND);
	echo $i;
	echo "<br/>";
}