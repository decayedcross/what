<?php
defined('_JEXEC') or die;

$h = new ENChtml();
$css = new ENCcss();
$joomla = new ENCjoomla();
$string = new ENCstring();
$url = new ENCurl();
$sch = new ENCschema();
$arr = new ENCarray();

$h->b('section', 0, 1, $sch::blog, '{"id":"'.$this->category->alias.'"}');
	$h->b('h1', 0, 1);
		$h->e(1, $this->category->title);
	$h->b('h1', 1, 1);
	if (!empty($this->lead_items)){	
		$leadArray = $arr->sort($this->lead_items, 'id', 'desc');
		foreach ($leadArray as $key => &$item){
			$this->item = & $item;
			$joomla->joomlaCategoryLead($this->item, $this->category->alias);
		}
	}
	if (!empty($this->intro_items)){
		$introArray = $arr->sort($this->intro_items, 'id', 'desc'); 
		foreach ($introArray as $key => &$item){
			$this->item = & $item;
			$joomla->joomlaCategoryIntro($this->item, $this->category->alias);
		}
	}
	if (($this->params->def('show_pagination', 1) == 1 || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)){
		$h->b('section', 0, 1, '', '{"class":"pagination"}');
			$h->e(1, $this->pagination->getPagesLinks());
		$h->b('section', 1, 1);
	}
$h->b('section', 1, 1);
?>