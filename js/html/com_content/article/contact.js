$("#what-contact-section-2-form").submit(function() {
	var date = $('#what-contact-form-date').val();
	var ip = $('#what-contact-form-ip').val();
	var name = $('#what-contact-form-name').val();
	var phone = $('#what-contact-form-phone').val();
	var email = $('#what-contact-form-email').val();
	var message = $('#what-contact-form-message').val();
	$.ajax({
		url: 'templates/what/handlers/contactHandler.php',
		type: 'POST',
		data: {"date": date, "ip": ip, "name": name, "phone": phone, "email": email, "message": message},
		success: function(result){
			console.log(result);
			if(result === 'true'){				
				$('#what-contact-section-2-form').load('templates/what/html/com_content/article/contactSubmit.php');
			}
		}
	});
	return false;
});

$(window).on("load resize scroll",function(e){
	//CONTACT SECTION 1
	encAllMinHeightsEqualElementA_Half(window, '#what-contact-section-1-outer');
	encVerticalCenter('#what-contact-section-1-outer', '#what-contact-section-1-inner', '#what-contact-section-1-content');
	encFlexWidthCenter('#what-contact-section-1-outer', '#what-contact-section-1-center', 1.2, 1.2, 1.2, 1.5);
	
	//CONTACT SECTION 2
	encAllMinHeightsEqualElementA_Half(window, '#what-contact-section-2-outer');
	encVerticalCenter('#what-contact-section-2-outer', '#what-contact-section-2-inner', '#what-contact-section-2-content');
	encFlexWidthCenter('#what-contact-section-2-outer', '#what-contact-section-2-center', 1.2, 1.2, 1.2, 1.5);
	
	//CONTACT SECTION 3
	encAllMinHeightsEqualElementA_Half(window, '#what-contact-section-3-outer');
	encVerticalCenter('#what-contact-section-3-outer', '#what-contact-section-3-inner', '#what-contact-section-3-content');
	encFlexWidthCenter('#what-contact-section-3-outer', '#what-contact-section-3-center', 1.2, 1.2, 1.2, 1.5);
});
