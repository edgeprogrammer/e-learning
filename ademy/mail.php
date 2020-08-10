<?php

	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject =$_POST["subject"];
	$phone =$_POST['phone'];
	$content = $_POST["content"];

	$toEmail = "mishrasudhanshu0786@gmail.com ";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
		$name="";
		$email="";
		$subject="";
		$phone="";
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	    
	echo "<script type='text/javascript'>alert('$message');window.location.assign('edgeprogrammers.com');</script>";

	}


?>