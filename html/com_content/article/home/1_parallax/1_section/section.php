<?php
spl_autoload_register(function ($class) {
    include 'templates/what/enclave/php/' . $class . '.php';
});

$html = new html();
$html->b('figure', 0, 1);
?>