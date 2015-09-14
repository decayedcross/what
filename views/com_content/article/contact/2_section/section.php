<?php
//ARTICLE
//CONTACT
//SECTION #2
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$article = new Joomla\Article;
$string = new Framework\String;
$h = new Framework\Html;

$article->sectionContent($this->articleAlias, $this->sectionAlias);

$introtext = $string->breakExplode($article->introtext);
$introtextSlice = array_slice($introtext, 2);

$row = '{"class":"row", "data-min-height":"70"}';
$vertical = '{"class":"vertical"}';
$container = '{"class":"col col-center col-xs-11 col-sm-10 col-md-9 col-lg-8"}';
$title = '{"class":"title col col-xs-12"}';
$content = '{"class":"content col col-xs-12"}';
$form = '{"class":"form row", "method":"post", "action":"/"}';
$list = '{"class":"list col col-xs-12"}';

$h->b('div', 0, 1, '', $row);
	$h->b('div', 0, 1, '', $vertical);
		$h->b('div', 0, 1, '', $container);
			$h->b('h2', 0, 1, '', $title);
				$h->e(1, $introtext[0]);
			$h->b('h2', 1, 1);
			$h->b('p', 0, 1, '', $content);
				$h->e(1, $introtext[1]);
			$h->b('p', 1, 1);
			$h->b('form', 0, 1, '', $form);
				$h->b('dl', 0, 1, '', $list);
					$string->breakByGroupSize(1, $introtextSlice, __DIR__, 'items');
				$h->b('dl', 1, 1);
			$h->b('form', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);

?>