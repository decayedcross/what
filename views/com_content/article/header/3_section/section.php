<?php
use framework\html;
use joomla\menu;

$h = new html();
$menu = new menu();

$h->b('figure', 0, 1);
	require('logo.php');
	$h->b('h1', 0, 1);
		$h->e(1, 'Encounter Pain Relief');
	$h->b('h1', 1, 1);
$h->b('figure', 1, 1);
$h->b('nav', 0, 1);
	$h->b('ul', 0, 1);
		$menu->build('topmenu', 'li', JRequest::getVar('Itemid'), 'MyId', 'MyClass');
	$h->b('ul', 1, 1);
$h->b('nav', 1, 1);
?>