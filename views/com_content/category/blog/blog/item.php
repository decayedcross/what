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

$h->b('article', 0, 1, $sch::blogPosting, $css::classContent);
	$h->b('figure', 0,1, $sch::imageObject);
		$h->b('img', 0, 1, $sch::contentUrl, '{"src":"'.$img->image_intro.'", "alt":"'.$img->image_intro_alt.'"}');
	$h->b('figure', 1,1);
	$h->b('section', 0, 1, '', '{"class":"inner"}');
		$h->b('div', 0, 1, '', $css::classLeft);
			$h->b('time', 0, 1, $sch::datePublished);
				$h->b('span', 0, 1);
					$h->e(1, $string->formatDate('d', $this->created));
				$h->b('span', 1, 1);
				$h->b('span', 0, 1);
					$h->e(1, $string->formatDate('m.Y', $this->created));				
				$h->b('span', 1, 1);				
			$h->b('time', 1, 1);
		$h->b('div', 1, 1);
		$h->b('div', 0, 1, '', $css::classRight);
			$h->b('h2', 0, 1, $sch::headline);
				$h->b('a', 0, 1, '', '{"href":"'.$link->article($this->id, $menuId).'"}');
					$h->e(1, $this->title);
				$h->b('a', 1, 1);
			$h->b('h2', 1, 1);
			$h->b('span', 0, 1, $sch::personAuthor);
				$h->b('a', 0, 1, $sch::url, '{"href":"'.$metadata->xreference.'"}');
					$h->b('span', 0, 1);
						$h->e(1, 'by ');
					$h->b('span', 1, 1);
					$h->b('span', 0, 1, $sch::name);
							$h->e(1, $metadata->author);
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
				foreach($metakey as $metakeyKey => $metakeyValue){
					$h->b('li', 0, 1);
						$h->b('a', 0, 1, '', '{"href":"https://tagboard.com/'.trim($metakeyValue).'/search"}');
							$h->e(1, ' #'.trim($metakeyValue));
						$h->b('a', 1, 1);
					$h->b('li', 1, 1);
				}
			$h->b('ul', 1, 1);
			$h->b('section', 0, 1, $sch::articleBody);
				$h->b('p', 0, 1);
					$h->e(1, $this->metadesc);
				$h->b('p', 1, 1);
			$h->b('section', 1, 1);
			$h->b('a', 0, 1, '', '{"href":"'.$link->article($this->id, $menuId).'"}');
				$h->b('button', 0, 1);
					$h->e(1, 'Read More');
				$h->b('button', 1, 1);
			$h->b('a', 1, 1);
		$h->b('div', 1, 1);
	$h->b('section', 1, 1);
$h->b('article', 1, 1);
?>