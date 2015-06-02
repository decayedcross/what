$("Contact Form ID").submit(function() {
	var date = $('#date').val();
	var ip = $('#ip').val();
	var first_name = $('#first_name').val();
	var last_name = $('#last_name').val();
	var phone_number = $('#phone_number').val();
	var email = $('#email').val();
	var content = $('#content').val();
	$.ajax({
		url: 'templates/what/handlers/contactHandler.php',
		type: 'POST',
		data: {"date": date, "ip": ip, "first_name": first_name, "last_name": last_name, "phone_number": phone_number, "email": email, "content": content},
		success: function(result){
			console.log(result);
			if(result === 'true'){				
				$('Contact Form ID').load('templates/what/html/com_content/article/contactSubmit.php');
			}
		}
	});
	return false;
});
