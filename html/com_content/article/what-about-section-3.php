<?php 
$whatAboutSection_3_li_imgSrc = array(
	"http://livedemo00.template-help.com/wt_53507/img/page2-img2.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page2-img3.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page2-img4.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page2-img6.jpg"
);

$whatAboutSection_3_li_imgAlt = array(
	"http://livedemo00.template-help.com/wt_53507/img/page2-img2.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page2-img3.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page2-img4.jpg",
	"http://livedemo00.template-help.com/wt_53507/img/page2-img6.jpg"
);

$whatAboutSection_3_li_heading = array(
	"Eva Adamson",
	"David Austin",
	"Natalie Barnes",
	"Thomas Bishop"
);

$whatAboutSection_3_li_subHeading = array(
	"Proin rutrum luctus urna, sit amet consequat erat molestie vitae.",
	"Fusce lectus erat, condimentum a urna vitae, tincidunt aliqua.",
	"Amet consequat erat molestie vit ae. Fusce lectus erat, condime.",
	"Sit amet consequat erat molestie vitae. Fusce lectus erat, condim."
);

?>
<li <?php $this->setClass($sectionArray, 'li'); ?> >
	<?php echo $this->image($sectionArray, $whatAboutSection_3_li_imgSrc[$key], $whatAboutSection_3_li_imgAlt[$key]); ?>
	<?php $this->heading($sectionArray, $whatAboutSection_3_li_heading[$key], 3, ''); ?>
	<?php echo $this->paragraph($sectionArray, $whatAboutSection_3_li_subHeading[$key]); ?>
</li>