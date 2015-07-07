<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatHomeSection_6 = array(
	"id" => "what-home-section-6",
	"title" => "Everything you could want",
	"p" => "including HBO, Cinemax, SHOWTIME® and STARZ®."
	
);

?>

<div <?php $html->sectionID($whatHomeSection_6); ?>>
	<?php  $html->heading($whatHomeSection_6, 'title', 2, ''); ?>
	<p <?php $html->setID($whatHomeSection_6, 'p'); ?>>
		<?php echo $whatHomeSection_6['p']; ?>
	</p>
</div>