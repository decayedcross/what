<?php
//ARTICLE
//CONTACT
//SECTION #1
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$article = new Joomla\Article;
$string = new Framework\String;
$h = new Framework\Html;

$article->sectionContent($this->articleAlias, $this->sectionAlias);

$introtext = $string->breakExplode($article->introtext);
$introtextSlice = array_slice($introtext, 3);

$row = '{"class":"row", "data-min-height":"80"}';
$vertical = '{"class":"vertical"}';
$container = '{"class":"col col-center col-xs-11 col-sm-10 col-md-9 col-lg-8"}';
$title = '{"class":"title col col-xs-12"}';
$subTitle = '{"class":"sub-title col col-xs-12"}';
$itemsCol = '{"class":"items-col col col-xs-6"}';
$items = '{"class":"items"}';
$imgCol = '{"class":"img-col col col-xs-6"}';
$img = '{"class":"img", "src":"'.trim($introtext[0]).'"}';

$h->b('div', 0, 1, '', $row);
	$h->b('div', 0, 1, '', $vertical);
		$h->b('div', 0, 1, '', $container);
			$h->b('h1', 0, 1, '', $title);
				$h->e(1, $introtext[1]);
			$h->b('h1', 1, 1);
			$h->b('h2', 0, 1, '', $subTitle);
				$h->e(1, $introtext[2]);
			$h->b('h2', 1, 1);
			$h->b('div', 0, 1, '', $itemsCol);
				$h->b('ul', 0, 1, '', $items);
					$string->breakByGroupSize(1, $introtextSlice, __DIR__, 'items');
				$h->b('ul', 1, 1);
			$h->b('div', 1, 1);
			$h->b('div', 0, 1, '', $imgCol);
				$h->b('img', 0, 1, '', $img);
			$h->b('div', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>