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
$menu = new menu();

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

if($resultsKey == 0){
	$h->b('section', 0, 1, $sch::blogPosting, '{"class":"row"}');
	$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8"}');
}
	$h->b('article', 0, 1, '', '{"class":"col col-base-12 col-xs-12 col-sm-6 col-md-6 col-lg-6", "data-mh":"blog-catergory-article"}');
			$h->b('a', 0, 1, '', '{"href":"'.$menu->articleLink.'"}');
				$h->b('figure', 0,1, $sch::imageObject, '{"class":"col col-xs-12"}');
					$h->b('img', 0, 1, $sch::contentUrl, '{"class":"col col-xs-12", "src":"'.$img->image_intro.'", "alt":"'.$img->image_intro_alt.'"}');
					$h->b('div', 0, 1, '', '{"style":"background-image: url('.$img->image_intro.')", "class":"div-img col col-base-12", "data-min-height":"40"}');
					$h->b('div', 1, 1);
				$h->b('figure', 1,1);
			$h->b('a', 1, 1);
			$h->b('section', 0, 1, '', '{"class":"col col-base-12"}');

				$h->b('div', 0, 1, '', '{"class":"col col-base-12 col-xs-12 col-sm-2 col-md-2 col-lg-2", "data-mh":"blog-catergory-col"}');
					$h->b('time', 0, 1, $sch::datePublished, '{"class":"col col-base-12"}');
						$h->b('div', 0, 1, '', '{"class":"col col-base-12"}');
							$h->b('span', 0, 1, '', '{"class":"col col-base-12"}');
								$h->e(1, $string->formatDate('d', $this->created));
							$h->b('span', 1, 1);
							$h->b('span', 0, 1, '', '{"class":"col col-base-12"}');
								$h->e(1, $string->formatDate('m.Y', $this->created));				
							$h->b('span', 1, 1);	
						$h->b('div', 1, 1);
					$h->b('time', 1, 1);
				$h->b('div', 1, 1);

				$h->b('div', 0, 1, '', '{"class":"col col-base-12 col-xs-12 col-sm-10 col-md-10 col-lg-10", "data-mh":"blog-catergory-col"}');
					$h->b('h2', 0, 1, $sch::headline, '{"data-mh":"blog-catergory-h2"}');
						$h->b('a', 0, 1, '', '{"href":"'.$menu->articleLink.'"}');
							$h->e(1, $this->title);
						$h->b('a', 1, 1);
					$h->b('h2', 1, 1);
					$h->b('div', 0, 1, $sch::personAuthor, '{"class":"author"}');
							$h->b('span', 0, 1);
								$h->e(1, 'by ');
							$h->b('span', 1, 1);
							$h->b('a', 0, 1, $sch::name, '{"href":"'.$metadata->xreference.'"}');
								$h->e(1, $metadata->author);
							$h->b('a', 1, 1);
					$h->b('div', 1, 1);
					$h->b('div', 0, 1, $sch::articleBody, '', '{"class":"col col-base-12"}');
						$h->b('p', 0, 1, '', '{"data-mh":"blog-caterogry-paragraph", "class":"col col-base-12 col-xs-12 col-sm-11 col-md-11 col-lg-11"}');
								$h->e(1, $this->metadesc);
						$h->b('p', 1, 1);
					$h->b('div', 1, 1);
					$h->b('a', 0, 1, '', '{"href":"'.$menu->articleLink.'", "class":"col col-base-12"}');
						$h->b('button', 0, 1);
							$h->e(1, 'Read More');
						$h->b('button', 1, 1);				
					$h->b('a', 1, 1);
				$h->b('div', 1, 1);	

			$h->b('section', 1, 1);
	$h->b('article', 1, 1);
if($resultsKey == $this->showLimit){
	$h->b('div', 1, 1);
	$h->b('section', 1, 1);
}
?>