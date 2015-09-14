<?php
//ARTICLE
//FAQ
//SECTION #1
//BOXES
use Antfuentes\Titan\Framework;
$h = new Framework\Html;

$column = '{"class":"column col col-xs-4"}';
$background = '{"class":"background vertical", "data-mh":"faq-section-1-col"}';
$container = '{"class":"col col-center col-xs-11"}';
$title = '{"class":"title col col-xs-12"}';
$content = '{"class":"content col col-xs-12"}';

$h->b('section', 0, 1, '', $column);
	$h->b('div', 0, 1, '', $background);
		$h->b('div', 0, 1, '', $container);
			$h->b('h1', 0, 1, '', $title);
				$h->e(1, $this->array[$this->key[0]]);
			$h->b('h1', 1, 1);
			$h->b('p', 0, 1, '', $content);
				$h->e(1, $this->array[$this->key[1]]);
			$h->b('p', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('section', 1, 1);
?>