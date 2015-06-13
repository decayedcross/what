<?php 
$whatAboutSection_4_2_paragraph = array(
	"Сnse ctetur adipisic incididunt ut labo re magna aliqua",
	"Сnse ctetur adipisic incididunt ut labo re magna aliqua."
);

$whatAboutSection_4_2_span = array(
	"Maria Brooks",
	"Steven Donovan"
);

?>

<div <?php $this->setClass($sectionArray, '2-container'); ?>>
	<div <?php $this->setClass($sectionArray, '2-left'); ?>>
		<?php $this->span($sectionArray, '"'); ?>
	</div>
	<div <?php $this->setClass($sectionArray, '2-right'); ?>>
		<?php echo $this->paragraph($sectionArray, $whatAboutSection_4_2_paragraph[$key]); ?>
		<?php $this->span($sectionArray, $whatAboutSection_4_2_span[$key]); ?>
	</div>
</div>