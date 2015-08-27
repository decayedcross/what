<?php
//SECTION 2
use joomla\article;
use joomla\menu;
use joomla\module;

use framework\youtube;
use framework\html;
use framework\css;
use framework\string;
use framework\ENCschema;

$article = new article();
$menu = new menu();
$module = new module();

$h = new html();
$sch = new ENCschema();
$css = new css();
$string = new string();
$youtube = new youtube();

$article->sectionContent($this->articleAlias, $this->parallaxSectionAlias);
$results = $module->getContentCatergoryAlias('video');

$h->b('section', 0, 1, '', '{"class":"row", "data-min-height":"29"}');
	foreach ($results as $resultsKey => $result){
		$article->variable($result);
		$youtube->snippet($article->introtext);
		$menu->article($article->id, $module->itemId);
		$h->b('figure', 0, 1, $sch::imageObject, '{"class":"col col-base-12 col-xs-12 col-sm-6 col-md-3 col-lg-3", "data-min-height":"29", "style":"background-image:url('.$youtube->videoThumbnailHighUrl.')"}');
			$h->b('div', 0, 1, '', '{"class":"vertical"}');
				$h->b('meta', 0, 1, $sch::datePublished, '{"content":"'.$youtube->videoPublishedAt.'"}');
				$h->b('a', 0, 1, '', '{"href":"'.$menu->articleLink.'", "class":"col col-center col-base-8"}');
					$h->b('figcaption', 0, 1, '', '{"class":"col col-base-12"}');
						$h->b('h2', 0, 1, $sch::name, '{"data-mh":"header-section-1-h2"}');
							$h->e(1, $youtube->videoTitle);
						$h->b('h2', 1, 1);
						$h->b('button', 0, 1, '', '{"class":"col col-base-12"}');
							$h->b('i', 0, 1, '', $css::faYouTubePlay);
							$h->b('i', 1, 1);
						$h->b('button', 1, 1);
					$h->b('figcaption', 1, 1);
				$h->b('a', 1, 1);
			$h->b('div', 1, 1);
		$h->b('figure', 1, 1);
	}
$h->b('section', 1, 1);
?>