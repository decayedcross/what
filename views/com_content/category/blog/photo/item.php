


<?php
use framework\html;
use framework\ENCschema;
use framework\css;
use framework\string;

use joomla\link;
use joomla\menu;

$h = new html();
$sch = new ENCschema();
$css = new css();
$string = new string();

$link = new link();
$menu = new menu();

$menuId = JRequest::getVar('Itemid');
$text = $string->breakExplode($this->introtext);
$img = json_decode($this->images);
$metadata = json_decode($this->metadata);
$metakey = $string->explode($this->metakey, ',');
$menu->link($menuId);

$social = array(
	'{"class":"fb-share-button", "data-href":"'.$menu->currentLink.'", "data-layout":"button_count"}',
	'{"class":"g-plus", "data-href":"'.$menu->currentLink.'", "data-action":"share", "data-annotation":"bubble"}',
	'{"class":"twitter-share-button", "data-url":"'.$menu->currentLink.'"}'
);

$h->b('figure', 0, 1, $sch::imageImageObject);
	$h->b('a', 0, 1, $sch::contentUrl, '{"href":"'.$link->article($this->id, $menuId).'", "title":"'.$this->title.'"}');
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
		$h->b('a', 0, 1, '', '{"href":"'.$link->article($this->id, $menuId).'"}');
			$h->b('button', 0, 1);
				$h->e(1, 'View');
			$h->b('button', 1, 1);
		$h->b('a', 1, 1);
	$h->b('figcaption', 1, 1);
$h->b('figure', 1, 1);
?>