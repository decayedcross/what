<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$section_4_1 = array(
	"id" => "what-home-section-2",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/home/4_parallax/2_section/"
);

$html->repeat($section_4_1, 2, 'page', 'pagePath');
?>