<?php
use joomla\article;
use joomla\link;
use joomla\menu;

use framework\youtube;
use framework\html;
use framework\css;
use framework\string;
use framework\ENCSchema;

$h = new html();
$sch = new ENCSchema();
$css = new css();
$string = new string();
$youtube = new youtube();
$article = new article();
$link = new link();
$menu = new menu();
$menu->link(JRequest::getVar('Itemid'));

$social = array(
	'{"class":"fb-share-button", "data-href":"'.$menu->currentLink.'", "data-layout":"button_count"}',
	'{"class":"g-plus", "data-href":"'.$menu->currentLink.'", "data-action":"share", "data-annotation":"bubble"}',
	'{"class":"twitter-share-button", "data-url":"'.$menu->currentLink.'"}'
);

$introtext = $article->introtext(JRequest::getVar('id'));
$youtube->snippet($introtext[0]['introtext']);
$youtube->contentDetails($introtext[0]['introtext']);
$youtube->player($introtext[0]['introtext']);

$h->b('section', 0, 1, '', '{"id":"'.$this->categoryAlias.'-'.JRequest::getVar('view').'"}');
	$h->b('h1', 0, 1);
		$h->e(1, $this->categoryTitle);
	$h->b('h1', 1, 1);
	$h->b('div', 0, 1, $sch::videoVideoObject, '{"id":"object"}');
		$h->b('meta', 0, 1, $sch::duration, '{"content":"'.$youtube->videoDuration.'"}');
		$h->b('meta', 0, 1, $sch::thumbnailUrl, '{"content":"'.$youtube->videoThumbnailDefaultUrl.'"}');
		$h->b('meta', 0, 1, $sch::contentURL, '{"content":"'.$youtube->videoId.'"}');
		$h->b('meta', 0, 1, $sch::embedURL, '{"content":"'.$youtube->videoId.'"}');
		$h->b('meta', 0, 1, $sch::uploadDate, '{"content":"'.$youtube->videoPublishedAt.'"}');
		$h->b('meta', 0, 1, $sch::width, '{"content":"'.$youtube->videoWidth.'"}');
		$h->b('meta', 0, 1, $sch::height, '{"content":"'.$youtube->videoHeight.'"}');
		$h->b('section', 0, 1, '', '{"id":"embed"}');
			$h->e(1, $youtube->videoEmbedHtml);
		$h->b('section', 1, 1);
		$h->b('section', 0, 1, '', '{"id":"content"}');
			$h->b('time', 0, 1, '', '{"id":"left"}');
				$h->b('div', 0 , 1, '', '{"id":"inner"}');
					$h->b('span', 0, 1);
						$h->e(1, $string->formatDate('d', $youtube->videoPublishedAt));
					$h->b('span', 1, 1);
					$h->b('span', 0, 1);
						$h->e(1, $string->formatDate('m.Y', $youtube->videoPublishedAt));				
					$h->b('span', 1, 1);
				$h->b('div', 1 , 1);
			$h->b('time', 1, 1);
			$h->b('article', 0, 1, '', '{"id":"right"}');
				$h->b('h2', 0, 1, $sch::name);
					$h->e(1, $youtube->videoTitle);
				$h->b('h2', 1, 1);
				$h->b('span', 0, 1, '', '{"id":"subscribe"}');
					$youtube->subscribeButton($youtube->channelId);
				$h->b('span', 1, 1);
				$h->b('ul', 0, 1, '', '{"id":"share"}');
					foreach($social as $socialKey => $socialValue){
						$h->b('li', 0, 1);
							$h->b('a', 0, 1, '', $socialValue);
							$h->b('a', 1, 1);
						$h->b('li', 1, 1);	
					}
				$h->b('ul', 1, 1);
				$h->b('ul', 0, 1, '', '{"id":"hashtags"}');
					foreach($youtube->videoTags as $metakeyKey => $metakeyValue){
						$h->b('li', 0, 1);
							$h->b('a', 0, 1, '', '{"href":"https://tagboard.com/'.trim($metakeyValue).'/search"}');
								$h->e(1, ' #'.trim($metakeyValue));
							$h->b('a', 1, 1);
						$h->b('li', 1, 1);
					}
				$h->b('ul', 1, 1);
				$h->b('p', 0, 1, $sch::description, '{"id":"description"}');
					$h->e(1, $youtube->videoDescription);
				$h->b('p', 1, 1);
			$h->b('article', 1, 1);
		$h->b('section', 1, 1);
	$h->b('div', 1, 1);
