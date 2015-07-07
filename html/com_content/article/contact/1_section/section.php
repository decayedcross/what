<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$contact_1_section = array(
	"id" => "what-contact-section-1",
	"title" => "Contact"
);

echo '<h1 id="'.$contact_1_section["id"].'-h1">';
	echo $contact_1_section["title"];
echo '</h1>';
?>