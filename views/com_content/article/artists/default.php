<?php 
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$db = new Joomla\Database;
$article = new Joomla\Article;
$string = new Framework\String;
$h = new Framework\Html;


$article->content($this->routerId);

$introtext = $string->breakExplode($article->introtext);
$content = array_slice($introtext, 2);
$img = json_decode($article->images);
$article->getCatergoryPath($this->routerId);
$city = ucwords($string->replaceString('-', ' ', $article->path_1));
$artist = ucwords($article->path_2);



	$h->b('section', 0, 1, '', '{"class":"row artists-article", "data-min-height":"50"}');
		$h->b('div', 0, 1, '', '{"class":"vertical"}');
			$h->b('div', 0, 1, '', '{"class":"col col-center col-xs-8"}');		
				$h->b('div', 0, 1, '', '{"class":"col col-xs-12 top"}');
					$h->b('div', 0, 1, '', '{"class":"vertical"}');
						$h->b('h1', 0, 1, '', '{"class":"h1"}');	
							$h->e(1, $city.' / '.$artist);
						$h->b('h1', 1, 1);
					$h->b('div', 1, 1);
				$h->b('div', 1, 1);
				$h->b('div', 0, 1, '', '{"class":"col col-xs-4 left", "data-mh":"artists-article-div"}');
					$h->b('div', 0, 1, '', '{"class":"vertical"}');
						$h->b('figure', 0, 1, '', '{"class":"col col-xs-12"}');
							$h->b('img', 0, 1, '', '{"class":"col col-xs-12 image", "src":"'.$img->image_fulltext.'", "alt":"'.$img->image_fulltext_alt.'"}');
							$h->b('div', 0, 1, '', '{"style":"background-image: url('.$img->image_fulltext.')", "class":"div-img"}');
							$h->b('div', 1, 1);
							$h->b('figcaption', 0, 1, '', '{"class":"figcaption"}');
								$h->b('hgroup', 0, 1, '', '{"class":"col col-center col-xs-8", "id":"hgroup"}');						
									$h->b('h2', 0, 1, '', '{"id":"h2"}');
										$h->e(1, $introtext[0]);
									$h->b('h2', 1, 1);
									$h->b('h3', 0, 1, '', '{"id":"h3"}');
										$h->e(1, $introtext[1]);
									$h->b('h3', 1, 1);
								$h->b('hgroup', 1, 1);
							$h->b('figcaption', 1,1);
						$h->b('figure', 1,1);
					$h->b('div', 1, 1);
				$h->b('div', 1, 1);
				$h->b('div', 0, 1, '', '{"class":"col col-xs-8 right", "data-mh":"artists-article-div"}');
					$h->b('div', 0, 1, '', '{"class":"vertical"}');
						$h->b('article', 0, 1, '', '{"id":"article"}');	
							$string->breakByGroupSize(1, $content, __DIR__, 'paragraphs');
						$h->b('article', 1, 1);	
					$h->b('div', 1, 1);
				$h->b('div', 1, 1);
				$h->b('div', 0, 1, '', '{"class":"row"}');
					$h->b('div', 0, 1, '', '{"class":"col col-xs-12"}');
						$string->breakByGroupSize(1, $content, __DIR__, 'audio');
					$h->b('div', 1, 1);
				$h->b('div', 1, 1);
			$h->b('div', 1, 1);
		$h->b('div', 1, 1);
	$h->b('section', 1, 1);
?>