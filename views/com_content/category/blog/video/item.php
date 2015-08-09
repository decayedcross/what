<?php
use joomla\menu;
use joomla\link;

use framework\ENCschema;
use framework\html;
use framework\string;
use framework\css;
use framework\youtube;

$menu = new menu();
$h = new html();
$string = new string();
$css = new css();
$sch = new ENCschema();
$link = new link();
$youtube = new youtube();

$menu->link(JRequest::getVar('Itemid'));
$youtube->snippet($this->introtext);

$social = array(
	'{"class":"fb-share-button", "data-href":"'.$menu->currentLink.'", "data-layout":"button_count"}',
	'{"class":"g-plus", "data-href":"'.$menu->currentLink.'", "data-action":"share", "data-annotation":"bubble"}',
	'{"class":"twitter-share-button", "data-url":"'.$menu->currentLink.'"}'
);

$h->b('figure', 0, 1, $sch::imageObject, '{"class":"object"}');
	$h->b('meta', 0, 1, $sch::datePublished, '{"content":"'.$youtube->videoPublishedAt.'"}');
	$h->b('a', 0, 1, '', '{"href":"'.$link->article($this->id, JRequest::getVar('Itemid')).'"}');
		$h->b('img', 0, 1, $sch::contentUrl, '{"src":"'.$youtube->videoThumbnailHighUrl.'", "alt":"'.$youtube->videoThumbnailAlt.'", "width":"'.$youtube->videoThumbnailHighWidth.'", "height":"'.$youtube->videoThumbnailHighHeight.'"}');
	$h->b('a', 1, 1);
	$h->b('figcaption', 0, 1, '', '{"class":"content"}');
		$h->b('time', 0, 1, '', '{"class":"left"}');
			$h->b('div', 0 , 1, '', '{"class":"inner"}');
				$h->b('span', 0, 1);
					$h->e(1, $string->formatDate('d', $youtube->videoPublishedAt));
				$h->b('span', 1, 1);
				$h->b('span', 0, 1);
					$h->e(1, $string->formatDate('m.Y', $youtube->videoPublishedAt));				
				$h->b('span', 1, 1);
			$h->b('div', 1 , 1);
		$h->b('time', 1, 1);
		$h->b('article', 0, 1, '', '{"class":"right"}');
			$h->b('h2', 0, 1, $sch::name);
				$h->b('a', 0, 1, '', '{"href":"'.$link->article($this->id, JRequest::getVar('Itemid')).'"}');
					$h->e(1, $youtube->videoTitle);
				$h->b('a', 1, 1);
			$h->b('h2', 1, 1);
			$h->b('span', 0, 1, $sch::author, '{"class":"subscribe"}');
				$youtube->subscribeButton($youtube->channelId);
			$h->b('span', 1, 1);
			$h->b('ul', 0, 1, '', '{"class":"share"}');
				foreach($social as $socialKey => $socialValue){
					$h->b('li', 0, 1);
						$h->b('a', 0, 1, '', $socialValue);
						$h->b('a', 1, 1);
					$h->b('li', 1, 1);	
				}
			$h->b('ul', 1, 1);
			$h->b('p', 0, 1, $sch::description, '{"class":"description"}');
				$h->e(1, substr($youtube->videoDescription, 0, 200));
			$h->b('p', 1, 1);
			$h->b('a', 0, 1, '', '{"href":"'.$link->article($this->id, JRequest::getVar('Itemid')).'", "class":"button"}');
				$h->b('button', 0, 1);
					$h->e(1, 'Watch Now');
				$h->b('button', 1, 1);				
			$h->b('a', 1, 1);
		$h->b('article', 1, 1);
	$h->b('figcaption', 1, 1);
$h->b('figure', 1, 1);
?>