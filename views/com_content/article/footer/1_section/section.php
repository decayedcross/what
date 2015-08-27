<?php
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

$h->b('div', 0, 1, '', '{"class":"row", "data-min-height":"20"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8"}');
			$h->b('figure', 0, 1, '{"class":"col col-center col-base-2"}');
				require('logo.php');
				$h->b('figcaption', 0, 1);
					$h->b('p', 0, 1);
						$h->e(1, ' 2015');
					$h->b('p', 1, 1);
				$h->b('figcaption', 1, 1);
			$h->b('figure', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>