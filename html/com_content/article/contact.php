<?php
defined('_JEXEC') or die;
?>	

<?php //echo $this->item->text; ?>

<section id="bapc-contact">
	<article>
		<address>
			<strong>Be At Peace Concierge</strong>
	    	<br>
	        1467 Valley Drive
	    	<br>
	        Coralville, Iowa 52241
			<br>
			<abbr>
	        	P:
	    	</abbr>
			<a href="tel:+13194002812">(319) 400 - 2812</a>
	    	<br>
	    	<abbr>E:</abbr>
	    	<a href="mailto:contact@beatpeaceconcierge.com">contact@beatpeaceconcierge.com</a>
		</address>
	</article>
	<fieldset>
		<legend>
			Contact Form
		</legend>
		<form method="POST" id="bapc-contact-form">		
			<div>
				<div>
					First Name:
				</div>
				<div>				
					<input type="text" id="first_name" name="first_name" required>
				</div>
			</div>
			<div>	
				<div>
					Last Name:
				</div>
				<div>				
					<input type="text" id="last_name" name="last_name" required>	
				</div>
			</div>
			<div>	
				<div>
					Phone Number:
				</div>
				<div>
					<input type="text" id="phone_number" name="phone_number" required>
				</div>				
			</div>
			<div>	
				<div>
					Email:
				</div>
				<div>
					<input type="email" id="email" name="email" required>
				</div>				
			</div>
			<div>		
				<div>
					Questions or Comments:
				</div>
				<div>
					<textarea cols="40" rows="5" placeholder="" id="content" name="content" required></textarea>
				</div>				
			</div>			
			<input type="hidden" value="<?php echo time(); ?>" id="date" name="date" />
			<input type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" id="ip" name="ip" />
			<input id="submit-button" type="submit" value="submit">			
		</form>
	</fieldset>
	<figure>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95325.25266480022!2d-91.6505221185834!3d41.700789063717366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87e443867523a06d%3A0x9930a192536dfa05!2sCoralville%2C+IA+52241!5e0!3m2!1sen!2sus!4v1433204710823" width="600" height="450" frameborder="0"></iframe>
	</figure>
</section>