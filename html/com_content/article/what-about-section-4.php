<?php 
$whatAboutSection_4_heading = array(
	"NON ARCU EGET.",
	"NULLA CONDIMENTUM.",
	"CONDIMENTUM PORTA."
);

$whatAboutSection_4_paragraph = array(
	"Proin rutrum luctus urna, sit amet lectus erat, condimentum a urna vitae citudin blandit. Suspendisse non arcu eget libero imperdiet sagittis.",
	"Sed ornare scelerisque purus ut intermetus ac, lobortis mattis elit. Aenean fermentum, justo ut vehicula aliquet, eros dolor molestie est, sit.",
	"Maecenas molestie, turpis a viverra condimentum, tellus nisl dignissim ipsum, sed commodo tellus est eget velit. Sed ornare scelerisque."
);

?>

<div <?php $this->setClass($sectionArray, 'container'); ?>>
	<div <?php $this->setClass($sectionArray, 'left'); ?>>
		<?php $this->span($sectionArray, $key + 1); ?>
	</div>
	<div <?php $this->setClass($sectionArray, 'right'); ?>>
		<?php $this->heading($sectionArray, $whatAboutSection_4_heading[$key], 4, ''); ?>
		<?php echo $this->paragraph($sectionArray, $whatAboutSection_4_paragraph[$key]); ?>
	</div>
</div>