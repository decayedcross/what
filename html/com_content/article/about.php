<?php
defined('_JEXEC') or die;

require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatAboutSection_1 = array(
    "id" => "what-about-section-1",
	"logoSrc" => "images/what/sample.png",
	"logoAlt" => "Headlight Resto",
	"backgroundImg" => "http://livedemo00.template-help.com/wt_53507/img/parallax-bg-2.jpg"
);

$whatAboutSection_2 = array(
    "id" => "what-about-section-2",
    "colOneHeading" => "WHY US",
    "colOneParagraph" => "Lorem ipsum dolor sit amet conse ctetur 
    adipisicing elit, sed do eiusmod tempor incididunt ut labore 
    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
    Duis aute irure dolor in reprehenderit in voluptate velit.",
    "colOneImgSrc" => "http://livedemo00.template-help.com/wt_53507/img/page2-img1.jpg",
    "colOneImgAlt" => "Office Picture",
    "colTwoHeading" => "HISTORY",
    "colTwoPage" => "what-about-section-2",
    "colTwoPagePath" => "templates/what/html/com_content/article/",
    "colThreeHeading" => "MISSION",
    "colThreePage" => "what-about-section-2-1",
    "colThreePagePath" => "templates/what/html/com_content/article/",
    "colThreeParagraphHeading" => "SUSPENDISSE VITAE MOLESTIE.",
    "colThreeParagraph" => "Vivamus tincidunt, mi eu tincidunt rutrum, 
    lectus purus faucibus tellus, nec vestibulum augue diam at quam. 
    Praesent lacinia at lacus ac fermentum."
);

$whatAboutSection_3 = array(
    "id" => "what-about-section-3",
	"heading" => "OUR TEAM",
	"backgroundImg" => "http://livedemo00.template-help.com/wt_53507/img/parallax-bg-3.jpg",
	"page" => "what-about-section-3",
    "pagePath" => "templates/what/html/com_content/article/"
);

$whatAboutSection_4 = array(
    "id" => "what-about-section-4",
    "colOneHeading" => "WHO WE ARE",
   	"colOnePage" => "what-about-section-4",
    "colOnePagePath" => "templates/what/html/com_content/article/",
    "colTwoHeading" => "OUR STANDARDS",
    "colTwoParagraphHeading" => "SUSPENDISSE NON ARCU EGET.",
    "colTwoParagraph" => "Class aptent taciti sociosqu ad litora torquent per congue, 
    ipsum et sollicitudin suscipit, nibh ex port a neque, pellentesque maximus magna lacus vel.",
    "colTwoPage" => "what-about-section-4-1",
    "colTwoPagePath" => "templates/what/html/com_content/article/",
    "colThreeHeading" => "CLIENTS SAY",
    "colThreePage" => "what-about-section-4-2",
    "colThreePagePath" => "templates/what/html/com_content/article/"
);
?>

<section <?php $html->setID($whatAboutSection_1, 'outer'); ?> <?php $html->backgroundImage($whatAboutSection_1, 'backgroundImg'); ?>  data-uk-parallax="{bg: '-300px'}">
	<div <?php $html->setID($whatAboutSection_1, 'inner'); ?>>
		<div <?php $html->setID($whatAboutSection_1, 'content'); ?>>
			<div <?php $html->setID($whatAboutSection_1, 'center'); ?>>
				<?php echo $html->image($whatAboutSection_1, "logoSrc", "logoAlt"); ?>
			</div>
		</div>
	</div>
</section>


