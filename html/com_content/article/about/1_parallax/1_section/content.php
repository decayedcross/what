<?php
require_once('templates/what/html/com_content/article/about/1_parallax/1_section/content_array.php');

foreach ($content[$key] as $contentKey => $contentData){
	$json = json_decode($contentData);
}
echo '<section id="one">';
echo '<hgroup>';
echo '<h1>'.$json->h1.'</h1>';
echo '<h2>'.$json->h2.'</h2>';
echo '</hgroup>';
echo '</section>';

?>