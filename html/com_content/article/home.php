<?php
defined('_JEXEC') or die;

require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatHomeSection_1 = array(
    "id" => "what-home-section-1",
	"page" => "what-home-section-1",
	"pagePath" => "templates/what/html/com_content/article/"
);
?>

<section <?php $html->sectionID($whatHomeSection_1); ?>>
	<div class="uk-slidenav-position" data-uk-slideshow>
		<ul class="uk-slideshow">
			<?php $html->repeat($whatHomeSection_1, 2, 'page', 'pagePath'); ?>
		</ul>
		<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
		<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
		<ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
			<li data-uk-slideshow-item="0"><a href=""></a></li>
			<li data-uk-slideshow-item="1"><a href=""></a></li>
		</ul>
	</div>
</section>



