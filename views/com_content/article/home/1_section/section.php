<?php 
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$article = new Joomla\Article;
$string = new Framework\String;

$article->sectionContent($this->articleAlias, $this->sectionAlias);

$breakArray = $string->breakExplode($article->introtext);

$string->breakByGroupSize(3, $breakArray, __DIR__, 'item');



?>