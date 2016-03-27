<?php
/**
 * Created by PhpStorm.
 * User: qinhan
 * Date: 2016/3/27
 * Time: 15:33
 */
for($i=1;$i<1000000;$i++){
	file_put_contents('./save.log',date('Y-m-d H:i:s')."\n",FILE_APPEND);
}