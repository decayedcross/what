<?php
//ARTICLE
//CONTACT
//SECTION #3
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$article = new Joomla\Article;
$string = new Framework\String;

$article->sectionContent($this->articleAlias, $this->sectionAlias);

$introtext = $string->breakExplode($article->introtext);
$row = '{"class":"row", "data-min-height":"70"}';
$vertical = '{"class":"vertical"}';
$container = '{"class":"col col-center col-xs-11 col-sm-10 col-md-9 col-lg-8"}';
$map = '{"id":"map", "class":"map col col-xs-12", "data-min-height":"50"}';

$h->b('div', 0, 1, '', $row);
	$h->b('div', 0, 1, '', $vertical);
		$h->b('div', 0, 1, '', $container);
			$h->b('div', 0, 1, '', $map);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
require(__DIR__.'/map.php');
?>