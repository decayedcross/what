<?php
defined('_JEXEC') or die;

require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatFooterSection_1 = array(
    "id" => "what-footer-section-1",
	"page" => "what-footer-section-1",
	"pagePath" => "templates/what/html/mod_custom/",
	"paragraph" => "Lorem ipsum dolor sit amet conse ctetur adipisicing elit, 
	sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
	ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
	ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
	velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.",
	"copyright" => "Piercing © 2015. Privacy policy"
);
?>

<footer <?php $html->setID($whatFooterSection_1, 'outer'); ?>>
	<section <?php $html->setID($whatFooterSection_1, 'inner'); ?>>
		<div <?php $html->setID($whatFooterSection_1, 'content'); ?>>
				<div <?php $html->setID($whatFooterSection_1, 'center'); ?>>
					<?php echo $html->paragraph($whatFooterSection_1, 'paragraph') ?>
					<ul <?php $html->setID($whatFooterSection_1, 'ul'); ?>>
						<?php $html->repeat($whatFooterSection_1, 2, 'page', 'pagePath'); ?>
					</ul>
					<?php echo $html->span($whatFooterSection_1, 'copyright') ?>
				</div>
			</div>
		</div>
	</section>
</footer>