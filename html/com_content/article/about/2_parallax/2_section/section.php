<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatAboutSection_3 = array(
	"id" => "what-about-section-3",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/about/2_parallax/2_section/"
	
);

?>

<?php $html->repeat($whatAboutSection_3, 3, 'page', 'pagePath'); ?>