<?php
$h = new enc_HTML();
$h->joomlaArticleContent(basename(__DIR__));
$data = array(1, 2, 3);

$h->heading(0, 1, 1);
	$h->exe($h->text[0], 1);
$h->heading(1, 1, 1);

$h->div(0, 1, 'slider');
	$h->ul(0, 1, 'slides');
	foreach($data as $key => $val){
		$h->li(0, 1);
			$h->image('', '', 1);
			$h->article(0, 1, 'caption center-align');
				$h->i(0, 1, 'fa fa-quote-right');
				$h->i(1, 1);
				$h->paragraph(0, 1);
					$h->exe($h->text[$data[0]], 1);
				$h->paragraph(1, 1);
				$h->heading(0, 1, 2);
					$h->exe($h->text[$data[1]], 1);
				$h->heading(1, 1, 2);
			$h->article(1, 1);
		$h->li(1, 1);
		for ($i = 0; $i <= 2; $i++){
    		$data[$i] += 2;
		}
	}
	$h->ul(1, 1);
$h->div(1, 1);
?>