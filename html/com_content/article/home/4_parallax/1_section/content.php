<?php
require_once('templates/what/html/com_content/article/home/4_parallax/1_section/content_array.php');

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
}

if($key >= 1){
	foreach ($content[$key] as $contentKey => $contentData){
		$json = json_decode($contentData);
	}
	echo '<li>';
		echo '<hgroup>';
			echo '<h6>'.$json->h6.'</h6>';
		echo '</hgroup>';
		echo '<img src="'.$json->img.'" />';
		echo '<p>'.$json->p.'</p>';
	echo '</li>';
}
if($key == 4){
	echo '</section>';
	echo '</ul>';
}