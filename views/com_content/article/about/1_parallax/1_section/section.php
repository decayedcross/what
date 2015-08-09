<?php
use framework\html;
use framework\string;
use joomla\article;

$h = new html();
$article = new article();
$string = new string();

$article->sectionContent($this->articleAlias, $this->parallaxSectionAlias);
$string->breakExplodeVars($article->introtext);

$h->b('h1', 0, 1);
	$h->e(1, $string->text_0);
$h->b('h1', 1, 1);
$h->b('figure', 0, 1);
	$h->b('img', 0, 1, '', '{"src":"'.$string->text_1.'", "alt":"'.$string->text_2.'"}');
$h->b('figure', 1, 1);
$h->b('p', 0, 1);
	$h->e(1, $string->text_3);
$h->b('p', 1, 1);
$h->b('p', 0, 1);
	$h->e(1, $string->text_4);
$h->b('p', 1, 1);
$h->b('a', 0, 1, '', '{"href":"'.$string->text_5.'"}');
	$h->b('button', 0, 1);
		$h->e(1, $string->text_6);
	$h->b('button', 1, 1);
$h->b('a', 1,1);
?>