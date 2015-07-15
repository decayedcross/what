<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$section_3 = array(
	"id" => "what-services-section-3",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/offerings/2_parallax/1_section/"
);

$html->repeat($section_3, 3, 'page', 'pagePath');
?>