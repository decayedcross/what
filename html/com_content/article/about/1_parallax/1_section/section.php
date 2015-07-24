<?php
$h = new enc_HTML();
$h->joomlaArticleContent(basename(__DIR__));
$data = array(1, 2, 3, 4);

$h->heading(0, 1, 1);
	$h->exe($h->text[0], 1);
$h->heading(1, 1, 1);
$h->figure(0, 1);
	$h->image($h->text[1], $h->text[2], 1);
$h->figure(1, 1);
$h->paragraph(0, 1);
	$h->exe($h->text[3], 1);
$h->paragraph(1, 1);
$h->paragraph(0, 1);
	$h->exe($h->text[4], 1);
$h->paragraph(1, 1);
$h->a(0, 1, $h->text[5]);
	$h->button(0, 1);
		$h->exe($h->text[6], 1);
	$h->button(1, 1);
$h->a(1,1);
?>