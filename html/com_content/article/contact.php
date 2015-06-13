<?php
defined('_JEXEC') or die;

require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatContactSection_1 = array(
    "id" => "what-contact-section-1",
	"logoSrc" => "images/what/sample.png",
	"logoAlt" => "Headlight Resto",
	"backgroundImg" => "http://livedemo00.template-help.com/wt_53507/img/parallax-bg-2.jpg"
);

$whatContactSection_2 = array(
    "id" => "what-contact-section-2",
    "heading" => "CONTACT FORM",
    "page" => "what-contact-section-2",
    "pagePath" => "templates/what/html/com_content/article/"
);

$whatContactSection_3 = array(
    "id" => "what-contact-section-3",
	"heading" => "OUR ADDRESSE",
	"backgroundImg" => "http://livedemo00.template-help.com/wt_53507/img/parallax-bg-6.jpg",
	"page" => "what-contact-section-3",
    "pagePath" => "templates/what/html/com_content/article/"
);

$whatHomeSection_7 = array(
    "id" => "what-home-section-7",
	"googleMap" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2967.4344297928023!2d-87.807439!3d41.948003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fcbafdbebbffb%3A0xa8c0c1c7af5889f!2s3742+N+Harlem+Ave%2C+Chicago%2C+IL+60634!5e0!3m2!1sen!2sus!4v1434053904781"
);

?>

<section <?php $html->setID($whatContactSection_1, 'outer'); ?> <?php $html->backgroundImage($whatContactSection_1, 'backgroundImg'); ?>  data-uk-parallax="{bg: '-300px'}">
	<div <?php $html->setID($whatContactSection_1, 'inner'); ?>>
		<div <?php $html->setID($whatContactSection_1, 'content'); ?>>
			<div <?php $html->setID($whatContactSection_1, 'center'); ?>>
				<?php echo $html->image($whatContactSection_1, "logoSrc", "logoAlt"); ?>
			</div>
		</div>
	</div>
</section>

<section <?php $html->setID($whatContactSection_2, 'outer'); ?>>
	<div <?php $html->setID($whatContactSection_2, 'inner'); ?>>
		<div <?php $html->setID($whatContactSection_2, 'content'); ?>>
			<div <?php $html->setID($whatContactSection_2, 'center'); ?>>
				<?php $html->heading($whatContactSection_2, 'heading', 2, ''); ?>
				<?php $html->repeat($whatContactSection_2, 6, 'page', 'pagePath'); ?>
			</div>
		</div>
	</div>
</section>

<section <?php $html->setID($whatContactSection_3, 'outer'); ?> <?php $html->backgroundImage($whatContactSection_3, 'backgroundImg'); ?>  data-uk-parallax="{bg: '-300px'}">
	<div <?php $html->setID($whatContactSection_3, 'inner'); ?>>
		<div <?php $html->setID($whatContactSection_3, 'content'); ?>>
			<div <?php $html->setID($whatContactSection_3, 'center'); ?>>
				<?php $html->heading($whatContactSection_3, 'heading', 2, ''); ?>
				<?php $html->repeat($whatContactSection_3, 4, 'page', 'pagePath'); ?>
			</div>
		</div>
	</div>
</section>

<section <?php $html->setID($whatHomeSection_7, 'outer'); ?>>
	<div <?php $html->setID($whatHomeSection_7, 'inner'); ?>>
		<div <?php $html->setID($whatHomeSection_7, 'content'); ?>>
			<div <?php $html->setID($whatHomeSection_7, 'cover'); ?>>
			</div>
		</div>
	</div>
</section>