<?php
require_once('templates/what/html/com_content/article/home/3_section/content_array.php');

if($key == 0){
	echo '<section id="one">';
	echo '<ul>';
}

foreach ($content[$key] as $contentKey => $contentData){
	$json = json_decode($contentData);
	echo '<li style="background-image: url('.$json->img.');">';
		echo '<hgroup>';
			echo '<h5>'.$json->title.'</h5>';
			echo '<span></span>';
		echo '</hgroup>';
	echo '</li>';
}
if($key == 4){
	echo '</ul>';
	echo '</section>';
}
?>

