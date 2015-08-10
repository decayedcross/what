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


if($menu->currentAlias <> 'home'){
	$h->b('div', 0, 1, '', '{"class":"background", "style":"background-image:url('.$article->introtext.')"}');
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
	$h->b('div', 1, 1);
}
?>