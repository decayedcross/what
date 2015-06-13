<?php
$whatServicesSection_2_imgSrc = array(
	"http://livedemo00.template-help.com/wt_53507/img/page3-img1.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page3-img2.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page3-img3.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page3-img4.jpg"
);

$whatServicesSection_2_imgAlt = array(
	"Headlight Resto",
	"Headlight Resto",
	"Headlight Resto",
	"Headlight Resto"
);

$whatServicesSection_2_heading = array(
	"NDISSE NON ARCU EGET.",
	"NTUM DOLOR PHARE.",
	"CONDIMENTUM DOLOR.",
	"EFFICITUR LIGULA NISL."
);

$whatServicesSection_2_paragraph = array(
	"Class aptent taciti sociosqu ad litora torquent 
	per congue, ipsum et sollicimagna lacus vel. tellus. 
	Morbi tempor ipsum sed magna dapibus, at lacinia odio 
	gravida. Nulla finibus ante vitae nisi hendrerit tempor.",
	"Accumsan lorem nec fringilla porta. ex ea commodo consequat. 
	Duis aute occaecat cupidatat non proident, sunt eu malesuada 
	fermentum, felis urna malesuada sapien, et varius metus ex 
	estibulum ante ipsu.",
	"Class aptent taciti sociosqu ad litora torquent per congue, 
	ipsum et sollicimagna lacus vel. tellus. Morbi tempor ipsum 
	sed magna dapibus, at lacinia odio gravida. Nulla finibus 
	ante vitae nisi hendrerit tempor.",
	"Donec ut sapien ut ligula auctor egestas. Vivamus vel 
	sem enim. Phasellus ex ea commodo consequat. Duis aute 
	irure dolor in reprehenderit voluptat nulla pariatur. 
	Excepteur sint occacupidatat non proid."
);
?>
<div <?php $this->setClass($sectionArray, 'figure-article-container'); ?>>
	<figure <?php $this->setClass($sectionArray, 'figure'); ?>>
		<?php echo $this->image($sectionArray, $whatServicesSection_2_imgSrc[$key], $whatServicesSection_2_imgAlt[$key]); ?>
	</figure>
	<article  <?php $this->setClass($sectionArray, 'article'); ?>>
		<?php $this->heading($sectionArray, $whatServicesSection_2_heading[$key], 4, ''); ?>
		<?php echo $this->paragraph($sectionArray, $whatServicesSection_2_paragraph[$key]); ?>
	</article>
</div>