<?php
use joomla\article;
use joomla\menu;

use framework\youtube;
use framework\html;
use framework\css;
use framework\string;
use framework\ENCschema;

$h = new html();
$sch = new ENCschema();
$css = new css();
$string = new string();
$youtube = new youtube();
$article = new article();
$menu = new menu();

$article->content(JRequest::getVar('id'));
$menu->link(JRequest::getVar('Itemid'));


$social = array(
	'{"class":"fb-share-button", "data-href":"'.$menu->currentLink.'", "data-layout":"button_count"}',
	'{"class":"g-plus", "data-href":"'.$menu->currentLink.'", "data-action":"share", "data-annotation":"bubble"}',
	'{"class":"twitter-share-button", "data-url":"'.$menu->currentLink.'"}'
);

$article->introtext(JRequest::getVar('id'));
$youtube->snippet($article->introtext);
$youtube->contentDetails($article->introtext);
$youtube->player($article->introtext);

$h->b('section', 0, 1, '', '{"id":"'.$this->categoryAlias.'-'.JRequest::getVar('view').'", "class":"section row", "data-min-height":"50"}');
	$h->b('div', 0, 1, '', '{"class":"vertical"}');
		$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8"}');
			$h->b('h1', 0, 1, '{"class":"col col-base-12"}');
				$h->e(1, $this->categoryTitle);
			$h->b('h1', 1, 1);
			$h->b('div', 0, 1, $sch::videoVideoObject, '{"id":"object", "class":"col col-base-12"}');
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
				$h->b('section', 0, 1, '', '{"id":"content", "class":"col col-base-12"}');
					$h->b('time', 0, 1, '', '{"id":"left", "class":"col col-xs-12 col-sm-3"}');
						$h->b('div', 0 , 1, '', '{"id":"inner", "class":"col col-center col-base-6"}');
							$h->b('span', 0, 1);
								$h->e(1, $string->formatDate('d', $youtube->videoPublishedAt));
							$h->b('span', 1, 1);
							$h->b('span', 0, 1);
								$h->e(1, $string->formatDate('m.Y', $youtube->videoPublishedAt));				
							$h->b('span', 1, 1);					
						$h->b('div', 1 , 1);
						$h->b('div', 0 , 1, '{"id":"share-div", "class":"col col-center col-base-6"}');
							$h->b('ul', 0, 1, '', '{"id":"share", "class":"col col-xs-4 col-sm-12 col-md-12 col-lg-12"}');
								foreach($social as $socialKey => $socialValue){
									$h->b('li', 0, 1);
										$h->b('a', 0, 1, '', $socialValue);
										$h->b('a', 1, 1);
									$h->b('li', 1, 1);	
								}
							$h->b('ul', 1, 1);					
						$h->b('div', 1 , 1);
					$h->b('time', 1, 1);
					$h->b('article', 0, 1, '', '{"id":"right", "class":"col col-xs-12 col-sm-9"}');
						$h->b('h2', 0, 1, $sch::name, '{"class":"col col-xs-12 col-sm-11"}');
							$h->e(1, $youtube->videoTitle);
						$h->b('h2', 1, 1);
						$h->b('span', 0, 1, '', '{"id":"subscribe", "class":"col col-xs-12 col-sm-11"}');
							$youtube->subscribeButton($youtube->channelId);
						$h->b('span', 1, 1);				
						$h->b('a', 1, 1);				
						$h->b('p', 0, 1, $sch::description, '{"id":"description", "class":"col col-xs-12 col-sm-11"}');
							$h->e(1, $youtube->videoDescription);
						$h->b('p', 1, 1);
						$h->b('ul', 0, 1, '', '{"id":"hashtags", "class":"col col-xs-12 col-sm-11"}');
							foreach($youtube->videoTags as $metakeyKey => $metakeyValue){
								$h->b('li', 0, 1);
									$h->b('a', 0, 1, '', '{"href":"https://tagboard.com/'.trim($metakeyValue).'/search"}');
										$h->e(1, ' #'.trim($metakeyValue));
									$h->b('a', 1, 1);
								$h->b('li', 1, 1);
							}
						$h->b('ul', 1, 1);
					$h->b('article', 1, 1);
				$h->b('section', 1, 1);
				$h->b('section', 0, 1, '', '{"class":"comments row"}');
					$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8"}');
						$h->b('div', 0, 1, '', '{"class":"fb-comments col-center col-base-12", "data-href":"'.$menu->currentLink.'", "data-numposts":"5"}');
						$h->b('div', 1, 1);
					$h->b('div', 1, 1);
				$h->b('section', 1, 1);
			$h->b('div', 1, 1);
		$h->b('div', 1, 1);
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