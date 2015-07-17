<?php
require_once('templates/what/html/com_content/article/home/3_section/content_array.php');

foreach ($content[$key] as $contentKey => $contentData){
$j = json_decode($contentData);
}
$this->heading(0, 1, 5);
$this->exe($j->h5, 1);
$this->heading(5, 1, 5);
$this->paragraph(0, 1, 'mic-check');
$this->exe($j->p, 1);
$this->paragraph(5, 1);
?>