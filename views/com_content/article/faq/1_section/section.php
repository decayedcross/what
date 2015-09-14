<?php 
//ARTICLE
//FAQ
//SECTION #1
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;
$article = new Joomla\Article;
$string = new Framework\String;
$h = new Framework\Html;

$article->sectionContent($this->articleAlias, $this->sectionAlias);

$row = '{"class":"row", "data-min-height":"30"}';
$vertical = '{"class":"vertical"}';
$container = '{"class":"col col-center col-xs-11 col-sm-10 col-md-9 col-lg-8"}';

$h->b('div', 0, 1, '', $row);
	$h->b('div', 0, 1, '', $vertical);
		$h->b('div', 0, 1, '', $container);
			$string->breakByGroupSize(2, $string->breakExplode($article->introtext), __DIR__, 'boxes');
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>