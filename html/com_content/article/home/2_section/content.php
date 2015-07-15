<?php
require_once('templates/what/html/com_content/article/home/2_section/content_array.php');

if($key == 0){
echo '<section id="one">';
echo '<i class="'.$content[$key]["icon"].'"></i>';
echo '<hgroup>';
echo '<h3>'.$content[$key]["h3"].'</h3>';
echo '<h4>'.$content[$key]["h4"].'</h4>';
echo '</hgroup>';
echo '</section>';
}
if($key == 1){
echo '<section id="two">';

echo '<div id="left">';
echo '<p>'.$content[$key]["p"].'</p>';
echo '</div>';
	
}

if($key == 2){	
echo '<div id="right">';
	foreach ($content[$key] as $contentKey => $contentData){
		$contentJSON = json_decode($contentData);
		echo '<div class="item">';
			echo '<div class="top">';
				echo '<div class="left">';
					echo $contentJSON->title;
				echo '</div>';
				echo '<div class="right" id="percent-'.$contentJSON->percent.'">';
					echo $contentJSON->percent;
				echo '</div>';
			echo '</div>';
			echo '<div class="bottom">';
				echo '<span class="bar" id="bar-'.$contentJSON->percent.'"></span>';
			echo '</div>';
		echo '</div>';
	}
echo '</div>'; 
	
echo '</section>';
}

if($key == 3){
	echo '<section id="three">';
		foreach ($content[$key] as $contentKey => $contentData){
			$contentJSON = json_decode($contentData);
			echo '<ul>';
				echo '<li>';
					echo '<img src="'.$contentJSON->img.'" />';
					echo '<h5>'.$contentJSON->h5.'</h5>';
					echo '<p>'.$contentJSON->p.'</p>';
				echo '</li>';
			echo '</ul>';
		}
	echo '</section>';
}
?>

