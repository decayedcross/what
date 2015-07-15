<?php
require_once('templates/what/html/com_content/article/home/1_section/content_array.php');

if($key == 0){
echo '<section id="what-home-slideshow">';
}
	echo '<div data-src="'.$content[$key]["img"].'" data-link="'.$content[$key]["link"].'">';
		echo '<div class="caption fadeIn camera_effected">';
			echo '<i class="'.$content[$key]["icon"].'"></i>';
			echo '<hgroup>';
				echo '<h1>'.$content[$key]["h1"].'</h1>';
				echo '<h2>'.$content[$key]["h2"].'</h2>';
			echo '</hgroup>';
			echo '<button>'.$content[$key]["btn"].'</button>';
		echo '</div>';
	echo '</div>';		
if($key == 2){
echo '</section>';
}
?>