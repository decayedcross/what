<?php
use framework\html;
use framework\string;
use joomla\article;

$h = new html();
$article = new article();
$string = new string();

$article->sectionContent($this->articleAlias, $this->parallaxSectionAlias);
$text = $string->breakExplode($article->introtext);

$data = array(3, 4, 5);

$h->b('section', 0, 1, '', '{"class":"vertical-center"}');

$h->b('hgroup', 0, 1);
	$h->b('h1', 0, 1);
		$h->e(1, $text[1]);
	$h->b('h1', 1, 1);
	$h->b('h2', 0, 1);
		$h->e(1, $text[2]);
	$h->b('h2', 1, 1);
$h->b('hgroup', 1, 1);

$h->b('section', 0, 1);
	foreach($data as $key => $val){
		$h->b('figure', 0, 1);
			$h->b('div', 0, 1);
				$h->b('a', 0, 1, '', '{"href":"'.trim($text[$data[0]]).'"}');
					$h->b('i', 0, 1, '', '{"class":"'.trim($text[$data[1]]).'"}');
					$h->b('i', 1, 1);
				$h->b('a', 1, 1);
				$h->b('figcaption', 0, 1);
					$h->b('p', 0, 1);
						$h->e(1, $text[$data[2]]);
					$h->b('p', 1, 1);
				$h->b('figcaption', 1, 1);
			$h->b('div', 1, 1);
		$h->b('figure', 1, 1);
		for ($i = 0; $i <= 2; $i++){
    		$data[$i] += 3;
		}
	}
$h->b('section', 1, 1);

$h->b('section', 1, 1);
?>