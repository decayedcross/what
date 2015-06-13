<?php 
$whatHomeSection_1_images = array(
	"http://livedemo00.template-help.com/wt_53507/img/slide-1.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/slide-2.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/slide-3.jpg"
);

$whatHomeSection_1_imagesAlt = array(
	"Headlight Resto",
	"Headlight Resto",
	"Headlight Resto"
);

$whatHomeSection_1_paragraphs = array(
	"Only $40 For Saftey",
	"Only $40 For Confidence",
	"Only $40 For Value"
);
?>
<li>
	<img src="<?php echo $whatHomeSection_1_images[$key]; ?>" id="<?php echo $sectionArray['id'].'-'.$key; ?>" alt="<?php echo $whatHomeSection_1_imagesAlt[$key]; ?>" />
	<div <?php $this->setClass($sectionArray, 'overlay uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center'); ?>>
		<div <?php $this->setClass($sectionArray, 'overlay-content'); ?>>
			<?php echo $this->image($sectionArray, 'logoImg', 'logoSrc'); ?>
			<?php echo $this->paragraph($sectionArray, $whatHomeSection_1_paragraphs[$key]); ?>
		</div>
	</div>
</li>