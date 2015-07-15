<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$section_2 = array(
	"id" => "what-contact-section-2",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/contact/1_parallax/2_section/"
);

$html->repeat($section_2, 2, 'page', 'pagePath');
?>