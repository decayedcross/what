<?php
use framework\html;
use framework\string;
use joomla\article;

$h = new html();
$article = new article();
$string = new string();

$article->sectionContent($this->articleAlias, '1-section');
$string->breakExplodeVars($article->introtext);

$parallaxBackground = $string->text_0;
return $parallaxBackground;
?>