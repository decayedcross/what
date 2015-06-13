<?php
$whatServicesSection_4_imgSrc = array(
	"http://livedemo00.template-help.com/wt_53507/img/page3-img5.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page3-img6.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page3-img7.jpg"
);

$whatServicesSection_4_imgAlt = array(
	"My Img Alt",
	"My Img Alt",
	"My Img Alt"
);

$whatServicesSection_4_paragraph = array(
	"Lorem ipsum dolor sit amet conse ctetur adipisicing elit, 
	sed do eiusmod tempor incididunt ut labore et dolore magna 
	aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
	ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis 
	aute irure dolor in reprehenderit in voluptate velit esse cillum 
	dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
	non proident, sunt in culpa qui officia deserunt.",
	"Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
	Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
	nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
	reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
	pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
	culpa qui officia deserunt.",
	"Dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor 
	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
	non proident, sunt in culpa qui officia deserunt."
);
?>

<ul <?php $this->setClass($sectionArray, 'ul'); ?>>
	<li <?php $this->setClass($sectionArray, 'li'); ?>>
		<?php echo $this->image($sectionArray, $whatServicesSection_4_imgSrc[$key], $whatServicesSection_4_imgAlt[$key]); ?>
		<?php echo $this->paragraph($sectionArray, $whatServicesSection_4_paragraph[$key]); ?>
	</li>
</ul>