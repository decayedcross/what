<?php
/*
SECTION 4
MOBILE MENU
*/
use framework\html;
use framework\css;
use joomla\menu;

$h = new html();
$css = new css();
$menu = new menu();
$menu->current(JRequest::getVar('Itemid'));

$h->b('div', 0, 1, '', '{"id":"shim", "class":"row", "data-min-height":"20"}');
$h->b('div', 1, 1);
$h->b('nav', 0, 1, '', '{"id":"nav", "class":"row", "data-min-height":"20"}');
	$h->b('div', 0, 1, '', '{"id":"brand", "class":"col col-base-2"}');
		require('logo.php');
	$h->b('div', 1, 1);
	$h->b('div', 0, 1, '', '{"id":"toggle", "class":"col col-base-10"}');
		$h->b('i', 0, 1, '', $css::faBars);
		$h->b('i', 1, 1);
	$h->b('div', 1, 1);
	$h->b('div', 0, 1, '', '{"id":"collapse", "class":"row"}');
		$h->b('ul', 0, 1, '', '{"id":"menu", "class":"col col-base-12"}');
			$menu->build('topmenu', 'li', JRequest::getVar('Itemid'), 'item', 'col col-base-12');
		$h->b('ul', 1, 1);
	$h->b('div', 1, 1);
$h->b('nav', 1, 1);

/*$h->b('div', 0, 1, '', '{"id":"shim"}');
	$h->b('div', 1, 1);
	$h->b('div', 0, 1, '', '{"id":"fixed"}');
		$h->b('nav', 0, 1, '', '{"class":"row middle-xs center-xs horz-center"}');
			$h->b('a', 0, 1, '', '{"href":"#", "class":"col-xs-2"}');
				require('logo.php');
			$h->b('a', 1, 1);
			$h->b('a', 0, 1, '', '{"class":"col-xs-10"}');
				$h->b('i', 0, 1, '', $css::faBars);
				$h->b('i', 1, 1);
			$h->b('a', 1, 1);
			$h->b('div', 0, 1, '', '{"id":"collapse"}');
				$h->b('ul', 0, 1, '', '{"class":"row"}');
					$menu->build('topmenu', 'li', JRequest::getVar('Itemid'), 'menu-item', 'col-xs-12 col-sm-12 col-md-12 col-lg-12');
				$h->b('ul', 1, 1);
			$h->b('div', 1, 1);
		$h->b('nav', 1, 1);
	$h->b('div', 1, 1);*/
?>