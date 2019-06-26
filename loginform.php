<?php  
if (isset($_POST['submit'])) {
	$name= $_POST['name'];
	$subject= $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "isoexauto@yahoo.com";
	$headers= "FROM:".$mailFrom;
	$txt = "New user request to sign in as:".$name.".\n\n\".$message;
	


	mail($mailTo, $subject, $txt, $headers);
	header("Location: log_in.html?mailsent");
}