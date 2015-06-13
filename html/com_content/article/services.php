<?php
defined('_JEXEC') or die;

require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatServicesSection_1 = array(
    "id" => "what-services-section-1",
	"logoSrc" => "images/what/sample.png",
	"logoAlt" => "Headlight Resto",
	"backgroundImg" => "http://livedemo00.template-help.com/wt_53507/img/parallax-bg-2.jpg"
);

$whatServicesSection_2 = array(
    "id" => "what-services-section-2",
    "heading" => "HIGH QUALITY PIERCING SERVICES",
    "page" => "what-services-section-2",
    "pagePath" => "templates/what/html/com_content/article/"
);

$whatServicesSection_3 = array(
    "id" => "what-services-section-3",
	"heading" => "SERVICES LIST",
	"backgroundImg" => "http://livedemo00.template-help.com/wt_53507/img/parallax-bg-4.jpg",
	"page" => "what-services-section-3",
    "pagePath" => "templates/what/html/com_content/article/"
);

$whatServicesSection_4 = array(
    "id" => "what-services-section-4",
	"heading" => "PIERCING AFTERCARE",
	"page" => "what-services-section-4",
    "pagePath" => "templates/what/html/com_content/article/"
);
?>

<section <?php $html->setID($whatServicesSection_1, 'outer'); ?> <?php $html->backgroundImage($whatServicesSection_1, 'backgroundImg'); ?>  data-uk-parallax="{bg: '-300px'}">
	<div <?php $html->setID($whatServicesSection_1, 'inner'); ?>>
		<div <?php $html->setID($whatServicesSection_1, 'content'); ?>>
			<div <?php $html->setID($whatServicesSection_1, 'center'); ?>>
				<?php echo $html->image($whatServicesSection_1, "logoSrc", "logoAlt"); ?>
			</div>
		</div>
	</div>
</section>

<section <?php $html->setID($whatServicesSection_2, 'outer'); ?>>
	<div <?php $html->setID($whatServicesSection_2, 'inner'); ?>>
		<div <?php $html->setID($whatServicesSection_2, 'content'); ?>>
			<div <?php $html->setID($whatServicesSection_2, 'center'); ?>>
				<?php $html->heading($whatServicesSection_2, 'heading', 2, ''); ?>
				<?php $html->repeat($whatServicesSection_2, 3, 'page', 'pagePath'); ?>
			</div>
		</div>
	</div>
</section>

<section <?php $html->setID($whatServicesSection_3, 'outer'); ?> <?php $html->backgroundImage($whatServicesSection_3, 'backgroundImg'); ?>  data-uk-parallax="{bg: '-300px'}">
	<div <?php $html->setID($whatServicesSection_3, 'inner'); ?>>
		<div <?php $html->setID($whatServicesSection_3, 'content'); ?>>
			<div <?php $html->setID($whatServicesSection_3, 'center'); ?>>
				<?php $html->heading($whatServicesSection_3, 'heading', 2, ''); ?>
				<?php $html->repeat($whatServicesSection_3, 23, 'page', 'pagePath'); ?>
			</div>
		</div>
	</div>
</section>

<section <?php $html->setID($whatServicesSection_4, 'outer'); ?>>
	<div <?php $html->setID($whatServicesSection_4, 'inner'); ?>>
		<div <?php $html->setID($whatServicesSection_4, 'content'); ?>>
			<div <?php $html->setID($whatServicesSection_4, 'center'); ?>>
				<?php $html->heading($whatServicesSection_4, 'heading', 2, ''); ?>
				<?php $html->repeat($whatServicesSection_4, 2, 'page', 'pagePath'); ?>
			</div>
		</div>
	</div>
</section>