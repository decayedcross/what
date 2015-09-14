<?php 
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;
$article = new Joomla\Article;
$db = new Joomla\Database;
$string = new Framework\String;
$h = new Framework\Html;

$article->sectionContent($this->articleAlias, $this->sectionAlias);

$wallop = '{"class":"Wallop"}';
$wallopList = '{"class":"Wallop-list"}';
$wallopNext = '{"class":"next fa fa-arrow-circle-o-right"}';
$wallopPervious = '{"class":"previous fa fa-arrow-circle-o-left"}';
$wallopPagination = '{"class":"Wallop-pagination"}';

$itemsArray = $string->breakExplode($article->introtext);

$h->b('div', 0, 1, '', $wallop);
	$h->b('div', 0, 1, '', $wallopList);
		$string->breakByGroupSize(3, $itemsArray, __DIR__, 'items');
		$h->b('i', 0, 1, '', $wallopNext);$h->b('i', 1, 1);
		$h->b('i', 0, 1, '', $wallopPervious);$h->b('i', 1, 1);
	$h->b('div', 1, 1);
	$h->b('ul', 0, 1, '', $wallopPagination);
		$string->breakByGroupSize(3, $itemsArray, __DIR__, 'dots');
	$h->b('ul', 1, 1);
$h->b('div', 1, 1);
?>