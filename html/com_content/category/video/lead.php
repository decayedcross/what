<?php
$h = new ENChtml();
$css = new ENCcss();
$joomla = new ENCjoomla();
$string = new ENCstring();
$url = new ENCurl();
$sch = new ENCschema();

$joomla->joomlaCategoryContent('id', $this->catLeadArray->catid);
$joomla->joomlaMenuContent('alias', $joomla->catAlias);
$url->disect();
	
$text = $string->breakExplode($this->catLeadArray->text);
$img = json_decode($this->catLeadArray->images);
$metadata = json_decode($this->catLeadArray->metadata);
$metakey = $string->explode($this->catLeadArray->metakey, ',');

$social = array(
	'{"class":"fb-share-button", "data-href":"'.$url->currentURL.'", "data-layout":"button_count"}',
	'{"class":"g-plus", "data-href":"'.$url->currentURL.'", "data-action":"share", "data-annotation":"bubble"}',
	'{"class":"twitter-share-button", "data-url":"'.$url->currentURL.'"}'
);

$h->b('article', 0, 1, '', $css::classLeadContent);
	$h->b('figure', 0,1, $sch::imageObject);
		$h->b('img', 0, 1, $sch::contentUrl, '{"src":"'.$img->image_intro.'", "alt":"'.$img->image_intro_alt.'"}');
	$h->b('figure', 1,1);
	$h->b('section', 0, 1, '', '{"class":"inner"}');
		$h->b('div', 0, 1, '', $css::classLeft);
			$h->b('time', 0, 1);
				$h->b('span', 0, 1);
					$h->e(1, $string->formatDate('d', $this->catLeadArray->created));
				$h->b('span', 1, 1);
				$h->b('span', 0, 1);
					$h->e(1, $string->formatDate('m.Y', $this->catLeadArray->created));				
				$h->b('span', 1, 1);				
			$h->b('time', 1, 1);
		$h->b('div', 1, 1);
		$h->b('div', 0, 1, '', $css::classRight);
			$h->b('h2', 0, 1);
				$h->b('a', 0, 1, '', '{"href":"'.$joomla->linkArticle($this->catLeadArray->id, $joomla->menuId).'"}');
					$h->e(1, $this->catLeadArray->title);
				$h->b('a', 1, 1);
			$h->b('h2', 1, 1);
			$h->b('span', 0, 1);
				$h->b('a', 0, 1, '', '{"href":"'.$metadata->xreference.'"}');
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
					$h->e(1, $this->catLeadArray->metadesc);
				$h->b('p', 1, 1);
			$h->b('section', 1, 1);
			$h->b('a', 0, 1, '', '{"href":"'.$joomla->linkArticle($this->catLeadArray->id, $joomla->menuId).'"}');
				$h->b('button', 0, 1);
					$h->e(1, 'Watch Now');
				$h->b('button', 1, 1);				
			$h->b('a', 1, 1);
		$h->b('div', 1, 1);
	$h->b('section', 1, 1);
$h->b('article', 1, 1);
?>