<?php
require_once('templates/what/html/com_content/article/contact/1_parallax/2_section/content_array.php');

foreach ($content[$key] as $contentKey => $contentData){
$json = json_decode($contentData);
}
if($key == 0){
	echo '<section id="one">';
	echo '<ul>';
}

echo '<li>';
echo '<div>';
echo '<i class="'.$json->icon.'"></i>';
echo '</div>';
echo '<hgroup>';
switch ($key) {
    case 0:
        echo '<h5><a href="tel:'.$json->h5.'">'.$json->h5.'</a></h5>';
        break;
    case 1:
        echo '<h5><a href="mailto:'.$json->h5.'">'.$json->h5.'</a></h5>';
        break;
    case 2:
        echo '<h5>'.$json->h5.'</h5>';
        break;
}
echo '<h6>'.$json->h6.'</h6>';
echo '</hgroup>';
echo '</li>';

if($key == 2){
	echo '</ul>';
	echo '</section>';
	echo '<section id="two">';
	echo '<div id="contact-map">';
	echo '</div>';
	echo '</section>';
}
?>