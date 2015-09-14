<?php 
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$article = new Joomla\Article;
$string = new Framework\String;
$h = new Framework\Html;

$article->sectionContent($this->articleAlias, $this->sectionAlias);
$introtext = $string->breakExplode($article->introtext);



$h->b('div', 0, 1, '', '{"class":"row", "data-min-height":"70"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-xs-12"}');
			$h->b('ul', 0, 1, '', '{"class":"col col-xs-12"}');				
			$h->b('ul', 1, 1);
		$h->b('div', 1, 1);
		$h->b('div', 0, 1, '', '{"class":"col col-xs-12"}');
			$h->b('ul', 0, 1, '', '{"class":"col col-xs-12"}');				
			$h->b('ul', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);

?>