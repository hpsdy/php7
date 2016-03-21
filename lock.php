<?php
class My extends Thread {
    public function run() {
        var_dump($this->lock());
        /** 其他线程无法进行读/写操作 **/
        var_dump($this->unlock());
        /** 其他线程可以进行读/写操作 */
    }
}
$my = new My();
$my->start();
?>
