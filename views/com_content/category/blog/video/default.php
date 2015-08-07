<?php
use joomla\category;
use joomla\pagination;

$cat = new category();
$pagination = new pagination();

$cat->content(JRequest::getVar('id'), JRequest::getVar('Itemid'), 3, __DIR__.'\item');

$pagination->load(JRequest::getVar('Itemid'), $cat->pagesTotal);
?>