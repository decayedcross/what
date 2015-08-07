<?php
use joomla\article;

$article = new article();

$content = $article->content(JRequest::getVar('id'));

echo '<pre>';
var_dump($content);
echo '</pre>';

//echo $content[0]['title'];

?>