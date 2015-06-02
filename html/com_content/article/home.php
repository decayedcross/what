<?php
defined('_JEXEC') or die;
?>
<?php //echo $this->item->text; ?>

<?php
function enc_HTMLParagraphs($paragraphs){
	foreach($paragraphs as $paragraphsKey => $paragraphsValue){
		echo '<p>'.$paragraphsValue.'</p>';
	}
}

function enc_HTMLButton($array){
	echo '<a href="'.$array[buttonLink].'" id="'.$array[id].'-button" class="'.$array[id].'-button uk-button uk-button-link">';
		echo $array[buttonText];
	echo '</a>';
}

function encHTML_HGroup($array, $titleHeadingNumber, $subTitleHeadingNumber){
	echo '<hgroup id="'.$array[id].'-hgroup" class="'.$array[id].'-hgroup">';
		echo '<h'.$titleHeadingNumber.'>';
			echo $array[title];
		echo '</h'.$titleHeadingNumber.'>';
		echo '<h'.$subTitleHeadingNumber.'>';		
			echo $array[subTitle];
		echo '</h'.$subTitleHeadingNumber.'>';
	echo '</hgroup>';
}

function encHTML_ImageHoverOverlay($sectionArray, $array){
	echo '<div class="uk-overlay uk-overlay-hover">';
		echo '<img src="'.$array[image].'" id="'.$sectionArray[id].'-image" />';
		echo '<img src="'.$array[imageHover].'" id="'.$sectionArray[id].'-imageHover" class="uk-overlay-panel uk-overlay-image uk-overlay-fade" />';
		echo '<a class="uk-position-cover"></a>';
	echo '</div>';
}

function encHTML_SlideShow($sectionArray, $array){
	echo '<ul class="uk-slideshow uk-slideshow-fullscreen" data-uk-slideshow="{'.$sectionArray[slideShowSettings].'}">';
		foreach ($array as $arrayKey => $arrayValue){
			echo '<li>';
				echo '<img src="'.$arrayValue.'" />';
			echo '</li>';
		}
	echo '</ul>';
}
?>


<?php
//BAPC HOME SLIDE SHOW
$bapcHomeSlideShow = array(
	"id" => "bapc-home-slideshow",
    "slideShowSettings" => "autoplay:true, pauseOnHover: false, autoplayInterval: 5500, duration: 450, kenburns:true, kenburns:'30s'"
);

$bapcHomeSlideShowImages = array(
	"img-1" => "images/what/home/concierge-slide-1.jpg",
    "img-2" => "images/what/home/concierge-slide-2.jpg",
	"img-3" => "images/what/home/concierge-slide-3.jpg"
);

//BAPC HOME TEASER
$bapcHomeTeaser = array(
	"id" => "bapc-home-teaser",
    "title" => "The Red Carpet",
	"subTitle" => "Experience",
	"buttonText" => "Read More",
	"buttonLink" => "index.php?option=com_content&view=article&id=2&Itemid=102"
);

$bapcHomeTeaser_Paragraphs = array(
'Here at Be At Peace Concierge we are driven & pleased to supply all of our clients with the red carpet experience, no matter your financial circumstances',
'We know that life sometimes dishes out uncontrollable events which leaves us feeling overwhelmed & since those events are more than likely unplanned we are here 24/7 to assist you whenever you need us.'
);

$bapcHomeTeaserGridHeadings = array(1 => 'Travel Arrangements', 'Holiday Prep Services', 'Gracefully Aging Services', 'Personal Errands');
$bapcHomeTeaserGridContent = array(1 => 'Reservations, Pick-up/Drop-off', 'Christmas, Thanksgiving', 'Nursing Home/ Home Care', 'Grocery shopping, personal driver');

//BAPC HOME SECTION TWO
$bapcHomeSection2ImageClasses = array(1 => '', 'uk-overlay-panel uk-overlay-image uk-overlay-fade');
$bapcHomeSection2_H3_P_Link_A = array('We Promise Peace of Mind', 
'“Our Goal is to Make Your Life Easier, No Task is Too Big or Too Small.”', 
'index.php?option=com_content&view=article&id=3&Itemid=103',
'Continue Reading');
$bapcHomeSection2Content = array("Whether it's last minute childcare to international 
property searches, we want you to have the best memories out of life & we are honored 
to be apart of them.  Our job is to give our clients the chance to experience life not just live it.",
"Let us take care of whatever it is that is taking your time away from your' loved ones, that project that's due, or that vacation that is calling your name.");

