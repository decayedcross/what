<?php
require_once('templates/what/html/com_content/article/home/3_section/content_array.php');

foreach ($content[$key] as $contentKey => $contentData){
$j = json_decode($contentData);
}
$this->heading(0, 1, 5);
$j->h5;
$this->heading(5, 1, 5);
$this->paragraph(0, 1, 'mic-check');
$j->p;
$this->paragraph(5, 1);
?>