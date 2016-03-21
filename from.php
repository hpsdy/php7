<?php
$pool = new Pool(4);
$pool->submit(Collectable::from(function(){
    echo "Hello World";
    $this->setGarbage();
}));
/* ... */
$pool->shutdown();
?>
