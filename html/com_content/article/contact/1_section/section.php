<?php
$h = new enc_HTML();
$h->joomlaArticleContent(basename(__DIR__));
$data = array(1);

$h->heading(0, 1, 1);
	$h->exe($h->text[0], 1);
$h->heading(1, 1, 1);
?>