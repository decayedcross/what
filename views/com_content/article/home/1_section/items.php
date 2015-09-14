<?php
use Antfuentes\Titan\Framework;
$h = new Framework\Html;

$wallopItemImg = trim($this->array[$this->key[0]]);
$wallopItemTitle = trim($this->array[$this->key[1]]);
$wallopItemSubTitle = trim($this->array[$this->key[2]]);
$wallopItemRow = '{"class":"row", "data-min-height":"80"}';
$wallopItemVertical = '{"class":"vertical"}';
$wallopItemContainer = '{"class":"col col-center col-xs-11 col-sm-10 col-md-9 col-lg-8 "}';
$wallopItemH1 = '{"class":"h1"}';
$wallopItemH2 = '{"class":"h2"}';

if($this->counter == 0){
	$wallopItem = '{"class":"Wallop-item Wallop-item--current", "data-min-height":"80", "style":"background-image: url('.$wallopItemImg.');"}';
	$this->counter++;
}else{
	$wallopItem = '{"class":"Wallop-item", "data-min-height":"80", "style":"background-image: url('.$wallopItemImg.');"}';
}

$h->b('div', 0, 1, '', $wallopItem);
	$h->b('div', 0, 1, '', $wallopItemRow);
		$h->b('div', 0, 1, '', $wallopItemVertical);
			$h->b('div', 0, 1, '', $wallopItemContainer);
				$h->b('h1', 0, 1, '', $wallopItemH1);
					$h->e(1, $wallopItemTitle);
				$h->b('h1', 1, 1);
				$h->b('h2', 0, 1, '', $wallopItemH2);
					$h->e(1, $wallopItemSubTitle);
				$h->b('h2', 1, 1);
			$h->b('div', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('div', 1, 1);
?>