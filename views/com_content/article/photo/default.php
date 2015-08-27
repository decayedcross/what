<?php
use framework\ENCschema;
use framework\string;
use framework\css;
use framework\html;
use framework\flickr;
use joomla\article;
use joomla\menu;
use joomla\database;

$db = new database();
$string = new string();
$sch = new ENCschema();
$article = new article();
$menu = new menu();
$css = new css();
$h = new html();
$flickr = new flickr('9ab3a30669a04b5d979e9cfd3237a110');

$article->content(JRequest::getVar('id'));
$menu->link(JRequest::getVar('Itemid'));
$menu->categoryBlog($article->catid, JRequest::getVar('Itemid'));

$text = $string->breakExplode($article->introtext);
$img = json_decode($article->images);
$metadata = json_decode($article->metadata);
$metakey = $string->explode($article->metakey, ',');

$social = array(
	'{"class":"fb-share-button", "data-href":"'.$menu->currentLink.'", "data-layout":"button_count"}',
	'{"class":"g-plus", "data-href":"'.$menu->currentLink.'", "data-action":"share", "data-annotation":"bubble"}',
	'{"class":"twitter-share-button", "data-url":"'.$menu->currentLink.'"}'
);

$flickr->photosgetInfo($article->introtext, 'b');

$article->deploy('main', 0, $this->categoryAlias, JRequest::getVar('view'), '');
	$h->b('figure', 0, 1, '', '{"class":"object"}');
		$h->b('div', 0, 1, '', '{"class":"image-container"}');
			$h->b('img', 0, 1, '', '{"src":"'.$flickr->imagePath.'", "alt":"'.$flickr->imageTitle.'", "class":"image"}');
		$h->b('div', 1, 1);
		$h->b('div', 0, 1, '', '{"class":"bottom"}');
			$h->b('div', 0, 1, '', '{"class":"left"}');
				$h->b('a', 0, 1, '', '{"href":"'.$menu->categoryBlog.'"}');
					$h->e(1, 'Back to photos');
				$h->b('a', 1, 1);
			$h->b('div', 1, 1);
			$h->b('div', 0, 1, '', '{"class":"right"}');
				$h->b('ul', 0, 1, '', '{"class":"share"}');
					foreach($social as $socialKey => $socialValue){
						$h->b('li', 0, 1);
							$h->b('a', 0, 1, '', $socialValue);
							$h->b('a', 1, 1);
						$h->b('li', 1, 1);	
					}
				$h->b('ul', 1, 1);
			$h->b('div', 1, 1);
		$h->b('div', 1, 1);
		$h->b('figcaption', 0, 1, '', '{"class":"content"}');
			$h->b('div', 0, 1, '', '{"class":"fluid-container"}');
				$h->b('div', 0, 1, '', '{"class":"left enc-match-height"}');
					$h->b('div', 0, 1, '', '{"class":"vertical"}');
						$h->b('img', 0, 1, '', '{"src":"https://c2.staticflickr.com/'.$flickr->iconfarm.'/'.$flickr->iconserver.'/buddyicons/'.$flickr->nsid.'_l.jpg", "alt":"'.$flickr->imageTitle.'"}');
						$h->b('a', 0, 1, '', '{"href":"https://www.flickr.com/photos/'.$flickr->nsid.'", "class":"author"}');
							if($flickr->realname){
								$h->e(1, $flickr->realname);
							}else{
								$h->e(1, $flickr->username);
							}
						$h->b('a', 1, 1);
					$h->b('div', 1, 1);
				$h->b('div', 1, 1);
				$h->b('div', 0, 1, '', '{"class":"right enc-match-height"}');
					$h->b('div', 0, 1, '', '{"class":"vertical"}');
						$h->b('h1', 0, 1, '', '{"class":"title"}');
							$h->e(1, $flickr->imageTitle);
						$h->b('h1', 1, 1);
						$h->b('p', 0, 1, '', '{"class":"description"}');
							$h->e(1, $flickr->imageDescription);
						$h->b('p', 1, 1);
					$h->b('div', 1, 1);
				$h->b('div', 1, 1);
				$h->b('section', 0, 1, '', '{"class":"comments"}');
					$h->b('div', 0, 1, '', '{"class":"fb-comments", "data-href":"'.$menu->currentLink.'", "data-numposts":"5"}');
					$h->b('div', 1, 1);
				$h->b('section', 1, 1);
			$h->b('div', 1, 1);
		$h->b('figcaption', 1, 1);
	$h->b('figure', 1, 1);
