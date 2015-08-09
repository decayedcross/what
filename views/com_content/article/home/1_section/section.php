<?php
use joomla\article;

$article = new article();
$article->sectionContent($this->articleAlias, $this->sectionAlias);

echo $article->introtext;
?>