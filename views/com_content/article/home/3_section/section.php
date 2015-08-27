<?php
use framework\html;
use framework\string;
use joomla\article;

$h = new html();
$article = new article();
$string = new string();

$article->sectionContent($this->articleAlias, $this->sectionAlias);
$text = $string->breakExplode($article->introtext);

$h->b('div', 0, 1, '{"class":"row", "data-min-height":"50"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8"}');
			$h->b('h1', 0, 1, '{"class":"col-base-12"}');
				$h->e(1, $text[0]);
			$h->b('h1', 1, 1);
			foreach ($text as $key => $value){
				if($key <> 0){
					$h->b('p', 0, 1, '{"class":"col-base-12"}');
						$h->e(1, $value);
					$h->b('p', 1, 1);
				}
			}
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>