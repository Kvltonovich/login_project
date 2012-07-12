
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js">

</script>

<script type="text/javascript" >

$(function() {
	$(".submit").click(function() {
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		var lastname = $("#email").val();
		var username = $("#username").val();
		var password = $("#password").val();
		var dataString = 'firstname='+ firstname  + '&lastname=' + lastname + "&email" + email + '&username=' + username + '&password=' + password;
	});  
});



$.ajax({  
	type: "POST",
	url: "signup.php",
	data: dataString,
	success: function() {  
		$('#contact_form').html("<div id='message'></div>");
		$('#message').html("<h2>Contact Has Been Updated!</h2>")
		.append("<p>1337 4@xx0rz 8r0...</p>")
		.hide()
		.fadeIn(1500, function() {
			$('message').append("<img id='checkmark' src='image/check.png' />");
//				document.location.href = "contacts.php";
	    });  
  }  
});  
return false; 	
	
						
</script>
