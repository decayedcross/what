<?php
$whatHomeSection_2_images = array(
	"http://livedemo00.template-help.com/wt_53507/img/page1-img1.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page1-img2.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page1-img3.jpg"
);

$whatHomeSection_2_imagesAlt = array(
	"Headlight Resto",
	"Headlight Resto",
	"Headlight Resto"
);

$whatHomeSection_2_paragraphs = array(
	"Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
	dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
	ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
	nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.",
	"Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
	dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
	commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
	pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.",
	"Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore 
	magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt."
);
?>

<figure <?php $this->setClass($sectionArray, 'figure'); ?>>
	<div <?php $this->setClass($sectionArray, 'figure-container'); ?>>
		<?php echo $this->image($sectionArray, $whatHomeSection_2_images[$key], $whatHomeSection_2_imagesAlt[$key]); ?>
		<figcaption <?php $this->setClass($sectionArray, 'figure-caption'); ?>>
			<?php echo $this->paragraph($sectionArray, $whatHomeSection_2_paragraphs[$key]); ?>
		</figcaption>
	</div>
</figure>