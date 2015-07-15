<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$section_3 = array(
	"id" => "what-contact-section-3",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/contact/3_section/"
);

$html->repeat($section_3, 2, 'page', 'pagePath');
?>