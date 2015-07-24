<?php
$h = new enc_HTML();
$h->joomlaArticleContent(basename(__DIR__));
$data = array(1, 2, 3, 4, 5, 6);

$h->heading(0, 1, 1);
	$h->exe($h->text[0], 1);
$h->heading(1, 1, 1);

$h->ul(0, 1);
	foreach($data as $key => $val){
		if($key < 3){
			$h->li(0,1);
				$h->section(0,1);
					$h->figure(0,1);
						$h->i(0, 1, 'fa fa-'.trim($h->text[$data[0]]));
						$h->i(1, 1);
					$h->figure(1,1);
					$h->article(0,1);
						$h->heading(0, 1, 2);
							$h->exe($h->text[$data[1]], 1);
						$h->heading(1, 1, 2);
						$h->paragraph(0, 1);
							$h->exe($h->text[$data[2]], 1);
						$h->paragraph(1, 1);
						$h->paragraph(0, 1);
							$h->exe($h->text[$data[3]], 1);
						$h->paragraph(1, 1);
						$h->a(0, 1, $h->text[$data[4]]);
							$h->button(0, 1);
								$h->exe($h->text[$data[5]], 1);
							$h->button(1, 1);
						$h->a(1,1);
					$h->article(1,1);
				$h->section(1,1);
			$h->li(1,1);
			for ($i = 0; $i <= 5; $i++){
				$data[$i] += 6;
			}	
		}
	}
$h->ul(1, 1);
?>