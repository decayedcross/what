<?php
$whatServicesSection_4_imgSmallSrc = array(
	"http://livedemo00.template-help.com/wt_53507/img/page4-img1.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img2.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img3.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img4.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img5.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img6.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img7.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img8.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img9.jpg"
);

$whatServicesSection_4_imgSmallAlt = array(
	"My Img Alt",
	"My Img Alt",
	"My Img Alt",
	"My Img Alt",
	"My Img Alt",
	"My Img Alt",
	"My Img Alt",
	"My Img Alt",
	"My Img Alt"
);

$whatServicesSection_4_imgLargeSrc = array(
	"http://livedemo00.template-help.com/wt_53507/img/page4-img1_original.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img2_original.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img3_original.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img4_original.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img5.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img6_original.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img7_original.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img8_original.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page4-img9.jpg"
);

$whatServicesSection_4_imgLargeAlt = array(
	"My Img Alt",
	"My Img Alt",
	"My Img Alt",
	"My Img Alt",
	"My Img Alt",
	"My Img Alt",
	"My Img Alt",
	"My Img Alt",
	"My Img Alt"
);

$whatServicesSection_4_imgHeading = array(
	"DONEC TRISTIQUE PHARETRA.",
	"ETIAM LIGULA IPSUM, FINIBUS.",
	"LIGULA IPSUM, FINIBUS EGET.",
	"FUSCE LAOREET MASSA AC ORC.",
	"NUNC HENDRERIT, NIBH PRET.",
	"NCHENDRERIT, NIBH PRETIUM.",
	"PELLENTESQUE ENIM METUS.",
	"ESQUE ENIM METUS, ALIQUAM.",
	"SUSPENDISSE A NIBH AT IPSUM."
);

$whatServicesSection_4_imgParagraph = array(
	"Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi.",
	"Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi.",
	"Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi.",
	"Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi.",
	"Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi.",
	"Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi.",
	"Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi.",
	"Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi.",
	"Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incidi."
);
?>
<?php if($key == 0 || $key == 3 || $key == 6){ ?>
<ul <?php $this->setClass($sectionArray, 'ul'); ?>>
<?php } ?>
	<li <?php $this->setClass($sectionArray, 'li'); ?>>
		<figure <?php $this->setClass($sectionArray, 'figure uk-overlay uk-overlay-hover'); ?>>
    		<a <?php $this->setClass($sectionArray, 'a'); ?> href="<?php echo $whatServicesSection_4_imgLargeSrc[$key]; ?>" data-uk-lightbox title="<?php echo $whatServicesSection_4_imgLargeAlt[$key]; ?>">
				<?php echo $this->image($sectionArray, $whatServicesSection_4_imgSmallSrc[$key], $whatServicesSection_4_imgSmallAlt[$key]); ?>
				<div  <?php $this->setClass($sectionArray, 'overlay uk-overlay-panel uk-overlay-icon'); ?>></div>
			</a>
		</figure>
		<?php $this->heading($sectionArray, $whatServicesSection_4_imgHeading[$key], 4, ''); ?>
		<?php echo $this->paragraph($sectionArray, $whatServicesSection_4_imgParagraph[$key]); ?>
	</li>
<?php if($key == 2 || $key == 5 || $key == 9){ ?>
</ul>
<?php } ?>