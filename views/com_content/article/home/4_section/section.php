<?php 
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$article = new Joomla\Article;
$string = new Framework\String;
$h = new Framework\Html;

$article->sectionContent($this->articleAlias, $this->sectionAlias);
$introtext = $string->breakExplode($article->introtext);

$h->b('div', 0, 1, '', '{"class":"row", "data-min-height":"70"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-xs-12 bg-div", "data-min-height":"35"}');
			$h->b('div', 0, 1, '', '{"class":"vertical"}');
				$h->b('div', 0, 1, '', '{"class":"col col-center col-xs-8 div"}');
					$h->b('ul', 0, 1, '', '{"class":"col col-xs-12 ul"}');
						$string->breakByGroupSize(1, $introtext, __DIR__, 'logos');
					$h->b('ul', 1, 1);
				$h->b('div', 1, 1);
			$h->b('div', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);

?>