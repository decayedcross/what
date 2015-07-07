<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatHomeSection_4Item = array(
	"id" => "what-home-section-4-item",
	"pageExt" => "p"
);
$whatHomeSection_4Id = array(
	"1",
	"2",
	"3",
	"4",
	"id" => "what-home-section-4-item",
	"pageExt" => "p"
);
$whatHomeSection_4Icons = array(
	"fa fa-home",
	"fa fa-beer",
	"fa fa-building",
	"fa fa-users"
);
$whatHomeSection_4Links = array(
	"http://www.tvtownusa.com/packages",
	"http://www.tvtownusa.com/packages",
	"http://www.tvtownusa.com/packages",
	"http://www.tvtownusa.com/packages"
);
$whatHomeSection_4P = array(
	"Residential:",
	"Bars & Restaurants:",
	"Office & Break Rooms:",
	"Waiting Areas:"
);
$whatHomeSection_4Span = array(
	"Home, Lake House,",
	"Sports Games for your customers",
	"Keep your guests and employees connected",
	"Wake up the waiting room"	
);
?>

<div <?php $html->setClass($whatHomeSection_4Item, 'outer'); ?> <?php $html->setRepeatID($whatHomeSection_4Id, 'pageExt', $whatHomeSection_4Id[$key]); ?>>
	<a href="<?php echo $whatHomeSection_4Links[$key]; ?>">
		<i class="<?php echo $whatHomeSection_4Icons[$key]; ?>"></i>
		<div <?php $html->setClass($whatHomeSection_4Item, 'inner'); ?>>
			<div <?php $html->setClass($whatHomeSection_4Item, 'content'); ?>>
				<div <?php $html->setClass($whatHomeSection_4Item, 'center'); ?>>
					<p <?php $html->setClass($whatHomeSection_4Item, 'p'); ?>>
						<?php echo $whatHomeSection_4P[$key]; ?>
						<span><?php echo $whatHomeSection_4Span[$key]; ?></span>
					</p>		
				</div>
			</div>
		</div>
	</a>
</div>