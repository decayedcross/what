<?php
$h = new enc_HTML();
$h->joomlaCategoryContent('id', $this->articleArray->catid);
$h->joomlaMenuContent('alias', $h->catAlias);
$h->URL();
$text = $h->articleTextExplode($this->articleArray->text);
$img = json_decode($this->articleArray->images);
$metadata = json_decode($this->articleArray->metadata);

$h->heading(0, 1, 1);
	$h->a(0, 1, 'index.php?option=com_content&view=category&layout=blog&id='.$h->catId.'&Itemid='.$h->menuId);
		$h->exe($h->catTitle, 1);
	$h->a(1, 1);
$h->heading(1, 1, 1);

$h->section(0,1, 'blog-article');
	$h->figure(0,1);
		$h->image($img->image_intro, $img->image_intro_alt, 1);
	$h->figure(1,1);
	$h->article(0,1);
		$h->div(0, 1, 'left');
			$h->time(0, 1);
				$h->span(0, 1);
					$h->exe($this->string_formatDate('d', $this->articleArray->created), 1);
				$h->span(1, 1);
				$h->span(0, 1);
					$h->exe($this->string_formatDate('m.Y', $this->articleArray->created), 1);				
				$h->span(1, 1);				
			$h->time(1, 1);
		$h->div(1, 1);
		$h->div(0, 1, 'right');
			$h->heading(0, 1, 2);				
				$h->exe($this->articleArray->title, 1);
			$h->heading(1, 1, 2);
			$h->span(0, 1);
				$h->exe('by ', 1);
				$h->a(0, 1, $metadata->xreference);				
					$h->exe($metadata->author, 1);
				$h->a(1, 1);
			$h->span(1, 1);
			$h->ul(0, 1);
				$h->li(0, 1);
					$h->exe('<div class="fb-share-button" data-href="'.$h->currentURL.'" data-layout="button_count">', 1);
					$h->div(1, 1);
				$h->li(1, 1);
				$h->li(0, 1);
					$h->exe('<div class="g-plus" data-action="share" data-href="'.$h->currentURL.'" data-annotation="bubble">', 1);
					$h->div(1, 1);
				$h->li(1, 1);
				$h->li(0, 1);
					$h->exe('<a href="https://twitter.com/share" class="twitter-share-button" data-url="'.$h->currentURL.'">', 1);
					$h->a(1, 1);
				$h->li(1, 1);
			$h->ul(1, 1);
			foreach($text as $key => $value){
				$h->paragraph(0,1);
					$h->exe($value, 1);
				$h->paragraph(1,1);
			}
		$h->div(1, 1);
		$h->section(0,1);
			$h->exe('<div class="fb-comments" data-href="'.$h->currentURL.'" data-numposts="5"></div>', 1);
			$h->div(1, 1);
		$h->section(1,1);
	$h->article(1.1);
$h->section(1,1);
?>