<?php
use joomla\category;
use joomla\pagination;
use framework\youtube;

$category = new category();
$pagination = new pagination();
$youtube = new youtube();

$category->deploy(JRequest::getVar('id'), JRequest::getVar('Itemid'), 3, __DIR__.'\item', $this->categoryAlias, JRequest::getVar('view'));
$pagination->load(JRequest::getVar('Itemid'), $category->pagesTotal);

//$youtube->channel('UUwNlh9ns6PMbCkcRnjzuzwA', 1);
//$pagination->load(JRequest::getVar('Itemid'), $youtube->pagesTotal);
?>