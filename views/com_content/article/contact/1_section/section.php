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

$h->b('div', 0, 1, '', '{"class":"row", "data-min-height":"20"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8"}');
			$h->b('h1', 0, 1, '{"class":"col col-xs-12"}');
			$h->e(1, $text[0]);
			$h->b('h1', 1, 1);

			foreach($text as $key => $val){
				switch($key){
					case 2:
						$icon = $css::faHome;
					break;
					case 6:
						$icon = $css::faPhone;
					break;
					case 7:
						$icon = $css::faFax;
					break;
					case 9:
						$icon = $css::faEnvelopeO;
					break;
					default:
						$icon = '{"class":"indent"}';
				}

				if($key <> 0){
					if($key == 1 || $key == 5 || $key == 8){
						$h->b('ul', 0, 1, '{"class":"col col-xs-12 col-sm-4 col-md-4 col-lg-4"}');
						$h->b('li', 0, 1);
							$h->b('h2', 0, 1);
								$h->e(1, $text[$key]);
							$h->b('h2', 1, 1);
						$h->b('li', 1, 1);
					}elseif($key == 2 || $key == 3 || $key == 4){
						$h->b('li', 0, 1);
							$h->b('i', 0, 1, '', $icon);
							$h->b('i', 1, 1);
							$h->e(1, $text[$key]);
						$h->b('li', 1, 1);
					}
					if($key == 6){
						$h->b('li', 0, 1);
							$h->b('i', 0, 1, '', $icon);
							$h->b('i', 1, 1);
							$h->b('a', 0, 1, '', '{"href":"tel:+15732301748"}');
								$h->e(1, $text[$key]);
							$h->b('a', 1, 1);
						$h->b('li', 1, 1);
					}
					if($key == 7){
						$h->b('li', 0, 1);
							$h->b('i', 0, 1, '', $icon);
							$h->b('i', 1, 1);
							$h->b('a', 0, 1, '', '{"href":"tel:+15736367382"}');
								$h->e(1, $text[$key]);
							$h->b('a', 1, 1);
						$h->b('li', 1, 1);
						$h->b('ul', 1, 1);
					}
					if($key == 9){
						$h->b('li', 0, 1);
							$h->b('i', 0, 1, '', $icon);
							$h->b('i', 1, 1);
							$h->b('a', 0, 1, '', '{"href":"mailto:info@encounterpainrelief.com"}');
								$h->e(1, $text[$key]);
							$h->b('a', 1, 1);
						$h->b('li', 1, 1);
					}
					if($key == 4 || $key == 10){
						$h->b('ul', 1, 1);
					}	
				}
			}
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>