$article->deploy('main', 1);

/*$article->deploy('section', 0, $this->categoryAlias, JRequest::getVar('view'), $sch::imageGallery);
	$h->b('article', 0, 1, $sch::imageImageObject, $css::classContent);
		$h->b('figure', 0,1, $sch::imageObject);
			$h->b('img', 0, 1, $sch::contentUrl, '{"src":"'.$flickr->imagePath.'", "alt":"'.$flickr->imageTitle.'"}');
		$h->b('figure', 1,1);
		$h->b('section', 0, 1, '', '{"class":"inner"}');
			$h->b('div', 0, 1, '', $css::classLeft);
				$h->b('time', 0, 1, $sch::datePublished);
					$h->b('span', 0, 1);
						$h->e(1, $string->formatGmDate('d', $flickr->posted));
					$h->b('span', 1, 1);
					$h->b('span', 0, 1);
						$h->e(1, $string->formatGmDate('m.Y', $flickr->posted));				
					$h->b('span', 1, 1);				
				$h->b('time', 1, 1);
			$h->b('div', 1, 1);
			$h->b('div', 0, 1, '', $css::classRight);
				$h->b('h2', 0, 1, $sch::headline);
					$h->e(1, $flickr->imageTitle);
				$h->b('h2', 1, 1);
				$h->b('span', 0, 1, $sch::personAuthor);
					$h->b('a', 0, 1, $sch::url, '{"href":"https://www.flickr.com/photos/'.$flickr->nsid.'"}');
						$h->b('span', 0, 1);
							$h->e(1, 'by ');
						$h->b('span', 1, 1);
						$h->b('span', 0, 1, $sch::name);
							if($flickr->realname <> ''){
								$h->e(1, $flickr->realname);
							}else{
								$h->e(1, $flickr->username);
							}
						$h->b('span', 1, 1);
					$h->b('a', 1, 1);
				$h->b('span', 1, 1);
				$h->b('ul', 0, 1, '', '{"class":"share"}');
					foreach($social as $socialKey => $socialValue){
						$h->b('li', 0, 1);
							$h->b('a', 0, 1, '', $socialValue);
							$h->b('a', 1, 1);
						$h->b('li', 1, 1);	
					}
				$h->b('ul', 1, 1);
				$h->b('ul', 0, 1, '', '{"class":"hashtags"}');
					foreach($flickr->imageTags as $metakeyKey => $metakeyValue){
						$h->b('li', 0, 1);
							$h->b('a', 0, 1, '', '{"href":"https://www.flickr.com/search/?tags='.trim($metakeyValue["_content"]).'"}');
								$h->e(1, ' #'.trim($metakeyValue["_content"]));
							$h->b('a', 1, 1);
						$h->b('li', 1, 1);
					}
				$h->b('ul', 1, 1);
				$h->b('section', 0, 1, $sch::articleBody);	
					$h->b('p', 0, 1);
						$h->e(1, $flickr->imageDescription);
					$h->b('p', 1, 1);
				$h->b('section', 1, 1);
			$h->b('div', 1, 1);
		$h->b('section', 1, 1);
		$h->b('section', 0, 1, '', '{"class":"comments"}');
			$h->b('div', 0, 1, '', '{"class":"fb-comments", "data-href":"'.$menu->currentLink.'", "data-numposts":"5"}');
			$h->b('div', 1, 1);
		$h->b('section', 1, 1);
	$h->b('article', 1, 1);
$article->deploy('section', 1);*/
?>