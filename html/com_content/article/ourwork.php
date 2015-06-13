<?php
defined('_JEXEC') or die;

require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatOurWorkSection_1 = array(
    "id" => "what-ourwork-section-1",
	"logoSrc" => "images/what/sample.png",
	"logoAlt" => "Headlight Resto",
	"backgroundImg" => "http://livedemo00.template-help.com/wt_53507/img/parallax-bg-2.jpg"
);

$whatOurWorkSection_2 = array(
    "id" => "what-ourwork-section-2",
    "heading" => "OUR GALLERY",
    "page" => "what-ourwork-section-2",
    "pagePath" => "templates/what/html/com_content/article/"
);
?>

<section <?php $html->setID($whatOurWorkSection_1, 'outer'); ?> <?php $html->backgroundImage($whatOurWorkSection_1, 'backgroundImg'); ?>  data-uk-parallax="{bg: '-300px'}">
	<div <?php $html->setID($whatOurWorkSection_1, 'inner'); ?>>
		<div <?php $html->setID($whatOurWorkSection_1, 'content'); ?>>
			<div <?php $html->setID($whatOurWorkSection_1, 'center'); ?>>
				<?php echo $html->image($whatOurWorkSection_1, "logoSrc", "logoAlt"); ?>
			</div>
		</div>
	</div>
</section>

<section <?php $html->setID($whatOurWorkSection_2, 'outer'); ?>>
	<div <?php $html->setID($whatOurWorkSection_2, 'inner'); ?>>
		<div <?php $html->setID($whatOurWorkSection_2, 'content'); ?>>
			<div <?php $html->setID($whatOurWorkSection_2, 'center'); ?>>
				<?php $html->heading($whatOurWorkSection_2, 'heading', 2, ''); ?>
				<?php $html->repeat($whatOurWorkSection_2, 8, 'page', 'pagePath'); ?>
			</div>
		</div>
	</div>
</section>