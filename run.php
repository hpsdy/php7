<?php
class My extends Thread {
    public function run() {
        $this->synchronized(function($thread){
            if (!$thread->done)
                $thread->wait();
        }, $this);
    }
}
$my = new My();
$my->start();
var_dump($my->isRunning());
$my->synchronized(function($thread){
    $thread->done = true;
    $thread->notify();
}, $my);
?>
