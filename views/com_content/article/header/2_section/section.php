<?php
use Antfuentes\Titan\Joomla;
use Antfuentes\Titan\Framework;

$menu = new Joomla\Menu();
$db = new Joomla\Database();
$string = new Framework\String();
$h = new Framework\Html();
$h->b('ul', 0, 1);
$menu->build('mainmenu', 'li', 1);
$db->tables();
$result = $db->q("SELECT * FROM $db->categories WHERE id = '$this->categoryParentId'");	
$cleanAlias = $string->replaceString('-', '', $result[0]['alias']);
$menu->build($cleanAlias, 'li', $this->routerId);		
$h->b('ul', 1, 1);
?>