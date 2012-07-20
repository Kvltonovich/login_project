<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js">
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
document.location.href = “contacts.php”,
</script>