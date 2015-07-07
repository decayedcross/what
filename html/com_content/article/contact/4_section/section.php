<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$contact_4_section = array(
	"id" => "what-contact-section-4",
	"title" => "Contact Form",
	"page" => "content",
	"pagePath" => "templates/what/html/com_content/article/contact/4_section/"
);

echo '<form id="'.$contact_4_section["id"].'-form">';
	echo '<a name="what-contact-form"></a>';
	echo '<h3 class="'.$contact_4_section["id"].'-form-h3">';
		echo $contact_4_section["title"];
	echo '</h3>';
	$html->repeat($contact_4_section, 2, 'page', 'pagePath');
	echo '<input type="hidden" value="'.time().'" id="'.$contact_4_section["id"].'-date" />';
	echo '<input type="hidden" value="'.$_SERVER['REMOTE_ADDR'].'" id="'.$contact_4_section["id"].'-ip" />';
echo '</form>';