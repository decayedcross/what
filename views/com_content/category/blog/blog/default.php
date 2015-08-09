<?php
use framework\ENCschema;

use joomla\category;
use joomla\pagination;

$sch = new ENCschema();

$category = new category();
$pagination = new pagination();

$category->deploy(
JRequest::getVar('id'), 
JRequest::getVar('Itemid'), 
2, 
__DIR__.'\item', 
$this->categoryAlias, 
JRequest::getVar('view'), 
$this->categoryTitle,
$sch::blog
);
$pagination->load(JRequest::getVar('Itemid'), $category->pagesTotal);
?>