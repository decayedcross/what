<?php
use framework\html;
use framework\string;
use joomla\article;
use joomla\database;

$db = new database();
$h = new html();
$article = new article();
$string = new string();

$article->sectionContent($this->articleAlias, $this->sectionAlias);
$string->breakExplodeVars($article->introtext);

$h->b('div', 0, 1, '', '{"class":"row", "data-min-height":"50"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8"}');
			$h->b('div', 0, 1, '', '{"id":"contact-map", "data-min-height":"50"}');
			$h->b('div', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>