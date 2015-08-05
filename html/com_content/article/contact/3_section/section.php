<?php
$h = new enc_HTML();
$h->joomlaArticleContent(basename(__DIR__));

$h->form(0, 1);
	$h->fieldset(0, 1);
		$h->div(0, 1);
			$h->input('text', '', 1, 'Name', 'name');
			$h->input('email', '', 1, 'E-mail', 'email');
			$h->input('tel', '', 1, 'Phone', 'phone');
		$h->div(1, 1);
		$h->div(0, 1);
			$h->textarea(0, 1, 'message', 'Message');
			$h->textarea(1, 1);
		$h->div(1, 1);
	$h->fieldset(1, 1);
$h->form(1, 1);
?>