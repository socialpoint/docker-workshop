<?php
    $redis = new Redis();
    $redis->connect('redis', 6379);
    $redis->set('key', 'value');

    echo $redis->get('key');

?>