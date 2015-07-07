<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatHomeSection_3 = array(
	"id" => "what-home-section-3",
	"title" => "Satellite <span class='red'>Package Options</span>",
	"articleOneTitle" => "America's <span class='red'>Top 120</span>",
	"articleOneP" => "An exceptionally well-priced programming package that will please every member of your family. 
	This package provides you with the best in sports, news, and family entertainment including: USA, CMT, Disney, ESPN and E!.",
	"articleTwoTitle" => "America's <span class='red'>Top 120 Plus</span>",
	"articleTwoP" => "This packages allows even more entertainment options with over 190 channels. It gives you everything you receive 
	with America's Top 120, plus the addition of your local Regional Sports Network(s) (based on ZIP code) and FOX Soccer Channel.",
	"articleThreeTitle" => "America's <span class='red'>Top 200</span>",
	"articleThreeP" => "Our most popular packages gives you over  235 channels to enjoy, including the best in family and sports entertainment, 
	such as  Disney XD, Bravo, Nick Jr., NFL Network and MLB Network.",
	"articleFourTitle" => "America's <span class='red'>Top 250</span>",
	"articleFourP" => "With this all-inclusive package you get over 290 of your favorite programming channels.
	Includes 18 movie channels and other favorites plus The Movie Channel, Do It Yourself, H2 and Nicktoons."
);
?>

<?php $html->heading($whatHomeSection_3, 'title', 2, ''); ?>
<div <?php $html->setID($whatHomeSection_3, 'one'); ?> <?php $html->setClass($whatHomeSection_3, 'div'); ?>>
	<div <?php $html->setID($whatHomeSection_3, 'one'); ?> <?php $html->setClass($whatHomeSection_3, 'content'); ?>>
		<?php $html->heading($whatHomeSection_3, 'articleOneTitle', 3, ''); ?>
		<p <?php $html->setID($whatHomeSection_3, 'one-p'); ?> <?php $html->setClass($whatHomeSection_3, 'p'); ?>>
			<?php echo $whatHomeSection_3['articleOneP']; ?>
		</p>
	</div>
</div>
<div <?php $html->setID($whatHomeSection_3, 'two'); ?> <?php $html->setClass($whatHomeSection_3, 'div'); ?>>
	<div <?php $html->setID($whatHomeSection_3, 'two'); ?> <?php $html->setClass($whatHomeSection_3, 'content'); ?>>
		<?php $html->heading($whatHomeSection_3, 'articleTwoTitle', 3, ''); ?>
		<p <?php $html->setID($whatHomeSection_3, 'two-p'); ?> <?php $html->setClass($whatHomeSection_3, 'p'); ?>>
			<?php echo $whatHomeSection_3['articleTwoP']; ?>
		</p>
	</div>
</div>
<div <?php $html->setID($whatHomeSection_3, 'three'); ?> <?php $html->setClass($whatHomeSection_3, 'div'); ?>>
	<div <?php $html->setID($whatHomeSection_3, 'three'); ?> <?php $html->setClass($whatHomeSection_3, 'content'); ?>>
		<?php $html->heading($whatHomeSection_3, 'articleThreeTitle', 3, ''); ?>
		<p <?php $html->setID($whatHomeSection_3, 'Three-p'); ?> <?php $html->setClass($whatHomeSection_3, 'p'); ?>>
			<?php echo $whatHomeSection_3['articleThreeP']; ?>
		</p>
	</div>
</div>
<div <?php $html->setID($whatHomeSection_3, 'four'); ?> <?php $html->setClass($whatHomeSection_3, 'div'); ?>>
	<div <?php $html->setID($whatHomeSection_3, 'four'); ?> <?php $html->setClass($whatHomeSection_3, 'content'); ?>>
		<?php $html->heading($whatHomeSection_3, 'articleFourTitle', 3, ''); ?>
		<p <?php $html->setID($whatHomeSection_3, 'four-p'); ?> <?php $html->setClass($whatHomeSection_3, 'p'); ?>>
			<?php echo $whatHomeSection_3['articleFourP']; ?>
		</p>
	</div>
</div

