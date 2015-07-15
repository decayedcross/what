<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$section_3 = array(
	"id" => "what-home-section-3",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/home/3_section/"
);

$html->repeat($section_3, 4, 'page', 'pagePath');
?>