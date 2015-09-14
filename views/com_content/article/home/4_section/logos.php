<?php
use Antfuentes\Titan\Framework;

$h = new Framework\Html;
$css = new Framework\Css;

$h->b('li', 0, 1, '', '{"class":"col li"}');
	$h->b('figure', 0, 1, '', '{"class":"col col-xs-12 figure", "data-mh":"home-section-4-figure", "data-min-height":"10"}');
		$h->b('div', 0, 1, '', '{"class":"vertical"}');
			$h->b('img', 0, 1, '', '{"class":"col col-center col-xs-10 image", "src":"'.trim($this->content).'", "alt":"'.trim($this->content).'"}');
			$h->b('div', 0, 1, '', '{"style":"background-image: url('.trim($this->content).')", "class":"div-img"}');
			$h->b('div', 1, 1);
		$h->b('div', 1, 1);
	$h->b('figure', 1,1);	
$h->b('li', 1, 1);

?>