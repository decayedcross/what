<?php
$h = new enc_HTML();
$col= array('id', 'title', 'link');
$query = $h->joomlaQueryArray('menu', $col, 'menutype', 'topmenu', 'id', 'ASC', 99);

$h->ul(0, 1);
	foreach($query as $key => $val){
		$h->li(0, 1);
			$h->a(0, 1, $val->link.'&Itemid='.$val->id);
				$h->exe($val->title, 1);
			$h->a(1, 1);
		$h->li(1, 1);
	}
$h->ul(1, 1);
?>