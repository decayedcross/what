<?php
use framework\ENCschema;
use framework\string;
use framework\css;
use framework\html;
use joomla\article;
use joomla\menu;

$string = new string();
$sch = new ENCschema();
$article = new article();
$menu = new menu();
$css = new css();
$h = new html();

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

$h->b('main', 0, 1, $sch::blog, '{"id":"'.$this->categoryAlias.'-'.JRequest::getVar('view').'", "class":"row"}');
	$h->b('article', 0, 1, $sch::blogPosting, '{"id":"article", "class":"col col-center col-base-8"}');

		$h->b('figure', 0,1, $sch::imageObject, '{"id":"figure", "class":"col col-base-12"}');
			$h->b('img', 0, 1, $sch::contentUrl, '{"class":"display-none", "src":"'.$img->image_fulltext.'", "alt":"'.$img->image_fulltext_alt.'"}');
			$h->b('div', 0, 1, '', '{"style":"background-image: url('.$img->image_fulltext.')", "class":"img col col-base-12", "data-min-height":"40"}');
			$h->b('div', 1, 1);
		$h->b('figure', 1,1);

		$h->b('section', 0, 1, '', '{"class":"row"}');

			$h->b('div', 0, 1, '', '{"class":"col col-base-12 col-xs-12 col-sm-2 col-md-2 col-lg-2", "data-mh":"blog-article-col"}');
				$h->b('div', 0, 1, '', '{"class":"vertical"}');
					$h->b('div', 0, 1, '', '{"class":"col col-center col-base-8"}');
						$h->b('time', 0, 1, $sch::datePublished, '{"class":"col col-base-12"}');
								$h->b('span', 0, 1, '', '{"class":"col col-base-12"}');
									$h->e(1, $string->formatDate('d', $article->created));
								$h->b('span', 1, 1);
								$h->b('span', 0, 1, '', '{"class":"col col-base-12"}');
									$h->e(1, $string->formatDate('m.Y', $article->created));	
								$h->b('span', 1, 1);
						$h->b('time', 1, 1);
						$h->b('ul', 0, 1, '', '{"class":"col col-center col-base-8 share"}');
							foreach($social as $socialKey => $socialValue){
								$h->b('li', 0, 1, '', '{"class":"col-xs-4 col-sm-12 col-md-12 col-lg-12"}');
									$h->b('a', 0, 1, '', $socialValue);
									$h->b('a', 1, 1);
								$h->b('li', 1, 1);	
							}
						$h->b('ul', 1, 1);
					$h->b('div', 1, 1);
				$h->b('div', 1, 1);
			$h->b('div', 1, 1);

			$h->b('div', 0, 1, '', '{"id":"right", "class":"col col-base-12 col-xs-12 col-sm-10 col-md-10 col-lg-10", "data-mh":"blog-article-col"}');
				$h->b('h2', 0, 1, $sch::headline, '{"id":"h2"}');
					$h->e(1, $article->title);
				$h->b('h2', 1, 1);
				$h->b('div', 0, 1, $sch::personAuthor, '{"class":"author"}');
						$h->b('span', 0, 1);
							$h->e(1, 'by ');
						$h->b('span', 1, 1);
						$h->b('a', 0, 1, $sch::name, '{"href":"'.$metadata->xreference.'"}');
							$h->e(1, $metadata->author);
						$h->b('a', 1, 1);
				$h->b('div', 1, 1);
				$h->b('div', 0, 1, $sch::articleBody, '{"id":"paragraphs"}');
					foreach($text as $textKey => $textValue){
						$h->b('p', 0, 1, '', '{"class":"col-xs-12"}');
							$h->e(1, $textValue);
						$h->b('p', 1, 1);
					}
				$h->b('div', 1, 1);
				$h->b('ul', 0, 1, '', '{"class":"col col-base-12 tags"}');
					foreach($metakey as $metakeyKey => $metakeyValue){
						$h->b('li', 0, 1, '', '{"class":"col col-base-6 col-xs-6 col-sm-2 col-md-2 col-lg-2"}');
							$h->b('a', 0, 1, '', '{"href":"https://tagboard.com/'.trim($metakeyValue).'/search"}');
								$h->e(1, ' #'.trim($metakeyValue));
							$h->b('a', 1, 1);
						$h->b('li', 1, 1);
					}
				$h->b('ul', 1, 1);
				$h->b('section', 0, 1, '', '{"class":"col col-center col-base-6"}');
					$h->b('div', 0, 1, '', '{"class":"fb-comments", "data-href":"'.$menu->currentLink.'", "data-numposts":"5"}');
					$h->b('div', 1, 1);
				$h->b('section', 1, 1);
			$h->b('div', 1, 1);

		$h->b('section', 1, 1);
	$h->b('article', 1, 1);
$h->b('main', 1, 1);

/*$article->deploy('section', 0, $this->categoryAlias, JRequest::getVar('view'), $sch::blog);
	$h->b('div', 0, 1, '{"class":"horz-center"}');
		$h->b('div', 0, 1, '{"class":"vert-center"}');
			$h->b('h1', 0, 1);
				$h->b('a', 0, 1, '', '{"href":"'.$menu->categoryBlog.'"}');
					$h->e(1, $this->categoryTitle);
				$h->b('a', 1, 1);
			$h->b('h1', 1, 1);
			$h->b('article', 0, 1, $sch::blogPosting, $css::classContent);
				$h->b('figure', 0,1, $sch::imageObject);
					$h->b('img', 0, 1, $sch::contentUrl, '{"src":"'.$img->image_intro.'", "alt":"'.$img->image_intro_alt.'"}');
					$h->b('div', 0, 1, '', '{"style":"background-image: url('.$img->image_intro.')", "class":"object-div-image"}');
					$h->b('div', 1, 1);
				$h->b('figure', 1,1);
				$h->b('section', 0, 1, '', '{"class":"inner"}');
					$h->b('div', 0, 1, '', $css::classLeft);
						$h->b('time', 0, 1, $sch::datePublished);
							$h->b('span', 0, 1);
								$h->e(1, $string->formatDate('d', $article->created));
							$h->b('span', 1, 1);
							$h->b('span', 0, 1);
								$h->e(1, $string->formatDate('m.Y', $article->created));				
							$h->b('span', 1, 1);				
						$h->b('time', 1, 1);
					$h->b('div', 1, 1);
					$h->b('div', 0, 1, '', $css::classRight);
						$h->b('h2', 0, 1, $sch::headline);
							$h->e(1, $article->title);
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
							foreach($text as $textKey => $textValue){
								$h->b('p', 0, 1);
									$h->e(1, $textValue);
								$h->b('p', 1, 1);
							}
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