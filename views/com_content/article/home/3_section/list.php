<?php
use Antfuentes\Titan\Framework;

$h = new Framework\Html;
$css = new Framework\Css;

$h->b('li', 0, 1, '', '{"class":"col col-xs-12 li"}');
	$h->b('div', 0, 1, '', '{"class":"col col-xs-2 i-div", "data-mh":"home-section-3-i-div"}');
		$h->b('i', 0, 1, '', '{"class":"'.trim($this->array[$this->key[0]]).' i"}');
		$h->b('i', 1, 1);
	$h->b('div', 1, 1);
	$h->b('div', 0, 1, '', '{"class":"col col-xs-10 content-div", "data-mh":"home-section-3-i-div"}');
		$h->b('div', 0, 1, '', '{"class":"vertical"}');
			$h->b('h2', 0, 1, '', '{"class":"col-xs-10 h2"}');
				$h->e(1, $this->array[$this->key[1]]);
			$h->b('h2', 1, 1);
			$h->b('p', 0, 1, '', '{"class":"col-xs-10"}');
				$h->e(1, $this->array[$this->key[2]]);
			$h->b('p', 1, 1);
		$h->b('div', 1, 1);
	$h->b('div', 1, 1);
$h->b('li', 1, 1);
?>