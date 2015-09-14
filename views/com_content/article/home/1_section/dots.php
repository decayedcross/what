<?php
use Antfuentes\Titan\Framework;
$h = new Framework\Html;

$wallopDotImg = '{"src":"'.trim($this->array[$this->key[0]]).'"}';

if($this->counter == 0){
	$wallopDot = '{"class":"Wallop-dot Wallop-dot--current"}';
	$this->counter++;
}else{
	$wallopDot = '{"class":"Wallop-dot"}';
}

$h->b('li', 0, 1, '', $wallopDot);
	$h->b('img', 0, 1, '', $wallopDotImg);
$h->b('li', 1, 1);
?>