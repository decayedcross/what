<?php 
$whatContactSection_2_InputType = array(
	"text",
	"text",
	"email",
	"textarea",
	"hidden",
	"hidden",
	"submit",
);

$whatContactSection_2_Id = array(
	"what-contact-form-name",
	"what-contact-form-phone",
	"what-contact-form-email",
	"what-contact-form-message",
	"what-contact-form-date",
	"what-contact-form-ip",
	"what-contact-form-send",
);

$whatContactSection_2_PlaceHolder = array(
	"Name",
	"Phone",
	"Email",
	"Message",
	"date",
	"ip",
	"SEND",
);

$whatContactSection_2_Required = array(
	"required",
	"required",
	"required",
	"required",
	"",
	"",
	"",
);
?>

<?php if($key == 0){ ?>
<form <?php $this->setID($sectionArray, 'form'); ?>>
<?php } ?>

<?php if($whatContactSection_2_InputType[$key] == 'text' || $whatContactSection_2_InputType[$key] == 'email'){ ?>
	<?php if($key == 0){ ?>
		<ul <?php $this->setID($sectionArray, 'ul'); ?>>
	<?php } ?>
			<li <?php $this->setClass($sectionArray, 'li'); ?>>
				<div <?php $this->setClass($sectionArray, 'input-container'); ?>>
					<input id="<?php echo $whatContactSection_2_Id[$key]; ?>" 
						   type="<?php echo $whatContactSection_2_InputType[$key]; ?>" 
						   placeholder="<?php echo $whatContactSection_2_PlaceHolder[$key]; ?>"  
						   <?php echo $whatContactSection_2_Required[$key]; ?>
					/>
				</div>
			</li>
	<?php if($key == 2){ ?>
		</ul>
	<?php } ?>
<?php } ?>

<?php if($whatContactSection_2_InputType[$key] == 'textarea'){ ?>
	<textarea id="<?php echo $whatContactSection_2_Id[$key]; ?>" placeholder="<?php echo $whatContactSection_2_PlaceHolder[$key]; ?>" <?php echo $whatContactSection_2_Required[$key]; ?>></textarea>
<?php } ?>

<?php if($whatContactSection_2_InputType[$key] == 'hidden'){ ?>
	<?php if($whatContactSection_2_PlaceHolder[$key] == 'date'){ ?>
		<input id="<?php echo $whatContactSection_2_Id[$key]; ?>" type="<?php echo $whatContactSection_2_InputType[$key]; ?>" value="<?php echo time(); ?>" />
	<?php }else{ ?>
		<input id="<?php echo $whatContactSection_2_Id[$key]; ?>" type="<?php echo $whatContactSection_2_InputType[$key]; ?>" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
	<?php } ?>
<?php } ?>

<?php if($whatContactSection_2_InputType[$key] == 'submit'){ ?>
	<input id="<?php echo $whatContactSection_2_Id[$key]; ?>" type="<?php echo $whatContactSection_2_InputType[$key]; ?>" value="<?php echo $whatContactSection_2_PlaceHolder[$key]; ?>" />
<?php } ?>
	
<?php if($key == 6){ ?>
</form>
<?php } ?>