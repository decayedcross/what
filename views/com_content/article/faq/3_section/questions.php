<?php
//ARTICLE
//FAQ
//SECTION #3
//QUESTIONS
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$menu = new Joomla\Menu;
$h = new Framework\Html;
$sch = new Framework\Sch;
$string = new Framework\String;
$css =  new Framework\Css;
$article = new Joomla\Article;

$item = '{"class":"item acc-item"}';
$itemTitle = '{"class":"item-title acc-title"}';
$content = '{"class":"content acc-content"}';

if($this->counter == 0){
	$this->counter = 1;
}else{
	$this->counter++;
}

$h->b('li', 0, 1, '', $item);
	$h->b('h2', 0, 1, '', $itemTitle);
		$h->e(1, $this->counter.'. '.$this->array[$this->key[0]]);
	$h->b('h2', 1, 1);
	$h->b('div', 0, 1, '', $content);
		$h->e(1, $this->array[$this->key[1]]);
	$h->b('div', 1, 1);
$h->b('li', 1, 1);
?>