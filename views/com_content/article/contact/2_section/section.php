<?php
use framework\html;
use framework\string;
use framework\css;
use joomla\article;
use joomla\database;

$db = new database();
$h = new html();
$article = new article();
$string = new string();
$css = new css();

$article->sectionContent($this->articleAlias, $this->sectionAlias);
$text = $string->breakExplode($article->introtext);

$h->b('div', 0, 1, '', '{"class":"row", "data-min-height":"50"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8"}');
			$h->b('form', 0, 1, '', '{"id":"contact-section-1-from", "method":"POST"}');
				$h->b('fieldset', 0, 1);
					foreach($text as $key => $val){
						if($key <= 4){
							if($key == 0){
								$h->b('ul', 0, 1);
							}
							$h->b('li', 0, 1, '{"id":"'.trim($val).'-li", "class":"col col-base-6"}');
								$h->b('input', 0, 1, '', '{"type":"text", "placeholder":"'.trim($val).'", "id":"'.trim(str_replace (" ","", strtolower($val))).'", "required":""}');
							$h->b('li', 1, 1);
							if($key == 4){
								$h->b('ul', 1, 1);
							}
						}
						if($key == 5){
							$h->b('p', 0, 1);
								$h->b('textarea', 0, 1, '', '{"type":"text", "placeholder":"'.trim($val).'", "id":"'.trim(strtolower($val)).'", "required":"", "class":"col col-base-12"}');
								$h->b('textarea', 1, 1);
							$h->b('p', 1, 1);
							
							$h->b('input', 0, 1, '', '{"type":"hidden", "value":"'.time().'", "id":"date"}');
							$h->b('input', 0, 1, '', '{"type":"hidden", "value":"'.$_SERVER['REMOTE_ADDR'].'", "id":"ip"}');
						}
						if($key == 6){
							$h->b('p', 0, 1);
							$h->b('input', 0, 1, '', '{"type":"submit", "value":"'.trim($val).'", "id":"'.trim($val).'"}');
						}
						if($key == 7){
							$h->b('input', 0, 1, '', '{"type":"reset", "value":"'.trim($val).'", "id":"'.trim($val).'"}');
							$h->b('p', 1, 1);
						}
					}
				$h->b('fieldset', 1, 1);
			$h->b('form', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>