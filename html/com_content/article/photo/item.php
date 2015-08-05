<?php
$h = new ENChtml();
$css = new ENCcss();
$joomla = new ENCjoomla();
$string = new ENCstring();
$url = new ENCurl();
$sch = new ENCschema();

$joomla->joomlaCategoryContent('id', $this->articleArray->catid);
$joomla->joomlaMenuContent('alias', $joomla->catAlias);
$url->disect();

$text = $string->breakExplode($this->articleArray->text);
$img = json_decode($this->articleArray->images);
$metadata = json_decode($this->articleArray->metadata);
$metakey = $string->explode($this->articleArray->metakey, ',');

$social = array(
	'{"class":"fb-share-button", "data-href":"'.$url->currentURL.'", "data-layout":"button_count"}',
	'{"class":"g-plus", "data-href":"'.$url->currentURL.'", "data-action":"share", "data-annotation":"bubble"}',
	'{"class":"twitter-share-button", "data-url":"'.$url->currentURL.'"}'
);

$h->b('section', 0, 1, $sch::blog, '{"id":"'.$joomla->catAlias.'"}');
	$h->b('h1', 0, 1);
		$h->b('a', 0, 1, '', '{"href":"'.$joomla->linkCategoryBlog($joomla->catId, $joomla->menuId).'"}');
			$h->e(1, $joomla->catTitle);
		$h->b('a', 1, 1);
	$h->b('h1', 1, 1);
	$h->b('article', 0, 1, $sch::blogPosting, '{"class":"content-single"}');
		$h->b('figure', 0,1, $sch::imageObject);
			$h->b('img', 0, 1, $sch::contentUrl, '{"src":"'.$img->image_fulltext.'", "alt":"'.$img->image_fulltext_alt.'"}');
		$h->b('figure', 1,1);
		$h->b('section', 0, 1, '', '{"class":"inner"}');
			$h->b('div', 0, 1, '', $css::classLeft);
				$h->b('time', 0, 1, $sch::datePublished);
					$h->b('span', 0, 1);
						$h->e(1, $string->formatDate('d', $this->articleArray->created));
					$h->b('span', 1, 1);
					$h->b('span', 0, 1);
						$h->e(1, $string->formatDate('m.Y', $this->articleArray->created));				
					$h->b('span', 1, 1);				
				$h->b('time', 1, 1);
			$h->b('div', 1, 1);
			$h->b('div', 0, 1, '', $css::classRight);
				$h->b('h2', 0, 1, $sch::headline);
					$h->e(1, $this->articleArray->title);
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
				$h->b('ul', 0, 1, '', '{"class":"socialshares"}');
					foreach($social as $socialKey => $socialValue){
						$h->b('li', 0, 1);
							$h->b('a', 0, 1, '', $socialValue);
							$h->b('a', 1, 1);
						$h->b('li', 1, 1);	
					}
				$h->b('ul', 1, 1);
				$h->b('section', 0, 1, $sch::articleBody);
					foreach($text as $textKey => $textValue){
						$h->b('p', 0, 1);
							$h->e(1, $textValue);
						$h->b('p', 1, 1);
					}
				$h->b('section', 1, 1);
			$h->b('div', 1, 1);
		$h->b('section', 1, 1);
		$h->b('section', 0, 1, '', '{"class":"comments"}');
			$h->b('div', 0, 1, '', '{"class":"fb-comments", "data-href":"'.$url->currentURL.'", "data-numposts":"5"}');
			$h->b('div', 1, 1);
		$h->b('section', 1, 1);
	$h->b('article', 1, 1);
$h->b('section', 1, 1);
?>