<?php
require_once('templates/what/html/com_content/article/home/1_parallax/2_section/content_array.php');

foreach ($content[$key] as $contentKey => $contentData){
$j = json_decode($contentData);
}

$this->i(0,1,$j->icon);
$this->i(1,1);


?>