<?php 
use Antfuentes\Titan\Joomla;

$article = new Joomla\Article;

$article->content($this->routerId);

echo $article->title;
?>