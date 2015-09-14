<?php
use Antfuentes\Titan\Framework;
$h = new Framework\Html;

if(!is_file(trim($this->content))){	 
	$h->b('p', 0, 1, '', '{"id":"p"}');	
		$h->e(1, $this->content);
	$h->b('p', 1, 1);
}
?>