<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$section_7 = array(
	"id" => "what-home-section-7",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/home/5_parallax/2_section/"
);

$html->repeat($section_7, 2, 'page', 'pagePath');
?>