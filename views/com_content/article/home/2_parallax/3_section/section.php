<?php
use framework\html;
use framework\string;
use joomla\article;

$h = new html();
$article = new article();
$string = new string();

$article->sectionContent($this->articleAlias, $this->parallaxSectionAlias);
$text = $string->breakExplode($article->introtext);

$h->b('h1', 0, 1);
	$h->e(1, $text[0]);
$h->b('h1', 1, 1);

foreach ($text as $key => $value){
	if($key <> 0){
		echo $value;
	}
}
?>