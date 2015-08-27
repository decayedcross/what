<?php
//SECTION TWO

use framework\html;
use framework\string;
use joomla\menu;
use joomla\article;

$h = new html();
$menu = new menu();
$article = new article();
$string = new string();

$menu->current(JRequest::getVar('Itemid'));
$article->sectionContent($this->articleAlias, $this->sectionAlias);
$string->breakExplodeVars($article->introtext);

if($menu->currentAlias == 'about' || $menu->currentAlias == 'contact'){
	$h->b('div', 0, 1, '', '{"class":"row", "style":"background-image:url('.$string->text_0.')", "data-min-height":"50"}');
		$h->b('div', 0, 1, '', '{"class":"vertical"}');
			$h->b('div', 0, 1, '', '{"class":"col col-base-12 center"}');
				require('logo.php');
			$h->b('div', 1, 1);
			$h->b('div', 0, 1, '', '{"class":"col col-base-12"}');
				$h->b('h1', 0, 1);
					$h->e(1, 'Encounter Pain Relief');
				$h->b('h1', 1, 1);
			$h->b('div', 1, 1);
			$h->b('nav', 0, 1, '', '{"class":"col col-center col-base-6 col-sm-10 col-md-8"}');
				$h->b('ul', 0, 1, '', '{"class":"col col-base-12"}');
					$menu->build('topmenu', 'li', JRequest::getVar('Itemid'), 'section-1-topmenu-item', 'col col-base-2');
				$h->b('ul', 1, 1);
			$h->b('nav', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
}
?>