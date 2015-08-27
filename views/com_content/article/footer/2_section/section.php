<?php
use framework\html;
use framework\string;
use joomla\menu;
use joomla\article;
use joomla\database;

$h = new html();
$menu = new menu();
$article = new article();
$string = new string();
$db = new database();

$menu->current(JRequest::getVar('Itemid'));
$article->sectionContent($this->articleAlias, $this->sectionAlias);
$string->breakExplodeVars($article->introtext);

/*$h->b('nav', 0, 1);
	$h->b('ul', 0, 1);
		$menu->build('footermenu', 'li', JRequest::getVar('Itemid'), 'footerId', 'footerClass');
	$h->b('ul', 1, 1);
$h->b('nav', 1, 1);*/
$h->b('div', 0, 1, '', '{"class":"row", "data-min-height":"10"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8"}');
			$h->b('p', 0, 1);
				$h->b('span', 0, 1);
					$h->e(1, $string->text_0);
				$h->b('span', 1, 1);
				$h->b('a', 0, 1, '', '{"href":"'.$string->text_0.'"}');
					$h->e(1, $string->text_2);
				$h->b('a', 1, 1);
			$h->b('p', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>