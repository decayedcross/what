<?php
require_once('templates/what/html/com_content/article/about/2_parallax/1_section/content_array.php');

if($key == 0){
	foreach ($content[$key] as $contentKey => $contentData){
	$json = json_decode($contentData);
}
echo '<section id="one">';
echo '<i class="'.$json->icon.'"></i>';
echo '<hgroup>';
echo '<h3>'.$json->h3.'</h3>';
echo '<h4>'.$json->h4.'</h4>';
echo '</hgroup>';
echo '</section>';
}
if($key == 1){
	echo '<section id="two">';
	echo '<ul>';
	foreach ($content[$key] as $contentKey => $contentData){
	$json = json_decode($contentData);
		echo '<li>';
		echo '<img src="'.$json->img.'" />';
		echo '<h5>'.$json->h5.'</h5>';
		echo '<p>'.$json->p.'</p>';
		echo '</li>';		
	}
	echo '</ul>';
	echo '</section>';
}

?>

