<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$section_2 = array(
	"id" => "what-about-section-2",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/about/1_parallax/2_section/"
);

$html->repeat($section_2, 1, 'page', 'pagePath');
?>