<?php
require_once('templates/what/html/com_content/article/offerings/2_parallax/1_section/content_array.php');

foreach ($content[$key] as $contentKey => $contentData){
$json = json_decode($contentData);
}
if($key == 0){
	echo '<section id="one">';
	echo '<ul class="roles-2">';
}

echo '<li>';
echo '<i class="'.$json->icon.'"></i>';
echo '<hgroup>';
echo '<h6>'.$json->h5.'</h6>';
echo '</hgroup>';
echo '</li>';

if($key == 3){
	echo '</ul>';
	echo '</section>';
}

