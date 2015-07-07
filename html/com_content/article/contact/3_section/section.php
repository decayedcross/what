<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$contact_3_section = array(
	"id" => "what-contact-section-3",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/contact/3_section/"
);
?>

<?php $html->repeat($contact_3_section, 2, 'page', 'pagePath'); ?>
