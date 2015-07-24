<?php
$h = new enc_HTML();
$h->joomlaArticleContent(basename(__DIR__));

$h->hgroup(0, 1);
	$h->heading(0, 1, 1);
		$h->exe($h->text[1], 1);
	$h->heading(1, 1, 1);
	$h->heading(0, 1, 2);
		$h->exe($h->text[2], 1);
	$h->heading(1, 1, 2);
$h->hgroup(1, 1);
?>