$h->b('section', 1, 1);

//echo '<div class="g-ytsubscribe" data-channelid="'.$youtube->channelId.'" data-layout="full" data-count="default"></div>';

//echo '<iframe src="https://www.youtube.com/embed/'.$youtube->videoId.'" frameborder="0" allowfullscreen></iframe>';

//echo $youtube->videoTitle;

/*$h->b('section', 0, 1, '', '{"id":"'.$this->categoryAlias.'"}');
$h->b('article', 0, 1, '');
	$h->b('figure', 0,1, $sch::imageObject);
		$h->b('img', 0, 1, $sch::contentUrl, '{"src":"'.$youtube->videoThumbnailHighUrl.'", "alt":"'.$youtube->videoThumbnailAlt.'"}');
	$h->b('figure', 1,1);
	$h->b('section', 0, 1, '', '{"class":"inner"}');
		$h->b('div', 0, 1, '', $css::classLeft);
			$h->b('time', 0, 1);
				$h->b('span', 0, 1);
					$h->e(1, $string->formatDate('d', $youtube->videoPublishedAt));
				$h->b('span', 1, 1);
				$h->b('span', 0, 1);
					$h->e(1, $string->formatDate('m.Y', $youtube->videoPublishedAt));				
				$h->b('span', 1, 1);				
			$h->b('time', 1, 1);
		$h->b('div', 1, 1);
		$h->b('div', 0, 1, '', $css::classRight);
			$h->b('h2', 0, 1);
				$h->e(1, $youtube->videoTitle);
			$h->b('h2', 1, 1);
			$h->b('span', 0, 1);
				$h->b('a', 0, 1, $sch::url, '{"href":"'.YOUTUBE_CHANNEL.$youtube->channelId.'"}');
					$h->b('span', 0, 1);
						$h->e(1, 'by ');
					$h->b('span', 1, 1);
					$h->b('span', 0, 1);
							$h->e(1, $youtube->channelTitle);
					$h->b('span', 1, 1);
				$h->b('a', 1, 1);
			$h->b('span', 1, 1);
			$h->b('ul', 0, 1, '', '{"class":"socialshares"}');
				foreach($social as $socialKey => $socialValue){
					$h->b('li', 0, 1);
						$h->b('a', 0, 1, '', $socialValue);
						$h->b('a', 1, 1);
					$h->b('li', 1, 1);	
				}
			$h->b('ul', 1, 1);
			$h->b('ul', 0, 1, '', '{"class":"hashtags"}');
				foreach($youtube->videoTags as $metakeyKey => $metakeyValue){
					$h->b('li', 0, 1);
						$h->b('a', 0, 1, '', '{"href":"https://tagboard.com/'.trim($metakeyValue).'/search"}');
							$h->e(1, ' #'.trim($metakeyValue));
						$h->b('a', 1, 1);
					$h->b('li', 1, 1);
				}
			$h->b('ul', 1, 1);
			$h->b('section', 0, 1);
				$h->b('p', 0, 1);
					$h->e(1, $youtube->videoDescription);
				$h->b('p', 1, 1);
			$h->b('section', 1, 1);
			$h->b('a', 0, 1, '', '{"href":"'.$link->article($content[0]['id'], JRequest::getVar('Itemid')).'"}');
				$h->b('button', 0, 1);
					$h->e(1, 'Watch Now');
				$h->b('button', 1, 1);				
			$h->b('a', 1, 1);
		$h->b('div', 1, 1);
	$h->b('section', 1, 1);
$h->b('article', 1, 1);
$h->b('section', 1, 1);*/
?>