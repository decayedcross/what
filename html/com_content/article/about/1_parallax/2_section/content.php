<?php 
require_once('templates/what/html/com_content/article/about/1_parallax/2_section/content_array.php');

if($key == 0){
echo '<section id="one">';

echo '<div id="left">';
	foreach ($content[$key] as $contentKey => $contentData){
		$contentJSON = json_decode($contentData);
			echo '<p>'.$contentJSON->p.'</p>';
	}
echo '</div>';	
}

if($key == 1){	
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
?>