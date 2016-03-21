<?php
class My extends Thread {
    public function run() {
        /** 让线程等待 **/
        $this->synchronized(function($thread){
            if (!$thread->done)
                $thread->wait();
        }, $this);
	for($i=0;$i<1000000;$i++){
                        file_put_contents("./log",$i,FILE_APPEND);
        }

    }
}
$my = new My();
$my->start();
var_dump($my->join());
/** 向处于等待状态的线程发送唤醒通知 **/
$my->synchronized(function($thread){
    $thread->done = true;
    $thread->notify();
}, $my);
//var_dump($my->join());
?>
