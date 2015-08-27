<?php
use joomla\menu;
use joomla\link;

use framework\ENCschema;
use framework\html;
use framework\string;
use framework\css;
use framework\youtube;

$h = new html();
$menu = new menu();
$string = new string();
$css = new css();
$sch = new ENCschema();
$youtube = new youtube();

$menu->link(JRequest::getVar('Itemid'));
$menu->article($this->id, JRequest::getVar('Itemid'));
$youtube->snippet($this->introtext);

$social = array(
	'{"class":"fb-share-button", "data-href":"'.$menu->currentLink.'", "data-layout":"button_count"}',
	'{"class":"g-plus", "data-href":"'.$menu->currentLink.'", "data-action":"share", "data-annotation":"bubble"}',
	'{"class":"twitter-share-button", "data-url":"'.$menu->currentLink.'"}'
);

if($resultsKey == 0){
$h->b('section', 0, 1, '', '{"class":"row", "data-min-height":"50"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8"}');
}
			$h->b('figure', 0, 1, $sch::imageObject, '{"id":"object", "class":"col col-xs-12 col-sm-12 col-md-6", "data-mh":"video-cat-figure"}');
				$h->b('meta', 0, 1, $sch::datePublished, '{"content":"'.$youtube->videoPublishedAt.'"}');
				$h->b('a', 0, 1, '', '{"href":"'.$menu->articleLink.'"}');

					$h->b('img', 0, 1, $sch::contentUrl, '{"src":"'.$youtube->videoThumbnailHighUrl.'", "alt":"'.$youtube->videoThumbnailAlt.'", "width":"'.$youtube->videoThumbnailHighWidth.'", "height":"'.$youtube->videoThumbnailHighHeight.'"}');
					$h->b('div', 0, 1, '', '{"style":"background-image: url('.$youtube->videoThumbnailHighUrl.'); height: '.$youtube->videoThumbnailHighHeight.'px;", "class":"object-div-image"}');
					$h->b('div', 1, 1);
				$h->b('a', 1, 1);
				$h->b('figcaption', 0, 1, '', '{"id":"content", "class":"col col-base-12"}');
					$h->b('time', 0, 1, '', '{"id":"left", "class":"col col-xs-12 col-sm-3"}');
						$h->b('div', 0 , 1, '', '{"class":"inner col-center col-base-9"}');
							$h->b('span', 0, 1);
								$h->e(1, $string->formatDate('d', $youtube->videoPublishedAt));
							$h->b('span', 1, 1);
							$h->b('span', 0, 1);
								$h->e(1, $string->formatDate('m.Y', $youtube->videoPublishedAt));				
							$h->b('span', 1, 1);
						$h->b('div', 1 , 1);
					$h->b('time', 1, 1);
					$h->b('article', 0, 1, '', '{"id":"right", "class":"col col-xs-12 col-sm-9"}');
						$h->b('h2', 0, 1, $sch::name, '{"data-mh":"video-cat-figure-h2", "class":"description col col-xs-12 col-sm-11"}');
							$h->b('a', 0, 1, '', '{"href":"'.$menu->articleLink.'"}');
								$h->e(1, $youtube->videoTitle);
							$h->b('a', 1, 1);
						$h->b('h2', 1, 1);						
						$h->b('p', 0, 1, $sch::description, '{"class":"description col col-xs-12 col-sm-11", "data-mh":"video-cat-figure-p"}');
							$h->e(1, substr($youtube->videoDescription, 0, 200));
						$h->b('p', 1, 1);
						$h->b('a', 0, 1, '', '{"href":"'.$menu->articleLink.'", "class":"button col col-xs-12 col-sm-11"}');
							$h->b('button', 0, 1);
								$h->e(1, 'Watch Now');
							$h->b('button', 1, 1);				
						$h->b('a', 1, 1);
					$h->b('article', 1, 1);
				$h->b('figcaption', 1, 1);
			$h->b('figure', 1, 1);	
if($resultsKey == $this->showLimit){
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('section', 1, 1);
}
?>