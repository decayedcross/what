<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatAboutSection_4 = array(
	"id" => "what-about-section-4",
	"title" => "Meet <span>Mike Finch</span>",
	"image" => "images/what/about/meetmikefinch.png",
	"alt" => "Mike Finch",
	"page" => "unorderedlist",
	"pagePath" => "templates/what/html/com_content/article/about/3_parallax/1_section/"
);

?>

<?php echo $html->heading($whatAboutSection_4, 'title', 1, ''); ?>
<figure>
	<?php echo $html->image($whatAboutSection_4, 'image', 'alt'); ?>
</figure>
<ul>
	<?php $html->repeat($whatAboutSection_4, 6, 'page', 'pagePath'); ?>
</ul>

