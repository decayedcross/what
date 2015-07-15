<?php
require_once('templates/what/html/com_content/article/home/4_parallax/2_section/content_array.php');

foreach ($content[$key] as $contentKey => $contentData){
$json = json_decode($contentData);
}
if($key == 0){
	echo '<section id="one">';
	echo '<ul class="roles">';
}

echo '<li>';
echo '<i class="'.$json->icon.'"></i>';
echo '<hgroup>';
echo '<h5>'.$json->h5.'</h5>';
echo '<h6>'.$json->h6.'</h6>';
echo '</hgroup>';
echo '</li>';

if($key == 2){
	echo '</ul>';
	echo '</section>';
}

