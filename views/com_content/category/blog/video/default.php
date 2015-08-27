<?php
use joomla\category;
use joomla\pagination;

$category = new category();
$pagination = new pagination();

$category->deploy(JRequest::getVar('id'), JRequest::getVar('Itemid'), 4, __DIR__.'/item', $this->categoryAlias, JRequest::getVar('view'), $this->categoryTitle);
$pagination->load(JRequest::getVar('Itemid'), $category->pagesTotal);
?>