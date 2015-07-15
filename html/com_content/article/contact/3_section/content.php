<?php
require_once('templates/what/html/com_content/article/contact/3_section/content_array.php');

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
		$json = json_decode($contentData);
		echo '<div>';
		echo '<input placeholder="'.$json->placeholder.'"></input>';
		echo '</div>';
	}
}
if($key == 2){
	foreach ($content[$key] as $contentKey => $contentData){
$json = json_decode($contentData);
}
echo '<div id="t-area">';
echo '<textarea>'.$json->placeholder.'</textarea>';
echo '</div>';	
echo '<input id="submit" type="'.$json->submit.'"></input>';
echo '</section>';		
}
?>