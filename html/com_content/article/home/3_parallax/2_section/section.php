<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatHomeSection_4 = array(
	"id" => "what-home-section-4",
	"page" => "repeat",
	"pagePath" => "templates/what/html/com_content/article/home/3_parallax/2_section/"
);
?>

<?php $html->repeat($whatHomeSection_4, 3, 'page', 'pagePath'); ?>