<?php
use framework\html;
use framework\string;
use joomla\article;
use joomla\database;

$db = new database();
$h = new html();
$article = new article();
$string = new string();

$article->sectionContent($this->articleAlias, $this->sectionAlias);
$text = $string->breakExplode($article->introtext);

$data = array(1, 2, 3, 4);

$h->b('h1', 0, 1);
	$h->e(1, $text[0]);
$h->b('h1', 1, 1);

$h->b('ul', 0, 1);
	foreach($data as $key => $val){
		$h->b('li', 0,1);
			$h->b('figure', 0, 1);
				$h->b('img', 0, 1, '', '{"src":"'.trim($text[$data[0]]).'", "alt":"'.trim($text[$data[1]]).'"}');
			$h->b('figure', 1, 1);
			$h->b('article', 0, 1);
				$h->b('h2', 0, 1);
					$h->e(1, $text[$data[2]]);
				$h->b('h2', 1, 1);
				$h->b('p', 0, 1);
					$h->e(1, $text[$data[3]]);
				$h->b('p', 1, 1);
			$h->b('article', 1, 1);
		$h->b('li', 1, 1);
		for ($i = 0; $i <= 3; $i++){
    		$data[$i] += 4;
		}
	}
$h->b('ul', 1, 1);
?>