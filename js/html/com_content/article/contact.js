$("#what-contact-form").submit(function() {
	var date = $('#what-contact-form-date').val();
	var ip = $('#what-contact-form-ip').val();
	var first_name = $('#what-contact-form-first_name').val();
	var last_name = $('#what-contact-form-last_name').val();
	var phone_number = $('#what-contact-form-phone_number').val();
	var email = $('#what-contact-form-email').val();
	var content = $('#what-contact-form-content').val();
	$.ajax({
		url: 'templates/what/handlers/contactHandler.php',
		type: 'POST',
		data: {"date": date, "ip": ip, "first_name": first_name, "last_name": last_name, "phone_number": phone_number, "email": email, "content": content},
		success: function(result){
			console.log(result);
			if(result === 'true'){				
				$('#what-contact-form').load('templates/what/html/com_content/article/contactSubmit.php');
			}
		}
	});
	return false;
});
