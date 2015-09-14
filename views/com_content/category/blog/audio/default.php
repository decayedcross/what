<?php
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$category = new Joomla\Category();
$pagination = new Joomla\Pagination();

$category->deploy(
JRequest::getVar('id'), 
JRequest::getVar('Itemid'), 
99, 
__DIR__.'/item', 
$this->categoryAlias, 
JRequest::getVar('view'), 
$this->categoryTitle
);

//$pagination->load(JRequest::getVar('Itemid'), $category->pagesTotal);
?>