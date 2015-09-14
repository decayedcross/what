<?php 
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$article = new Joomla\Article;
$string = new Framework\String;
$h = new Framework\Html;

$article->sectionContent($this->articleAlias, $this->sectionAlias);
$introtext = $string->breakExplode($article->introtext);
$introtextSlice = array_slice($introtext, 4);

$h->b('div', 0, 1, '', '{"class":"row", "data-min-height":"70"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-xs-12"}');
			$h->b('h1', 0, 1, '', '{"class":"h1 col col-xs-12"}');
				$h->e(1, trim($introtext[0]));
			$h->b('h1', 1, 1);
			$h->b('div', 0, 1, '', '{"class":"left-img-col col col-xs-2", "data-mh":"home-section-3-col"}');
				$h->b('div', 0, 1, '', '{"class":"left-img", "style":"background-image:url('.trim($introtext[2]).')"}');
				$h->b('div', 1, 1);
			$h->b('div', 1, 1);
			$h->b('div', 0, 1, '', '{"class":"left-col col col-xs-6", "data-mh":"home-section-3-col"}');
				$h->b('ul', 0, 1, '', '{"class":"left-list row"}');
					$string->breakByGroupSize(3, $introtextSlice, __DIR__, 'list');
				$h->b('ul', 1, 1);
			$h->b('div', 1, 1);
			$h->b('div', 0, 1, '', '{"class":"right-col col col-xs-2", "data-mh":"home-section-3-col"}');
				$h->b('div', 0, 1, '', '{"class":"vertical"}');
					$h->b('video', 0, 1, '', '{"class":"right-video", "src":"'.trim($introtext[1]).'", "autoplay ":"", "loop":""}');
						$h->e(1, 'Your browser does not support the video element.');
					$h->b('video', 1, 1);
				$h->b('div', 1, 1);
			$h->b('div', 1, 1);
			$h->b('div', 0, 1, '', '{"class":"right-img-col col col-xs-2", "data-mh":"home-section-3-col"}');
				$h->b('div', 0, 1, '', '{"class":"test col col-xs-12", "data-mh":"home-section-3-col"}');
				$h->b('div', 1, 1);
				$h->b('div', 0, 1, '', '{"class":"right-img", "style":"background-image:url('.trim($introtext[3]).')"}');
				$h->b('div', 1, 1);
			$h->b('div', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>