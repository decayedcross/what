<?php
/*
0: img
1: icon
2: title
3: content
4: link
5: buttontext
*/

use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$menu = new Joomla\Menu;
$h = new Framework\Html;
$sch = new Framework\Sch;
$string = new Framework\String;
$css =  new Framework\Css;
$article = new Joomla\Article;

$open = 0;
$close = 1;

$imgSrc = trim($this->array[$this->key[0]]);
$iconClass = trim($this->array[$this->key[1]]);
$title = trim($this->array[$this->key[2]]);
$content = trim($this->array[$this->key[3]]);
$linkHref = trim($this->array[$this->key[4]]);
$buttonText = trim($this->array[$this->key[5]]);


$imgAttr = sprintf('{"src":"%s", "style": "max-width:100%%;max-height:100%%;"}', $imgSrc);
$aAttr = sprintf('{"href": "%s"}', $linkHref);


$h->b('div', $open, 1,'', '{"class":"col col-sm-4", "style": "padding: 15px;"}'); 
	$h->b('div', $open, 1,'', '{"class":"overlay_inner_gc"}'); 
		$h->b('div', $open, 1,'', '{"style":"background-color: #fff;"}'); 
			$h->b("img", $open, 1, '', $imgAttr);
			$h->b('div', $open, 1,'', '{"class":"overlay_whiteback_inner"}'); 
				$h->b('div', $open, 1,'', '{"class":"col col-sm-4 col-center", "style":"text-align:center; top:-40px;"}'); 
					$h->b('i', $open, 1, '', '{"class":"fa ' . $iconClass . ' fa-2x serviceBox-icon"}');
					$h->b('i', $close, 1);
				$h->b('div', $close, 1); 
				$h->b('div', $open, 1,'', '{"class":"s", "style":"text-align:center;"}');
					$h->b('h3', $open, 1, '', '');
						$h->e(1,$title);
					$h->b('h3', $close, 1);
/* 				$h->b('div', $close, 1); 
				$h->b('div', $open, 1,'', '{"class":"overlay_whiteback_text"}');  */
					$h->e(1,$content);
					$h->b('br', $open, 1);
					$h->b('a', $open, 1, '', $aAttr);
						$h->e(1,$buttonText);
					$h->b("a", $close, 1);
				$h->b('div', $close, 1); 
			$h->b('div', $close, 1); 
		$h->b('div', $close, 1); 
	$h->b('div', $close, 1); 
$h->b('div', $close, 1); 




?>
