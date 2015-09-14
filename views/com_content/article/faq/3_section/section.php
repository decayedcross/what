<?php
//ARTICLE
//FAQ
//SECTION #3
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$article = new Joomla\Article;
$string = new Framework\String;
$h = new Framework\Html;

$article->sectionContent($this->articleAlias, $this->sectionAlias);
$introtext = $string->breakExplode($article->introtext);
$content = array_slice($introtext, 1);

$row = '{"class":"row", "data-min-height":"50"}';
$vertical = '{"class":"vertical"}';
$container = '{"class":"col col-center col-xs-11 col-sm-10 col-md-9 col-lg-8"}';
$title = '{"class":"title col-xs-12"}';
$list = '{"class":"list acc-list"}';

$h->b('div', 0, 1, '', $row);
	$h->b('div', 0, 1, '', $vertical);
		$h->b('div', 0, 1, '', $container);
			$h->b('h1', 0, 1, '', $title);
				$h->e(1, $introtext[0]);
			$h->b('h1', 1, 1);
			$h->b('ul', 0, 1, '', $list);
				$string->breakByGroupSize(2, $content, __DIR__, 'questions');
			$h->b('ul', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>