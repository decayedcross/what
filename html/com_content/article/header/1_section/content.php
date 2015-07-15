<?php
require_once('templates/what/html/com_content/article/header/1_section/content_array.php');

if($key == 0){
foreach ($content[$key] as $contentKey => $contentData){
$json = json_decode($contentData);
}
echo '<div id="large">';
echo '<figure id="brand">';
echo '<div id="inner">';
echo '<span id="text">';
echo $json->sitename;
echo '</span>';
echo '</div>';
echo '</figure>';
echo '<nav id="nav">';
echo '<ul id="menu">';
}

if($key == 1){
foreach ($content[$key] as $contentKey => $contentData){		
$json = json_decode($contentData);
echo '<li><a href="'.$json->link.'">'.$json->title.'</a></li>';
}
echo '</ul>';
echo '<div id="social">';
echo '<div id="inner">';
}

if($key == 2){
foreach ($content[$key] as $contentKey => $contentData){		
$json = json_decode($contentData);
echo '<div class="content"><a href="'.$json->link.'">'.$json->icon.'</a></div>';
}
echo '</div>';
echo '</div>';
echo '</nav>';
echo '</div>';
}

if($key == 3){
echo '<div id="small">';
echo '<div id="top">';
echo '<figure id="brand">';
foreach ($content[$key] as $contentKey => $contentData){		
$json = json_decode($contentData);
}
echo $json->sitename;
echo '</figure>';
echo '<div id="menu-icon">';
}

if($key == 4){
foreach ($content[$key] as $contentKey => $contentData){		
$json = json_decode($contentData);
echo '<i class="'.$json->icon.'"></i>';
}
echo '</div>';
echo '</div>';
}

if($key == 5){
echo '<nav id="nav">';
echo '<ul id="menu">';
foreach ($content[$key] as $contentKey => $contentData){		
$json = json_decode($contentData);
echo '<li><a href="'.$json->link.'">'.$json->title.'</a></li>';
}
echo '</ul>';
}

if($key == 6){
foreach ($content[$key] as $contentKey => $contentData){		
$json = json_decode($contentData);
echo '<a href="'.$json->link.'"><i class="'.$json->icon.'"></i></a>';
}
echo '</nav>';
echo '</div>';
}
?>