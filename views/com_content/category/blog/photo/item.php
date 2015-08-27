<?php
use framework\html;
use framework\ENCschema;
use framework\css;
use framework\string;
use framework\flickr;
use joomla\link;
use joomla\menu;
use joomla\database;

$db = new database();
$h = new html();
$sch = new ENCschema();
$css = new css();
$string = new string();
$menu = new menu();
$flickr = new flickr('9ab3a30669a04b5d979e9cfd3237a110');

$menu->link(JRequest::getVar('Itemid'));
$menu->article($this->id, JRequest::getVar('Itemid'));
$text = $string->breakExplode($this->introtext);
$img = json_decode($this->images);
$metadata = json_decode($this->metadata);
$metakey = $string->explode($this->metakey, ',');

$social = array(
	'{"class":"fb-share-button", "data-href":"'.$menu->currentLink.'", "data-layout":"button_count"}',
	'{"class":"g-plus", "data-href":"'.$menu->currentLink.'", "data-action":"share", "data-annotation":"bubble"}',
	'{"class":"twitter-share-button", "data-url":"'.$menu->currentLink.'"}'
);

$flickr = new flickr('9ab3a30669a04b5d979e9cfd3237a110');

$flickr->photosgetInfo($this->introtext, 'n');

if($resultsKey == 0){;
$h->b('div', 0, 1, '', '{"class":"row"}');
$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8"}');
$h->b('figure', 0, 1, '', '{"id":"gallery"}');
}

$h->b('a', 0, 1, '', '{"href":"'.$menu->articleLink.'"}');
	$h->b('img', 0, 1, '', '{"src":"'.$flickr->imagePath.'", "alt":"'.$flickr->imageTitle.'"}');
$h->b('a', 1, 1);

if($resultsKey == $this->showLimit){
$h->b('figure', 1, 1);
$h->b('div', 1, 1);
$h->b('div', 1, 1);
}

/*$h->b('figure', 0, 1, $sch::imageImageObject);
	$h->b('a', 0, 1, $sch::contentUrl, '{"href":"'.$menu->articleLink.'", "title":"'.$this->title.'"}');
		$h->b('img', 0, 1, $sch::thumbnailUrl, '{"src":"'.$img->image_intro.'", "alt":"'.$img->image_intro_alt.'"}');
	$h->b('a', 1, 1);
	$h->b('figcaption', 0, 1 , $sch::caption);
		$h->b('ul', 0, 1, '', '{"class":"share"}');
			foreach($social as $socialKey => $socialValue){
				$h->b('li', 0, 1);
					$h->b('a', 0, 1, '', $socialValue);
					$h->b('a', 1, 1);
				$h->b('li', 1, 1);	
			}
		$h->b('ul', 1, 1);
		$h->b('p', 0, 1);
				$h->e(1, $this->metadesc);
		$h->b('p', 1, 1);
		$h->b('a', 0, 1, '', '{"href":"'.$menu->articleLink.'"}');
			$h->b('button', 0, 1);
				$h->e(1, 'View');
			$h->b('button', 1, 1);
		$h->b('a', 1, 1);
	$h->b('figcaption', 1, 1);
$h->b('figure', 1, 1);*/
?>