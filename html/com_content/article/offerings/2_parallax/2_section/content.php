<?php
require_once('templates/what/html/com_content/article/offerings/2_parallax/2_section/content_array.php');

foreach ($content[$key] as $contentKey => $contentData){
$json = json_decode($contentData);
}
if($key == 0){
	echo '<section id="one">';
	echo '<ul>';
}

echo '<li>';
echo '<div>';
echo '<i class="'.$json->icon.'"></i>';
echo '</div>';
echo '<hgroup>';
echo '<h5>'.$json->h5.'</h5>';
echo '<h6>'.$json->h6.'</h6>';
echo '</hgroup>';
echo '</li>';

if($key == 5){
	echo '</ul>';
	echo '</section>';
}

?>