//
$bapcHomeSection3ID = array('ob-london', 'ob-newyork', 'ob-paris', 'ob-oslo');
$bapcHomeSection3Title = array('Landscaping', 'Car Repair', 'Pet Sitting', 'Chauffeur');
$bapcHomeSection3Content = array('Get your yard beautifully manicured or snow removed anytime.', 
'We will pick your car up from anywhere and wait for it to be fixed and then bring it back to you.',
'Includes but is not limited to walking your animal, taking your pet to the vet etc.',
'For persons who need a ride anywhere anytime at a flat rate without the head counting.');

//
$bapcHomeSection4 = array(
	"id" => "bapc-home-section-4",
    "title" => "The Be At Peace Exclusive ",
    "subTitle" => "Parental Package",
	"buttonText" => "Continue Reading",
	"buttonLink" => "index.php?option=com_content&view=article&id=3&Itemid=103"
);

$bapcHomeSection4ImageHover = array(
	"image" => "images/what/home/bapc-home-section4-pic-1.png",
    "imageHover" => "images/what/home/bapc-home-section4-pic-2.png"
);
$bapcHomeSection4_Paragraphs = array(
'We offer last minutes childcare 24/7 Laundry services, housekeeping, help with homework, we also can do unexpected drop ins on your teen so that you can be sure',
'that your children are in task while you are away. We treat every client like family, we establish a trust that allows you to feel comfortable with all your needs.'
);
?>
<section id="<?php echo $bapcHomeSlideShow[id]; ?>">
   <?php encHTML_SlideShow($bapcHomeSlideShow, $bapcHomeSlideShowImages); ?>
</section>

<section id="<?php echo $bapcHomeTeaser[id]; ?>">
	<div id="container">
		<article id="left">
			<div>
				<?php encHTML_HGroup($bapcHomeTeaser, '2', '3'); ?>
				<?php enc_HTMLParagraphs($bapcHomeTeaser_Paragraphs); ?>
				<?php enc_HTMLButton($bapcHomeTeaser); ?>
			</div>    
		</article>
		<figure id="right">
			<?php foreach ($bapcHomeTeaserGridHeadings as $bapcHomeTeaserGridHeadingsKey => $bapcHomeTeaserGridHeadingsValue){ ?>
				<div class="grid">
					<div class="grid-container" id="image-<?php echo $bapcHomeTeaserGridHeadingsKey; ?>">
						<div class="overlay">
							<div class="overlay-container">
								<div class="overlay-content">
									<h3><?php echo $bapcHomeTeaserGridHeadingsValue; ?></h3>
									<p><?php echo $bapcHomeTeaserGridContent[$bapcHomeTeaserGridHeadingsKey]; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>	
			<?php } ?>
		</figure>    
	</div>
</section>

<section id="bapc-home-section-2">
  <div id="container">
    <article id="left">
      	<figure class="uk-overlay uk-overlay-hover">
			<?php foreach ($bapcHomeSection2ImageClasses as $bapcHomeSection2ImageClassesKey => $bapcHomeSection2ImageClassesValue){ ?>
				<img src="images/what/home/bapc-home-section2-pic-<?php echo $bapcHomeSection2ImageClassesKey; ?>.png" class="<?php echo $bapcHomeSection2ImageClassesValue; ?>" />
			<?php } ?>
		    <a class="uk-position-cover"></a>
		</figure>
    </article>
    <article id="right">
      <div>
        <h3><?php echo $bapcHomeSection2_H3_P_Link_A[0]; ?></h3>
        <p><?php echo $bapcHomeSection2_H3_P_Link_A[1]; ?></p>
        <div>
        <?php foreach ($bapcHomeSection2Content as $bapcHomeSection2ContentKey => $bapcHomeSection2ContentValue){ ?>
			<p><?php echo $bapcHomeSection2ContentValue; ?></p>
		<?php } ?>
        </div>
        <a href="<?php echo $bapcHomeSection2_H3_P_Link_A[2]; ?>"><?php echo $bapcHomeSection2_H3_P_Link_A[3]; ?></a>
      </div>
    </article>
  </div>
</section>

