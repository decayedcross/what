<?php
$h = new enc_HTML();
$h->joomlaArticleContent(basename(__DIR__));
$data = array(1, 2, 3, 4);


foreach($data as $key => $val){
	$h->ul(0, 1);
		if($key == 0){
			$h->li(0, 1);
				$h->heading(0, 1, 2);
					$h->exe($h->text[0], 1);
				$h->heading(1, 1, 2);
				$h->div(0,1);
					$h->i(0, 1);
					$h->i(1, 1);
				$h->div(1,1);
				$h->article(0,1);
					$h->paragraph(0,1);
						$h->exe($h->text[1], 1);
					$h->paragraph(1,1);
					$h->paragraph(0,1);
						$h->exe($h->text[2], 1);
					$h->paragraph(1,1);
					$h->paragraph(0,1);
						$h->exe($h->text[3], 1);
					$h->paragraph(1,1);
				$h->article(1,1);
			$h->li(1, 1);
		}
		if($key == 1){
			$h->li(0, 1);
				$h->heading(0, 1, 2);
					$h->exe($h->text[4], 1);
				$h->heading(1, 1, 2);
				$h->div(0,1);
					$h->i(0, 1);
					$h->i(1, 1);
				$h->div(1,1);
				$h->article(0,1);
					$h->paragraph(0,1);
						$h->exe($h->text[5], 1);
					$h->paragraph(1,1);
					$h->paragraph(0,1);
						$h->exe($h->text[6], 1);
					$h->paragraph(1,1);
				$h->article(1,1);
			$h->li(1, 1);
		}
		if($key == 2){
			$h->li(0, 1);
				$h->heading(0, 1, 2);
					$h->exe($h->text[7], 1);
				$h->heading(1, 1, 2);
				$h->div(0, 1);
					$h->i(0, 1);
					$h->i(1, 1);
				$h->div(1, 1);
				$h->article(0, 1);
					$h->paragraph(0, 1);
						$h->exe($h->text[8], 1);
					$h->paragraph(1, 1);
				$h->article(1, 1);
			$h->li(1, 1);
		}
	$h->ul(1, 1);
	if($key == 3){
		$h->heading(0, 1, 2);
			$h->exe($h->text[9], 1);
		$h->heading(1, 1, 2);
		$h->div(0, 1);
			$h->i(0, 1);
			$h->i(1, 1);
		$h->div(1, 1);
		$h->article(0,1);
			$h->paragraph(0, 1);
				$h->exe($h->text[10], 1);
			$h->paragraph(1, 1);
		$h->article(1, 1);
	}
}

?>