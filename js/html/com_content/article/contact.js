$("#what-contact-section-4-form").submit(function() {
	var date = $('#what-contact-section-4-date').val();
	var ip = $('#what-contact-section-4-ip').val();
	var name = $('#what-contact-section-4-name').val();
	var phone = $('#what-contact-section-4-phone').val();
	var email = $('#what-contact-section-4-email').val();
	var message = $('#what-contact-section-4-message').val();
	$('#what-contact-section-4-send').css("pointer-events", "none");
	$.ajax({
		url: 'templates/what/handlers/contactHandler.php',
		type: 'POST',
		data: {"date": date, "ip": ip, "name": name, "phone": phone, "email": email, "message": message},
		success: function(result){
			if(result === 'true'){				
				$('#what-contact-section-4-form').load('templates/what/handlers/contactSubmit.php');
			}
		}
	});
	return false;
});

$(window).on("load resize scroll",function(e){
	//CONTACT SECTION 1
	encFlexWidthCenter('#what-contact-section-1-outer', '#what-contact-section-1-center', 1.2, 1.2, 1.2, 1.5);
	
	//CONTACT SECTION 2
	encFlexWidthCenter('#what-contact-section-2-outer', '#what-contact-section-2-center', 1.2, 1.2, 1.2, 1.5);
	
	//CONTACT SECTION 3
	encFlexWidthCenter('#what-contact-section-3-outer', '#what-contact-section-3-center', 1.2, 1.2, 1.2, 2.5);
	
	//CONTACT SECTION 4
	encFlexWidthCenter('#what-contact-section-4-outer', '#what-contact-section-4-center', 1.2, 1.2, 1.2, 1.5);
	encAllMinHeightsEqualElementA_Divided(window, '.what-contact-section-4-textarea', 6);
});