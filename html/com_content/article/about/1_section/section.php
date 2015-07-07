<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatAboutSection_1 = array(
	"id" => "what-about-section-1",
	"title" => "About <span>TV Town USA</span>",

);
?>

<?php echo $html->heading($whatAboutSection_1, 'title', 1, ''); ?>