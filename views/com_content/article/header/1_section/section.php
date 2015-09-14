<?php
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$menu = new Joomla\Menu();
$db = new Joomla\Database();
$string = new Framework\String();
$h = new Framework\Html();
$h->b('div', 0, 1);	
$h->e(1, 'HELLO');
$h->b('div', 1, 1);
?>