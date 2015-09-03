<?php
use Antfuentes\Titan\Joomla;

$article = new Joomla\Article();

$article->sections($this->routerId, __DIR__, $this->articleAlias, 'main');
?>