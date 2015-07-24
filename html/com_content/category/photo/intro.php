<?php
$d = $this->catIntroArray;
$img = json_decode($d->images);

$this->figure(0, 1);
	$this->a(0, 1, $this->joomlaArticleLink($d->id, $d->catid));
		$this->image($img->image_intro, $img->image_intro_alt, 1);
	$this->a(1, 1);
	$this->figcaption(0, 1);
		$this->a(0, 1, $this->joomlaArticleLink($d->id, $d->catid));
			$this->exe($d->title, 1);
		$this->a(1, 1);
	$this->figcaption(1, 1);
$this->figure(1, 1);
?>