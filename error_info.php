<?php
class My extends Thread {
    public function run() {
        for($i=0;$i<1000000;$i++){
		file_put_contents('./log',$i,FILE_APPEND);
		//sleep(1);
	}
    }
}

$my = new My();
$my->start();
//$my->join();
var_dump($my->isRunning());
var_dump($my->isWaiting());
?>
