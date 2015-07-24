<?php
$d = $this->catIntroArray;

$img = json_decode($d->images);

$this->figure(0, 1, 'video-container');
	$this->a(0, 1, $this->joomlaArticleLink($d->id, $d->catid));
		$this->image($img->image_intro, $img->image_intro_alt, 1);
	$this->a(1, 1);
	$this->div(0, 1, 'left');
		$this->time(0, 1);
			$this->span(0, 1);
				$this->exe($this->string_formatDate('d', $d->created), 1);
				$this->span(1, 1);
				$this->span(0, 1);
				$this->exe($this->string_formatDate('m.Y', $d->created), 1);				
			$this->span(1, 1);				
		$this->time(1, 1);
	$this->div(1, 1);
	$this->div(0, 1, 'right');
		$this->heading(0, 1, 1);
			$this->a(0, 1, $this->joomlaArticleLink($d->id, $d->catid));
				$this->exe($d->title, 1);
			$this->a(1, 1);
		$this->heading(1, 1, 1);
		$this->figcaption(0, 1);
			$this->exe($d->metadesc, 1);
		$this->figcaption(1, 1);
		$this->a(0, 1, $this->joomlaArticleLink($d->id, $d->catid));
				$this->button(0,1);
					$this->exe('Watch Now', 1);				
				$this->button(1,1);
			$this->a(1, 1);
	$this->div(1, 1);
$this->figure(1, 1);
?>