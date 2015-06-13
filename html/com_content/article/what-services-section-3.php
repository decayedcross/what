<?php
$whatServicesSection_3_li = array(
	"Maecenas molestie, turpis a viverra",
	"Condimentum, tellus nisl",
	"Commodo tellus est eget velit",
	"Sed ornare scelerisque",
	"Integer neque ex, blandit eu met",
	"Lobortis mattis elit",
	"Aenean fermentum, justo",
	"Etiam euismod eros nec",
	"Integer neque ex, blandit eu met",
	"Lobortis mattis elit",
	"Aenean fermentum, justo",
	"Etiam euismod eros nec",
	"Maecenas molestie, turpis a viverra",
	"Condimentum, tellus nisl",
	"Commodo tellus est eget velit",
	"Sed ornare scelerisque",
	"Commodo tellus est eget velit",
	"Sed ornare scelerisque",
	"Integer neque ex, blandit eu met",
	"Lobortis mattis elit",
	"Aenean fermentum, justo",
	"Etiam euismod eros nec",
	"Cras ante velit, gravid molestie",
	"Donec congue vehicula"
);
?>
<?php if($key == 0 || $key == 8 || $key == 16){ ?>
<ul <?php $this->setClass($sectionArray, 'ul'); ?>>
<?php } ?>
	<li <?php $this->setClass($sectionArray, 'li'); ?> >
		<span class="uk-icon-check"></span> <?php echo $whatServicesSection_3_li[$key]; ?>
	</li>
<?php if($key == 7 || $key == 15 || $key == 23){ ?>
</ul>
<?php } ?>