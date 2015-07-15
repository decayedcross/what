<?php
require_once('templates/what/html/com_content/article/footer/1_section/content_array.php');

if($key == 0){
	foreach ($content[$key] as $contentKey => $contentData){
		$json = json_decode($contentData);
	}
	echo '<h6>'.$json->h6.'</h6>';
}	
if($key == 1){
	foreach ($content[$key] as $contentKey => $contentData){
		$json = json_decode($contentData);
	}
	echo '<span>'.$json->beforeHREF.'<a href="'.$json->HREF.'">'.$json->textHREF.'</a></span>';	
}
if($key == 2){
	echo '<div id="icon-wrap">';
	foreach ($content[$key] as $contentKey => $contentData){
		$json = json_decode($contentData);
		echo '<a href="'.$json->link.'"><i class="'.$json->icon.'"></i></a>';
	}
	echo '</div>';
}
?>