<?php
use framework\ENCschema;
use framework\html;
use framework\string;
use framework\css;
use joomla\menu;
use joomla\link;

$menu = new menu();
$h = new html();
$string = new string();
$css = new css();
$sch = new ENCschema();
$link = new link();

$menu->link(JRequest::getVar('Itemid'));

$text = $string->breakExplode($val['introtext']);
$img = json_decode($val['images']);
$metadata = json_decode($val['metadata']);
$metakey = $string->explode($val['metakey'], ',');

$social = array(
	'{"class":"fb-share-button", "data-href":"'.$menu->currentLink.'", "data-layout":"button_count"}',
	'{"class":"g-plus", "data-href":"'.$menu->currentLink.'", "data-action":"share", "data-annotation":"bubble"}',
	'{"class":"twitter-share-button", "data-url":"'.$menu->currentLink.'"}'
);

$h->b('article', 0, 1, '', $css::classIntroContent);
	$h->b('figure', 0,1, $sch::imageObject);
		$h->b('img', 0, 1, $sch::contentUrl, '{"src":"'.$img->image_intro.'", "alt":"'.$img->image_intro_alt.'"}');
	$h->b('figure', 1,1);
	$h->b('section', 0, 1, '', '{"class":"inner"}');
		$h->b('div', 0, 1, '', $css::classLeft);
			$h->b('time', 0, 1);
				$h->b('span', 0, 1);
					$h->e(1, $string->formatDate('d', $val['created']));
				$h->b('span', 1, 1);
				$h->b('span', 0, 1);
					$h->e(1, $string->formatDate('m.Y', $val['created']));				
				$h->b('span', 1, 1);				
			$h->b('time', 1, 1);
		$h->b('div', 1, 1);
		$h->b('div', 0, 1, '', $css::classRight);
			$h->b('h2', 0, 1);
				$h->e(1, $val['title']);
			$h->b('h2', 1, 1);
			$h->b('span', 0, 1);
				$h->b('a', 0, 1, $sch::url, '{"href":"'.$metadata->xreference.'"}');
					$h->b('span', 0, 1);
						$h->e(1, 'by ');
					$h->b('span', 1, 1);
					$h->b('span', 0, 1);
							$h->e(1, $metadata->author);
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
				foreach($metakey as $metakeyKey => $metakeyValue){
					$h->b('li', 0, 1);
						$h->b('a', 0, 1, '', '{"href":"https://tagboard.com/'.trim($metakeyValue).'/search"}');
							$h->e(1, ' #'.trim($metakeyValue));
						$h->b('a', 1, 1);
					$h->b('li', 1, 1);
				}
			$h->b('ul', 1, 1);
			$h->b('section', 0, 1);
				$h->b('p', 0, 1);
					$h->e(1, $val['metadesc']);
				$h->b('p', 1, 1);
			$h->b('section', 1, 1);
			$h->b('a', 0, 1, '', '{"href":"'.$link->article(JRequest::getVar('id'), JRequest::getVar('Itemid')).'"}');
				$h->b('button', 0, 1);
					$h->e(1, 'Watch Now');
				$h->b('button', 1, 1);				
			$h->b('a', 1, 1);
		$h->b('div', 1, 1);
	$h->b('section', 1, 1);
$h->b('article', 1, 1);
?>