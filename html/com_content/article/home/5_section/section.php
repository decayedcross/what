<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatHomeSection_7 = array(
	"id" => "what-home-section-7",
	"title" => "Contact",
	"page" => "repeat",
	"pageExt" => "p",
	"pagePath" => "templates/what/html/com_content/article/home/5_section/"
);

?>
<div <?php $html->setID($whatHomeSection_7, 'contact'); ?>>
	<article <?php $html->setID($whatHomeSection_7, 'contact-inner'); ?>>
		<?php $html->heading($whatHomeSection_7, 'title', 2, ''); ?>
		<?php $html->repeat($whatHomeSection_7, 3, 'page', 'pagePath'); ?>
	</article>
</div>
<div <?php $html->setID($whatHomeSection_7, 'map'); ?>>
	
</div>