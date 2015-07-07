<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$package_2_section = array(
	"id" => "what-packages-section-2",
	"title" => "Dish <span>Packages</span>",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/packages/2_section/"
);

?>
<?php $html->repeat($package_2_section, 5, 'page', 'pagePath'); ?>