<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$section_4 = array(
	"id" => "what-about-section-4",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/about/2_parallax/2_section/"
);

$html->repeat($section_4, 0, 'page', 'pagePath');
?>