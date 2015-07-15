<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$section_6 = array(
	"id" => "what-home-section-6",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/home/5_parallax/1_section/"
);

$html->repeat($section_6, 1, 'page', 'pagePath');
?>