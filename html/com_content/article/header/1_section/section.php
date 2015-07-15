<?php $config = JFactory::getConfig();
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$section_1 = array(
	"id" => "what-contact-section-1",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/header/1_section/"
);

$html->repeat($section_1, 6, 'page', 'pagePath');
?>
