<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$section_4 = array(
	"id" => "what-services-section-4",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/offerings/2_parallax/2_section/"
);

$html->repeat($section_4, 5, 'page', 'pagePath');
?>