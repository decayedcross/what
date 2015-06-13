<?php
$whatHomeSection_4_icons = array(
	"uk-icon-facebook",
	"uk-icon-twitter",
	"uk-icon-google-plus"
);

$whatHomeSection_4_iconsLink = array(
	"uk-icon-facebook",
	"uk-icon-twitter",
	"uk-icon-google-plus"
);
?>

<li <?php $this->setClass($sectionArray, 'li'); ?>>
	<a <?php $this->setClass($sectionArray, 'link'); ?> href="<?php echo $whatHomeSection_4_iconsLink[$key]; ?>">
		<i <?php $this->setClass($sectionArray, 'i '.$whatHomeSection_4_icons[$key]); ?>></i>
	</a>
</li>