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

$data = array(1, 2, 3);

$h->b('h1', 0, 1);
	$h->e(1, $text[0]);
$h->b('h1', 1, 1);

$h->b('div', 0, 1, '', '{"class":"slider"}');
	$h->b('ul', 0, 1, '', '{"class":"slides"}');
	foreach($data as $key => $val){
		$h->b('li', 0, 1);
			$h->b('img', 0, 1);
			$h->b('article', 0, 1, '', '{"class":"caption center-align"}');
				$h->b('i', 0, 1, '', '{"class":"fa fa-quote-right"}');
				$h->b('i', 1, 1);
				$h->b('p', 0, 1);
					$h->e(1, $text[$data[0]]);
				$h->b('p', 1, 1);
				$h->b('h2', 0, 1);
					$h->e(1, $text[$data[1]]);
				$h->b('h2', 1, 1);
			$h->b('article', 1, 1);
		$h->b('li', 1, 1);
		for ($i = 0; $i <= 2; $i++){
    		$data[$i] += 2;
		}
	}
	$h->b('ul', 1, 1);
$h->b('div', 1, 1);
?>