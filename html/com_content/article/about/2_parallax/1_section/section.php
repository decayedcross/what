<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatAboutSection_2 = array(
	"id" => "what-about-section-2",
	"title" => "About <span>TV Town USA</span>",
	"videoSrc" => "https://www.youtube.com/embed/vHByDzddUoQ",
	"heading" => "Why limit yourself? <span>With Blockbuster @Home™</span>, your choices for entertainment are as big as your imagination.",
	"paragraph1" => "<span>Blockbuster @Home</span> from <span>Dish Masters</span> and <span>TV Town USA</span> allow you to stream
		thousands of movies from EPIX, STARZ, and others to your computer or iPad with dishanywhere.com and the 
		free DISH Anywhere™ Mobile App.",
	"paragraph2" => "<span>Blockbuster @Home</span> offers 20 entertainment channels including STARZ® Cinema,
		EPIX, Sony Movie Channel, Palladia, and more! Connect your HD DVR to broadband and watch thousands of movies,
		TV shows, kids' titles and Spanish-language favorites instantly On Demand."
);

?>
<section <?php $html->setID($whatAboutSection_2, 'wrap'); ?>>
	<figure <?php $html->setID($whatAboutSection_2, 'figure'); ?>>
		<iframe src="<?php echo $whatAboutSection_2['videoSrc']; ?>">

		</iframe>
	</figure>
	<section <?php $html->setID($whatAboutSection_2, 'article-wrap'); ?>>
		<article <?php $html->setID($whatAboutSection_2, 'article'); ?>>
			<?php echo $html->heading($whatAboutSection_2, 'heading', 4, ''); ?>
			<?php echo $html->paragraph($whatAboutSection_2, 'paragraph1'); ?>
			<?php echo $html->paragraph($whatAboutSection_2, 'paragraph2'); ?>
		</article>
	</section>
</section>
