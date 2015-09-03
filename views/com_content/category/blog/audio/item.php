<?php

use Antfuentes\Titan\Joomla;

$menu = new Joomla\Menu;

$menu->categoryBlog($this->catid, $this->id);

$menu->article($this->id, JRequest::getVar('Itemid'));


$link = 'index.php?option=com_content&view=article&id='.$this->id.':'.$this->alias.'&catid='.$this->catid.'&Itemid='.JRequest::getVar('Itemid');

echo '<a href="'.$link.'">'.$this->title.'</a>';

echo '<br>';
?>