<section id="bapc-home-section-3">
	<div data-uk-slider>
    	<div class="uk-slider-container">
    		<ul class="uk-slider">
				<?php foreach ($bapcHomeSection3ID as $bapcHomeSection3IDKey => $bapcHomeSection3IDValue){ ?>
            	<li>
            		<figure class="uk-overlay uk-overlay-hover">
    					<div id="<?php echo $bapcHomeSection3IDValue; ?>" class="uk-overlay-panel uk-cover-background uk-overlay-fade">
    						
    					</div>
    					<div class="uk-overlay-panel uk-ignore">
	    					<h3><a><?php echo $bapcHomeSection3Title[$bapcHomeSection3IDKey]; ?></a></h3>
	    					<span></span>
	    					<p><?php echo $bapcHomeSection3Content[$bapcHomeSection3IDKey]; ?></p>
    					</div>
    					<a class="uk-position-cover" draggable="false"></a>
					</figure>
            	</li>
				<?php } ?>
        	</ul>
    	</div>
	</div>
</section>

<section id="<?php echo $bapcHomeSection4[id]; ?>">
	<div>
		<article>
			<?php encHTML_HGroup($bapcHomeSection4, '3', '4'); ?>
			<?php enc_HTMLParagraphs($bapcHomeSection4_Paragraphs); ?>
			<?php enc_HTMLButton($bapcHomeSection4); ?>
		</article>
		<figure>
			<?php encHTML_ImageHoverOverlay($bapcHomeSection4, $bapcHomeSection4ImageHover); ?>
		</figure>
	</div>
</section>

<section id="bapc-home-section-6">
	<div id="bapc-home-section-6-parallax" data-uk-parallax="{bg: -500}">
		<div id="bapc-home-section-6-parallax-inside">
			<div id="bapc-home-section-6-parallax-content">
				<h3>Elegance</h3>
				<p> 
					We only have one life to live
					<br />
 					so you might as well enjoy it.
 				</p>
			</div>
		</div>
	</div>
</section>

<section id="bapc-home-section-7">
	<div id="bapc-home-section-7-slideset" data-uk-slideset="{default: 3}">
		<h3>What Our Clients Think</h3>
	    <div class="uk-slidenav-position">
	        <ul class="uk-slideset">
	            <li>
	            	<div class="uk-overlay-hover uk-panel">
		            	<a class="uk-position-cover uk-position-z-index" href="#"></a>
		            	<h2 class="uk-overlay">
		            		Evan Nagan
		            	</h2>
		            	<p>
		            		"Be At Peace was great
							 from arrival to departure,
							 my wife and I will definitely recommend their service”
		            	</p>
	            	</div>
	            </li>
	            <li>
	            	<div class="uk-overlay-hover uk-panel">
		            	<a class="uk-position-cover uk-position-z-index" href="#"></a>
		            	<h2 class="uk-overlay">
		            		Tim Rathschmidt
		            	</h2>
		            	<p>
		            		“I needed a packaged delivered and something dropped off at my home, they were prompt and professional” 
		            	</p>
		            </div>
	            </li>
	            <li>
	            	<div class="uk-overlay-hover uk-panel">
	            		<a class="uk-position-cover uk-position-z-index" href="#"></a>
		            	<h2 class="uk-overlay">
		            		Angela M. Baker
		            	</h2>
		            	<p>
		            		“Babysitter cancelled on me last minute, and now i have found a permanent solution, thank you Be at Peace”
		            	</p>
	            	</div>
	            </li>
	            <li>
	            	<div class="uk-overlay-hover uk-panel">
	            		<a class="uk-position-cover uk-position-z-index" href="#"></a>
	            		<h2 class="uk-overlay">
		            		James Rikko
		            	</h2>
		            	<p>
		            		"Be At Peace was great
							 from arrival to departure,
							 my wife and I will definitely recommend their service”
		            	</p>
		            </div>
	            </li>
	            <li>
	            	<div class="uk-overlay-hover uk-panel">
		            	<a class="uk-position-cover uk-position-z-index" href="#"></a>
		            	<h2 class="uk-overlay">
		            		Seth Hanes
		            	</h2>
		            	<p>
		            		"Be At Peace was great
							 from arrival to departure,
							 my wife and I will definitely recommend their service”
		            	</p>
		            </div>
	            </li>
	            <li>
	            	<div class="uk-overlay-hover uk-panel">
	            		<a class="uk-position-cover uk-position-z-index" href="#"></a>
		            	<h2 class="uk-overlay">
		            		Alan Jones
		            	</h2>
		            	<p>
		            		""Be At Peace was great
							 from arrival to departure,
							 my wife and I will definitely recommend their service”
		            	</p>
		            </div>
	            </li>
	        </ul>
	    </div>
	    <article id="home-slider-nav">
	        <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
	        <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
	    </article>
	</div>
</section>