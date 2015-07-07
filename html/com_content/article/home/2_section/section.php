<?php
require_once('templates/what/bower/enclave/php/enc_HTML.php');
$html = new enc_HTML();

$whatHomeSection_2 = array(
	"id" => "what-home-section-2",
	"title" => "Contact Us Today 
	<br>
	24 Hours 7 Days A Week",
	"call" => "Call: ",
	"numberOne" => "(800) 435-8420",
	"or" => "/ ",
	"numberTwo" => "(812) 302-3025",
	"email" => "Email: ",
	"emailAddress" => "contact@tvtownusa.com",
	"p2" => "DISH from Dish Masters and TV Town USA",
	"p3" => "offer the most extensive lineup of technology in the industry.",
	"p4" => "The reason TV Town USA outperforms the competition is that going directly through me and my network of current customers means you will save money, 
	yet receive more channels. Plus, we offer benefits that other Dish customers do not receive. DISH network uses the most advanced technology in TV",
	"linkText" => "Order Now",
	"linkUrl" => "http://www.tvtownusa.com/contact",
	"linkText2" => "Read More",
	"linkUrl2" => "http://www.tvtownusa.com/about",
	"icon" => "fa fa-money"	
);
?>
<div <?php $html->setID($whatHomeSection_2, 'top'); ?>>
	<div <?php $html->setID($whatHomeSection_2, 'top-left'); ?>>
		<div <?php $html->setID($whatHomeSection_2, 'top-left-div'); ?>>
			<a href="<?php echo $whatHomeSection_2['linkUrl']; ?>"><?php echo $whatHomeSection_2['linkText']; ?></a>	
		</div>
	</div>
	<div <?php $html->setID($whatHomeSection_2, 'top-right'); ?>>
		<h2 <?php $html->setID($whatHomeSection_2, 'title'); ?>>
			<?php echo $whatHomeSection_2['title']; ?>
		</h2>
		<p <?php $html->setID($whatHomeSection_2, 'call'); ?>>
			<?php echo $whatHomeSection_2['call']; ?><a href="tel:18004358420"><?php echo $whatHomeSection_2['numberOne']; ?></a>
			<?php echo $whatHomeSection_2['or']; ?><a href="tel:18123023025"><?php echo $whatHomeSection_2['numberTwo']; ?></a>
		</p>
		<p <?php $html->setID($whatHomeSection_2, 'email'); ?>>
			<?php echo $whatHomeSection_2['email']; ?><a href="mailto:contact@tvtownusa.com"><?php echo $whatHomeSection_2['emailAddress']; ?></a>			
		</p>
	</div>
</div>
<div <?php $html->setID($whatHomeSection_2, 'bottom'); ?>>
	<div <?php $html->setID($whatHomeSection_2, 'bottom-center'); ?>>
		<div <?php $html->setID($whatHomeSection_2, 'bottom-left'); ?>>
			<p <?php $html->setID($whatHomeSection_2, 'left-p-one'); ?>>
				<?php echo $whatHomeSection_2['p2']; ?>
			</p>
			<p <?php $html->setID($whatHomeSection_2, 'left-p-two'); ?>>
				<?php echo $whatHomeSection_2['p3']; ?>
			</p>
		</div>
		<div <?php $html->setID($whatHomeSection_2, 'bottom-right'); ?>>
			<p <?php $html->setID($whatHomeSection_2, 'bottom-p'); ?>>
				<?php echo $whatHomeSection_2['p4']; ?>
			</p>	
			<div <?php $html->setID($whatHomeSection_2, 'bottom-div'); ?>>
				<a href="<?php echo $whatHomeSection_2['linkUrl2']; ?>"><?php echo $whatHomeSection_2['linkText2']; ?></a>
			</div>				
		</div>		
	</div>
</div>