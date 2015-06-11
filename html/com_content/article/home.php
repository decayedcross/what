<?php
defined('_JEXEC') or die;

require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatHomeSection_1 = array(
    "id" => "what-home-section-1",
	"page" => "what-home-section-1",
	"pagePath" => "templates/what/html/com_content/article/",
	"logoImg" => "images/what/sample.png",
	"logoSrc" => "Headlight Resto"
);

$whatHomeSection_2 = array(
    "id" => "what-home-section-2",
	"heading" => "WELCOME!",
	"page" => "what-home-section-2",
	"pagePath" => "templates/what/html/com_content/article/"
);

$whatHomeSection_3 = array(
    "id" => "what-home-section-3",
	"heading" => "CHOOSE <br /> YOUR PIERCING",
	"subHeading" => "Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
	"backgroundImage" => "http://livedemo00.template-help.com/wt_53507/img/parallax-bg-1.jpg"
);

$whatHomeSection_4 = array(
    "id" => "what-home-section-4",
	"heading" => "EVENTS",
	"page" => "what-home-section-4",
	"pagePath" => "templates/what/html/com_content/article/"
);

$whatHomeSection_5 = array(
    "id" => "what-home-section-5",
	"page" => "what-home-section-5",
	"pagePath" => "templates/what/html/com_content/article/"
);

$whatHomeSection_6 = array(
    "id" => "what-home-section-6",
	"heading" => "Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
	"subHeading" => "Read More",
	"headingImage" => "http://livedemo00.template-help.com/wt_53507/img/page1-img9.jpg",
	"headingImageAlt" => "My Alt"
);

$whatHomeSection_7 = array(
    "id" => "what-home-section-7",
	"googleMap" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2967.4344297928023!2d-87.807439!3d41.948003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fcbafdbebbffb%3A0xa8c0c1c7af5889f!2s3742+N+Harlem+Ave%2C+Chicago%2C+IL+60634!5e0!3m2!1sen!2sus!4v1434053904781"
);
?>

<section <?php $html->sectionID($whatHomeSection_1); ?>>
	<div class="uk-slidenav-position" data-uk-slideshow>
		<ul class="uk-slideshow">
			<?php $html->repeat($whatHomeSection_1, 2, 'page', 'pagePath'); ?>
		</ul>
		<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
		<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
	</div>
</section>

<section <?php $html->sectionID($whatHomeSection_2); ?>>
	<div <?php $html->setID($whatHomeSection_2, 'inner'); ?>>
		<div <?php $html->setID($whatHomeSection_2, 'content'); ?>>
			<div <?php $html->setID($whatHomeSection_2, 'center'); ?> <?php $html->setClass($whatHomeSection_2, 'center'); ?>>
				<?php $html->heading($whatHomeSection_2, 'heading', 2, ''); ?>
				<article <?php $html->setID($whatHomeSection_2, 'article'); ?>>
					<?php $html->repeat($whatHomeSection_2, 2, 'page', 'pagePath'); ?>
				</article>
			</div>
		</div>
	</div>
</section>

<section <?php $html->setID($whatHomeSection_3, 'outer'); ?> <?php $html->backgroundImage($whatHomeSection_3, 'backgroundImage'); ?>  data-uk-parallax="{bgp: '100'}">
	<div <?php $html->setID($whatHomeSection_3, 'inner'); ?>>
		<div <?php $html->setID($whatHomeSection_3, 'content'); ?>>
			<div <?php $html->setID($whatHomeSection_3, 'center'); ?>>
				<?php $html->heading($whatHomeSection_3, 'heading', 2, '') ?>
				<?php $html->heading($whatHomeSection_3, 'subHeading', 3, '') ?>
			</div>
		</div>
	</div>
</section>

<section <?php $html->setID($whatHomeSection_4, 'outer'); ?>>
	<div <?php $html->setID($whatHomeSection_4, 'inner'); ?>>
		<div <?php $html->setID($whatHomeSection_4, 'content'); ?>>
				<div <?php $html->setID($whatHomeSection_4, 'center'); ?>>
					<?php $html->heading($whatHomeSection_4, 'heading', 2, '') ?>
					<article <?php $html->setID($whatHomeSection_4, 'article'); ?>>
						<?php $html->repeat($whatHomeSection_4, 2, 'page', 'pagePath'); ?>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>

<section <?php $html->setID($whatHomeSection_5, 'outer'); ?>>
	<div <?php $html->setID($whatHomeSection_5, 'inner'); ?>>
		<div <?php $html->setID($whatHomeSection_5, 'content'); ?>>
			<?php $html->repeat($whatHomeSection_5, 4, 'page', 'pagePath'); ?>
		</div>
	</div>
</section>

<section <?php $html->setID($whatHomeSection_6, 'outer'); ?>>
	<div <?php $html->setID($whatHomeSection_6, 'inner'); ?>>
		<div <?php $html->setID($whatHomeSection_6, 'content'); ?>>
			<div <?php $html->setID($whatHomeSection_6, 'center'); ?>>
				<?php echo $html->image($whatHomeSection_6, "headingImage", "headingImageAlt"); ?>
				<?php $html->heading($whatHomeSection_6, 'heading', 2, '') ?>
				<?php $html->heading($whatHomeSection_6, 'subHeading', 3, '') ?>
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