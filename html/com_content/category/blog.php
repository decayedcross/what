<?php
defined('_JEXEC') or die;
$h = new enc_HTML();

$h->section(0, 1, '', $this->category->alias);
	$h->heading(0, 1, 1);
		$h->exe($this->category->title, 1);
	$h->heading(1, 1, 1);
	if (!empty($this->lead_items)){	
		$leadArray = $h->arraySort($this->lead_items, 'id', 'desc');
		foreach ($leadArray as $key => &$item){
			$this->item = & $item;
			$h->joomlaCategoryLead($this->item, $this->category->alias);
		}
	}
	if (!empty($this->intro_items)){
		$introArray = $h->arraySort($this->intro_items, 'id', 'desc'); 
		foreach ($introArray as $key => &$item){
			$this->item = & $item;
			$h->joomlaCategoryIntro($this->item, $this->category->alias);
		}
	}
	if (($this->params->def('show_pagination', 1) == 1 || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)){
		$h->section(0, 1, 'pagination');
			$h->exe($this->pagination->getPagesLinks(), 1);
		$h->section(1, 1);
	}
$h->section(1, 1);
?>