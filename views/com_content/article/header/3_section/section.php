<?php
/*
SECTION 3
*/

use framework\html;
use framework\css;
use joomla\menu;

$h = new html();
$css = new css();
$menu = new menu();
$menu->current(JRequest::getVar('Itemid'));

if($menu->currentAlias == 'home' || $menu->currentAlias == 'about' || $menu->currentAlias == 'contact'){
	$h->b('nav', 0, 1, '', '{"id":"nav"}');
		$h->b('div', 0, 1, '', '{"id":"menu"}');
			$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8"}');
				$h->b('a', 0, 1, '', '{"href":"#", "class":"col col-base-3", "data-mh":"header-section-3-col"}');
					require('logo.php');
				$h->b('a', 1, 1);
				$h->b('ul', 0, 1, '', '{"class":"col col-base-9", "data-mh":"header-section-3-col"}');
					$h->b('div', 0, 1, '', '{"class":"vertical"}');
						$menu->build('topmenu', 'li', JRequest::getVar('Itemid'), 'menu-item', 'col col-base-2');
					$h->b('div', 1, 1);
				$h->b('ul', 1, 1);
			$h->b('div', 1, 1);
		$h->b('div', 1, 1);
	$h->b('nav', 1, 1);
}
?>