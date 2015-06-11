<?php
$whatHomeSection_4_images = array(
	"http://livedemo00.template-help.com/wt_53507/img/page1-img4.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page1-img5.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page1-img6.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page1-img7.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page1-img8.jpg"
);

$whatHomeSection_4_imagesAlt = array(
	"1",
	"2",
	"3",
	"4",
	"5"
);
?>
<figure <?php $this->setClass($sectionArray, 'figure'); ?>>
	<?php echo $this->image($sectionArray, $whatHomeSection_4_images[$key], $whatHomeSection_4_imagesAlt[$key]); ?>
</figure>