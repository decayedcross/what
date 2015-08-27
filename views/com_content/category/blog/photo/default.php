<?php
use framework\ENCschema;

use joomla\category;
use joomla\pagination;
use joomla\database;

$db = new database();
$sch = new ENCschema();
$category = new category();
$pagination = new pagination();

$category->deploy(
JRequest::getVar('id'), 
JRequest::getVar('Itemid'), 
9, 
__DIR__.'/item', 
$this->categoryAlias, 
JRequest::getVar('view'), 
$this->categoryTitle,
$sch::imageGallery
);
$pagination->load(JRequest::getVar('Itemid'), $category->pagesTotal);
?>