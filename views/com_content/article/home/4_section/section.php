<?php
//SECTION 4

use joomla\article;
use joomla\menu;
use joomla\module;
use framework\html;

$menu = new menu();
$article = new article();
$module = new module();
$h = new html();

$results = $module->getContentCatergoryAlias('blog');

$h->b('section', 0, 1, '', '{"class":"row", "data-min-height":"65"}');

foreach ($results as $resultsKey => $result){
	$article->variable($result);
	$images = json_decode($article->images);
	$menu->article($article->id, $module->itemId);
	
	$h->b('figure', 0, 1, '', '{"class":"col col-base-12 col-xs-12 col-sm-3 col-md-3 col-lg-3", "data-min-height":"65", "style":"background-image: url('.$images->image_intro.');"}');
		$h->b('article', 0, 1, '', '{"class":"vertical"}');
			$h->b('div', 0, 1, '', '{"class":"col col-center col-base-10"}');
				$h->b('h1', 0, 1, '', '{"data-mh":"home-section-4-h1"}');
					$h->b('a', 0, 1, '', '{"href":"'.$menu->articleLink.'"}');
						$h->e(1, $article->title);
					$h->b('a', 1, 1);
				$h->b('h1', 1, 1);
				$h->b('p', 0, 1);
					$h->e(1, $article->metadesc);
				$h->b('p', 1, 1);
				$h->b('a', 0, 1, '', '{"href":"'.$menu->articleLink.'"}');
					$h->b('button', 0, 1);
						$h->e(1, 'Read More');
					$h->b('button', 1, 1);
				$h->b('a', 1, 1);
			$h->b('div', 1, 1);
		$h->b('article', 1, 1);
	$h->b('figure', 1, 1);
}

$h->b('section', 1, 1);
?>
