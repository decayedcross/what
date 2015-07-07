<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$package_1_section = array(
	"id" => "what-packages-section-1",
	"title" => "Dish <span>Packages</span>"
);

echo '<h1 id="'.$package_1_section["id"].'-h1">';
	echo $package_1_section["title"];
echo '</h1>';
?>