<section <?php $html->setID($whatAboutSection_2, 'outer'); ?>>
	<div <?php $html->setID($whatAboutSection_2, 'inner'); ?>>
		<div <?php $html->setID($whatAboutSection_2, 'content'); ?>>
			<div <?php $html->setID($whatAboutSection_2, 'center'); ?>>
				<article <?php $html->setID($whatAboutSection_2, 'article-left'); ?>>
					<div <?php $html->setID($whatAboutSection_2, 'article-left-padding'); ?>>
						<?php $html->heading($whatAboutSection_2, 'colOneHeading', 2, ''); ?>
						<figure <?php $html->setID($whatAboutSection_2, 'article-left-figure'); ?>>
							<?php echo $html->image($whatAboutSection_2, "colOneImgSrc", "colOneImgAlt"); ?>
						</figure>
						<p <?php $html->setID($whatAboutSection_2, 'article-left-p'); ?>>
							<?php echo $whatAboutSection_2['colOneParagraph']; ?>
						</p>
					</div>
				</article>
				<article <?php $html->setID($whatAboutSection_2, 'article-middle'); ?>>
					<div <?php $html->setID($whatAboutSection_2, 'article-middle-padding'); ?>>
						<?php $html->heading($whatAboutSection_2, 'colTwoHeading', 2, ''); ?>
						<?php $html->repeat($whatAboutSection_2, 2, 'colTwoPage', 'colTwoPagePath'); ?>
					</div>
				</article>
				<article <?php $html->setID($whatAboutSection_2, 'article-right'); ?>>
					<div <?php $html->setID($whatAboutSection_2, 'article-right-padding'); ?>>
						<?php $html->heading($whatAboutSection_2, 'colThreeHeading', 2, ''); ?>
						<?php $html->heading($whatAboutSection_2, 'colThreeParagraphHeading', 3, ''); ?>
						<?php echo $html->paragraph($whatAboutSection_2, 'colThreeParagraph'); ?>
						<ul <?php $html->setID($whatAboutSection_2, 'article-right-ul'); ?>>
							<?php $html->repeat($whatAboutSection_2, 9, 'colThreePage', 'colThreePagePath'); ?>
						</ul>
					</div>
				</article>
			</div>
		</div>
	</div>
</section>

<section <?php $html->setID($whatAboutSection_3, 'outer'); ?> <?php $html->backgroundImage($whatAboutSection_3, 'backgroundImg'); ?>  data-uk-parallax="{bg: '-2300px'}">
	<div <?php $html->setID($whatAboutSection_3, 'inner'); ?>>
		<div <?php $html->setID($whatAboutSection_3, 'content'); ?>>
			<div <?php $html->setID($whatAboutSection_3, 'center'); ?>>
				<?php $html->heading($whatAboutSection_3, 'heading', 2, ''); ?>
				<ul <?php $html->setID($whatAboutSection_3, 'ul'); ?>>
					<?php $html->repeat($whatAboutSection_3, 3, 'page', 'pagePath'); ?>
				</ul>
			</div>
		</div>
	</div>
</section>

<section <?php $html->setID($whatAboutSection_4, 'outer'); ?>>
	<div <?php $html->setID($whatAboutSection_4, 'inner'); ?>>
		<div <?php $html->setID($whatAboutSection_4, 'content'); ?>>
			<div <?php $html->setID($whatAboutSection_4, 'center'); ?>>
				<article <?php $html->setID($whatAboutSection_4, 'article-left'); ?>>
					<div <?php $html->setID($whatAboutSection_4, 'article-left-padding'); ?>>
						<?php $html->heading($whatAboutSection_4, 'colOneHeading', 2, ''); ?>
						<?php $html->repeat($whatAboutSection_4, 2, 'colOnePage', 'colOnePagePath'); ?>
					</div>
				</article>
				<article <?php $html->setID($whatAboutSection_4, 'article-middle'); ?>>
					<div <?php $html->setID($whatAboutSection_4, 'article-middle-padding'); ?>>
						<?php $html->heading($whatAboutSection_4, 'colTwoHeading', 2, ''); ?>
						<?php $html->heading($whatAboutSection_4, 'colTwoParagraphHeading', 4, ''); ?>
						<?php echo $html->paragraph($whatAboutSection_4, 'colTwoParagraph'); ?>
						<ul <?php $html->setID($whatAboutSection_4, 'ul'); ?>>
							<?php $html->repeat($whatAboutSection_4, 9, 'colTwoPage', 'colTwoPagePath'); ?>
						</ul>
					</div>
				</article>
				<article <?php $html->setID($whatAboutSection_4, 'article-right'); ?>>
					<div <?php $html->setID($whatAboutSection_4, 'article-right-padding'); ?>>
						<?php $html->heading($whatAboutSection_4, 'colThreeHeading', 2, ''); ?>
						<?php $html->repeat($whatAboutSection_4, 1, 'colThreePage', 'colThreePagePath'); ?>
					</div>
				</article>
			</div>
		</div>
	</div>
</section>