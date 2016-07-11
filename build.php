<?php
try {
    $a = new Phar('/tmp/cakephp3-samples.phar');
    $a->addFile('src/index.php', 'index.php');

} catch (Exception $e) {
    var_dump($e);;
}
