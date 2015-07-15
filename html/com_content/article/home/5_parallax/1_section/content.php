<?php
require_once('templates/what/html/com_content/article/home/5_parallax/1_section/content_array.php');

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