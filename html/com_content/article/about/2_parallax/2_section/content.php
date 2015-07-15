<?php
require_once('templates/what/html/com_content/article/about/2_parallax/2_section/content_array.php');

if($key == 0){
	echo '<section id="one">';
	echo '<ul>';
	foreach ($content[$key] as $contentKey => $contentData){
	$json = json_decode($contentData);
		echo '<li>';
		echo '<i class="'.$json->img.'"></i>';
		echo '</li>';		
	}
	echo '</ul>';
	echo '</section>';
}

?>

