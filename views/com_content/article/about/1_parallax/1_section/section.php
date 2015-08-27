<?php
use framework\html;
use framework\string;
use joomla\article;

$h = new html();
$article = new article();
$string = new string();

$article->sectionContent($this->articleAlias, $this->parallaxSectionAlias);
$string->breakExplodeVars($article->introtext);

$h->b('div', 0, 1, '', '{"class":"row", "data-min-height":"50"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-center col-xs-11 col-sm-10 col-md-9 col-lg-8"}');
			$h->b('h1', 0, 1);
				$h->e(1, $string->text_0);
			$h->b('h1', 1, 1);
			$h->b('figure', 0, 1, '', '{"class":"col col-base-12"}');
				$h->b('img', 0, 1, '', '{"src":"'.$string->text_1.'", "alt":"'.$string->text_2.'", "class":"col col-base-8 col-center"}');
			$h->b('figure', 1, 1);
			$h->b('div', 0, 1, '', '{"class":"col col-base-12"}');
				$h->b('p', 0, 1, '', '{"class":"col col-center col-base-12"}');
					$h->e(1, $string->text_3);
				$h->b('p', 1, 1);
				$h->b('p', 0, 1, '', '{"class":"col col-center col-base-12"}');
					$h->e(1, $string->text_4);
				$h->b('p', 1, 1);
			$h->b('div', 1, 1);
			$h->b('a', 0, 1, '', '{"href":"'.$string->text_5.'", "class":" col-base-6"}');
				$h->b('button', 0, 1);
					$h->e(1, $string->text_6);
				$h->b('button', 1, 1);
			$h->b('a', 1,1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>

