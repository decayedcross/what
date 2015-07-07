<?php
require_once('templates/what/html/com_content/article/contact/4_section/content_array.php');

foreach ($content[$key] as $contentKey => $contentData){
	switch ($key){
		case 0:
			if($contentKey == 0){
				echo '<ul class="'.$sectionArray["id"].'-ul">';
			}
			echo '<li class="'.$sectionArray["id"].'-li">';
				echo '<input id="'.$sectionArray["id"].'-'.strtolower($contentData).'" class="'.$sectionArray["id"].'-input" type="text" placeholder="'.$contentData.'" required>';
			echo '</li>';
			if($contentKey == 2){
				echo '</ul>';
			}
			break;
		case 1:
			echo '<div class="'.$sectionArray["id"].'-wrap-textarea">';
				echo '<textarea id="'.$sectionArray["id"].'-'.strtolower($contentData).'" class="'.$sectionArray["id"].'-textarea" placeholder="'.$contentData.'" required></textarea>';
			echo '</div>';
			break;
		case 2:
			if($contentKey == 0){
				$type = 'submit';
				echo '<div class="'.$sectionArray["id"].'-wrap-button">';
			}else{
				$type = 'reset';
			}
			echo '<button id="'.$sectionArray["id"].'-'.strtolower($contentData).'" class="'.$sectionArray["id"].'-button" type="'.$type.'" value="'.$contentData.'">'.$contentData.'</button>';
       		
			if($contentKey == 1){
				echo '</div>';
			}
			break;
	}
}
?>