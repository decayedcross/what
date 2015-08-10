<?php
use framework\html;
use framework\css;
use joomla\menu;

$h = new html();
$css = new css();
$menu = new menu();

$h->b('section', 0, 1, '', $css::classWhatSectionCenter);
$h->b('figure', 0, 1);
	require('logo.php');
$h->b('figure', 1, 1);
$h->b('nav', 0, 1);
	$h->b('ul', 0, 1);
		$menu->build('topmenu', 'li', JRequest::getVar('Itemid'), 'MyId', 'MyClass');
	$h->b('ul', 1, 1);
$h->b('nav', 1, 1);
$h->b('section', 1, 1);
?>