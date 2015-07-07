<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatHomeSection_5 = array(
	 "id" => "what-home-section-5",
	"page" => "paragraphs",
	"pagePath" => "templates/what/html/com_content/article/home/4_parallax/1_section/",
	"pageExt" => "p"
);

?>

<?php $html->repeat($whatHomeSection_5, 2, 'page', 'pagePath'); ?>