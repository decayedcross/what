<?php
//SECTION 5
use framework\html;
use framework\string;
use framework\css;
use joomla\article;

$h = new html();
$css = new css();
$article = new article();
$string = new string();

$article->sectionContent($this->articleAlias, $this->sectionAlias);
$string->breakExplodeVars($article->introtext);

$h->b('div', 0, 1, '{"class":"row", "data-min-height":"50"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-center col-base-7"}');	
			$h->b('h1', 0, 1);
				$h->e(1, $string->text_0);
			$h->b('h1', 1, 1);
			$h->b('p', 0, 1);
				$h->e(1, $string->text_1);
			$h->b('p', 1, 1);
				$h->b('div', 0, 1, '', '{"class":"col col-center col-base-7"}');
					$h->b('form', 0, 1, '', '{"class":"col col-base-12"}');
						$h->b('div', 0, 1, '', '{"class":"col col-base-10"}');	
							$h->b('input', 0, 1, '', '{"type":"email", "data-mh":"home-section-5-input", "placeholder":"'.$string->text_2.'", "required":""}');
						$h->b('div', 1, 1);
						$h->b('div', 0, 1, '', '{"class":"col col-base-2"}');
							$h->b('button', 0, 1, '', '{"type":"submit", "data-mh":"home-section-5-input", "class":"fa fa-envelope"}');
							$h->b('button', 1, 1);
						$h->b('div', 1, 1);
					$h->b('form', 1, 1);
				$h->b('div', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>