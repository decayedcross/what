<?php
require_once('templates/what/html/com_content/article/offerings/1_parallax/2_section/content_array.php');

if($key == 0){
	echo '<section id="one">';
	echo '<ul>';
	foreach ($content[$key] as $contentKey => $contentData){
	$json = json_decode($contentData);
		echo '<li>';
		echo '<p>'.$json->p.'</p>';
		echo '</li>';		
	}
	echo '</ul>';
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

