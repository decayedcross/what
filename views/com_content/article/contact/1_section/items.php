<?php
//ARTICLE
//CONTACT
//SECTION #1
//ITEMS
use Antfuentes\Titan\Framework;

$h = new Framework\Html;

$titles = array(0, 6, 8, 10);
$open_subtitles = array(1, 7, 9, 11);
$close_subtitles = array(5, 7, 9, 12);

$item = '{"class":"item"}';
$itemTitle = '{"class":"item-title"}';
$itemList = '{"class":"item-list"}';
$itemListItem = '{"class":"item-list-item"}';
$itemListLink = '{"class":"item-list-link", "href":"mailto:'.trim($this->content).'"}';

if(in_array($this->key, $titles)){
	$h->b('li', 0, 1, '', $item);
		$h->b('h3', 0, 1, '', $itemTitle);
			$h->e(1, $this->content);
		$h->b('h3', 1, 1);
	}else{	
		if(in_array($this->key, $open_subtitles)){
			$h->b('ul', 0, 1, '', $itemList);
		}
			$h->b('li', 0, 1, '', $itemListItem);
			if(strpos($this->content, '@')){
				$h->b('a', 0, 1, '', $itemListLink);
					$h->e(1, $this->content);
				$h->b('a', 1, 1);
			}else{
				$h->e(1, $this->content);
			}
			$h->b('li', 1, 1);
		if(in_array($this->key, $close_subtitles)){
				$h->b('ul', 1, 1);
			$h->b('li', 1, 1);
		}
}