<?php
$h = new enc_HTML();
$h->joomlaArticleContent(basename(__DIR__));
$data = array(1, 2, 3, 4);

$h->heading(0, 1, 1);
	$h->exe($h->text[0], 1);
$h->heading(1, 1, 1);

$h->ul(0, 1);
	foreach($data as $key => $val){
		$h->li(0,1);
			$h->figure(0,1);
				$h->image($h->text[$data[0]], $h->text[$data[1]], 1);
			$h->figure(1,1);
			$h->article(0,1);
				$h->heading(0, 1, 2);
					$h->exe($h->text[$data[2]], 1);
				$h->heading(1, 1, 2);
				$h->paragraph(0, 1);
					$h->exe($h->text[$data[3]], 1);
				$h->paragraph(1, 1);
			$h->article(1,1);
		$h->li(1,1);
		for ($i = 0; $i <= 3; $i++){
    		$data[$i] += 4;
		}
	}
$h->ul(1, 1);
?>