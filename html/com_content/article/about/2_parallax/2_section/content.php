<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatAboutSection_2Item = array(
	"id" => "what-about-section-2-item"
);
$whatAboutSection_2Icons = array(
	"fa fa-home",
	"fa fa-beer",
	"fa fa-building",
	"fa fa-users"
);
$whatAboutSection_2Links = array(
	"http://www.tvtownusa.com/packages",
	"http://www.tvtownusa.com/packages",
	"http://www.tvtownusa.com/packages",
	"http://www.tvtownusa.com/packages"
);
$whatAboutSection_2Title_1 = array(
	"Residential:",
	"Bars & <br />Restaurants:",
	"Office & <br />Break Rooms:",
	"Wating Areas:"
);
$whatAboutSection_2Title_2 = array(
	"Home, Lake, House",
	"Sports Games for your customers",
	"Keep your guests and<br /> employees conntected",
	"Wake up the waiting room"
);
?>

<div <?php $html->setClass($whatAboutSection_2Item, 'outer'); ?>>
	<a href="<?php echo $whatAboutSection_2Links[$key]; ?>">
		<i class="<?php echo $whatAboutSection_2Icons[$key]; ?>"></i>
		<div <?php $html->setClass($whatAboutSection_2Item, 'inner'); ?>>
			<div <?php $html->setClass($whatAboutSection_2Item, 'content'); ?>>
				<div <?php $html->setClass($whatAboutSection_2Item, 'center'); ?>>
					<h4 <?php $html->setClass($whatAboutSection_2Item, 'title'); ?>>
						<?php echo $whatAboutSection_2Title_1[$key]; ?>						
					</h4>	
					<span <?php $html->setClass($whatAboutSection_2Item, 'title-2'); ?>><?php echo $whatAboutSection_2Title_2[$key]; ?> </span>
				</div>
			</div>
		</div>
	</a>
</div>