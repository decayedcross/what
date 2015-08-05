<?php
$this->URL();
$socialURL = $this->baseURL.$this->joomlaArticleLink($this->catLeadArray->id, $this->catLeadArray->catid);

$img = json_decode($this->catLeadArray->images);
$metadata = json_decode($this->catLeadArray->metadata);

$this->article(0, 1, 'photo-container-lead');
	$this->figure(0, 1, 'top');
		$this->a(0, 1, $this->joomlaArticleLink($this->catLeadArray->id, $this->catLeadArray->catid));
			$this->image($img->image_intro, $img->image_intro_alt, 1);
		$this->a(1, 1);
	$this->figure(1, 1);
	$this->section(0, 1, 'bottom');
		$this->div(0, 1, 'left');
			$this->time(0, 1);
				$this->span(0, 1);
					$this->exe($this->string_formatDate('d', $this->catLeadArray->created), 1);
				$this->span(1, 1);
				$this->span(0, 1);
					$this->exe($this->string_formatDate('m.Y', $this->catLeadArray->created), 1);	
				$this->span(1, 1);
			$this->time(1, 1);
		$this->div(1, 1);
		$this->div(0, 1, 'right');
			$this->heading(0, 1, 2);
				$this->a(0, 1, $this->joomlaArticleLink($this->catLeadArray->id, $this->catLeadArray->catid));
					$this->exe($this->catLeadArray->title, 1);
				$this->a(1, 1);
			$this->heading(1, 1, 2);			
			$this->ul(0, 1);
				$this->li(0, 1);
					$this->exe('<div class="fb-share-button" data-href="'.$socialURL.'" data-layout="button_count">', 1);
					$this->div(1, 1);
				$this->li(1, 1);
				$this->li(0, 1);
					$this->exe('<div class="g-plus" data-action="share" data-href="'.$socialURL.'" data-annotation="bubble">', 1);
					$this->div(1, 1);
				$this->li(1, 1);
				$this->li(0, 1);
					$this->exe('<a href="https://twitter.com/share" class="twitter-share-button" data-url="'.$socialURL.'">', 1);
					$this->a(1, 1);
				$this->li(1, 1);
			$this->ul(1, 1);		
			$this->a(0, 1, $this->joomlaArticleLink($this->catLeadArray->id, $this->catLeadArray->catid));
				$this->button(0,1);
					$this->exe('View', 1);
				$this->button(1,1);
			$this->a(1, 1);
		$this->div(1, 1, 'article');
	$this->section(1, 1);
$this->article(1, 1);
?>

