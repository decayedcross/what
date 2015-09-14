<?php
//ARTICLE
//FAQ
//SECTION #2
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$article = new Joomla\Article;
$string = new Framework\String;
$h = new Framework\Html;

$article->sectionContent($this->articleAlias, $this->sectionAlias);

$string->breakExplodeVars($article->introtext);

$row = '{"class":"row", "data-min-height":"30"}';
$vertical = '{"class":"vertical"}';
$container = '{"class":"col col-center col-xs-11 col-sm-10 col-md-9 col-lg-8"}';
$title = '{"class":"title col-xs-12"}';
$article = '{"class":"article row"}';
$subTitle = '{"class":"sub-title col-xs-12"}';
$content = '{"class":"content col-xs-12"}';
$link = '{"class":"link col-xs-12", "href":"'.$string->text_3.'"}';
$btn = '{"class":"btn"}';

$h->b('div', 0, 1, '', $row);
	$h->b('div', 0, 1, '', $vertical);
		$h->b('div', 0, 1, '', $container);
			$h->b('h1', 0, 1, '', $title);
				$h->e(1, $string->text_0);
			$h->b('h1', 1, 1);
			$h->b('article', 0, 1, '', $article);
				$h->b('h1', 0, 1, '', $subTitle);
					$h->e(1, $string->text_1);
				$h->b('h1', 1, 1);
				$h->b('p', 0, 1, '', $content);
					$h->e(1, $string->text_2);
				$h->b('p', 1, 1);
				$h->b('a', 0, 1, '', $link);
					$h->b('button', 0, 1, '', $btn);
						$h->e(1, $string->text_4);
					$h->b('button', 1, 1);
				$h->b('a', 1, 1);
			$h->b('article', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>