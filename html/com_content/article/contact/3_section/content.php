<?php
require_once('templates/what/html/com_content/article/contact/3_section/content_array.php');

echo '<ul class="'.$sectionArray["id"].'-ul">';
foreach ($content[$key] as $contentKey => $contentData){
	if($contentKey == 0){
		switch($contentData){
			case "Address":
        		$icon = 'map-marker';
        	break;
			case "Phone":
				$icon = 'phone-square';
			break;
			case "Email":
				$icon = 'envelope';
			break;
		}
		echo '<h2 class="'.$sectionArray["id"].'-title" id="'.$sectionArray["id"].'-title-'.$key.'">';
			echo '<a href="#" class="'.$sectionArray["id"].'-title-link">';
				echo '<i class="fa fa-'.$icon.'"></i> '.$contentData;
			echo '</a>';
		echo '</h2>';
	}else{
		echo '<li class="'.$sectionArray["id"].'-li" >';
			echo $contentData;
		echo '</li>';
	}
}

echo '</ul>';
?>