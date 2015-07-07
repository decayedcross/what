<?php
defined('_JEXEC') or die;

require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

?>
<?php
$whatFooter = array(
	"id" => "what-footer",
	"copyright" => "<span>TvTown USA</span> ©2015",
	"powered" => "Powered by",
	"viking" => " Viking Web Development",
	"www" => "https://www.vikingwebdevelopment.com"
);
?>
<div <?php $html->setID($whatFooter, 'outer'); ?>>
	<div <?php $html->setID($whatFooter, 'inner'); ?>>
		<div <?php $html->setID($whatFooter, 'content'); ?>>
			<div <?php $html->setID($whatFooter, 'center'); ?>>
				<section <?php $html->setID($whatFooter, 'section'); ?>>
					<p <?php $html->setID($whatFooter, 'p1'); ?>>
						<?php echo $whatFooter['copyright']; ?>	
						<?php $html->link($whatFooter, 'viking', 'www', "Powered by", "", ""); ?>
					</p>
				</section>
			</div>
		</div>
	</div>
</div>