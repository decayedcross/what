<?php
use framework\html;
use framework\string;
use joomla\article;

$h = new html();
$article = new article();
$string = new string();

$article->sectionContent($this->articleAlias, $this->parallaxSectionAlias);
$string->breakExplodeVars($article->introtext);

$h->b('hgroup', 0, 1);
	$h->b('h1', 0, 1);
		$h->e(1, $string->text_1, 1);
	$h->b('h1', 1, 1);
	$h->b('h2', 0, 1);
		$h->e(1, $string->text_2);
	$h->b('h2', 1, 1);
$h->b('hgroup', 1, 1);
?>