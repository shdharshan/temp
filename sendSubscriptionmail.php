<?php
//index.php
$error = '';
$name = '';
$email = '';
$phone = '';
$comment = '';
$total_hrs = '';

if(empty($_POST["total_hrs"])){
	$total_hrs = 1200;
} else {
	$total_hrs = $_POST["total_hrs"];
}

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
	if(empty($_POST["name"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
	}
	else
	{
		$name = clean_text($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			$error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
		}
	}
	if(empty($_POST["email"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
	}
	else
	{
		$email = clean_text($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p><label class="text-danger">Invalid email format</label></p>';
		}
	}
	if($error == '')
	{
		require 'PHPMailer.php';
		require 'SMTP.php';

		$Office365_mail = new PHPMailer\PHPMailer\PHPMailer();

		$Office365_mail->IsSMTP();
		$Office365_mail->SMTPAuth = true;
		 
		$Office365_mail->Host = "smtp.office365.com";
		$Office365_mail->Port = 587; // or 587
	    $Office365_mail->SMTPSecure = 'tls'; // if Port is 587
		$Office365_mail->Username = "contact@symprio.com";
		$Office365_mail->Password = "Website2023";
		 
		// Typical mail data
		$Office365_mail->SetFrom("contact@symprio.com");
		$Office365_mail->AddAddress("aridharshan@symprio.com");

		$Office365_mail->Subject = "Symprio Subscription";	
		//$Office365_mail->Body    = "Name : <strong>";$_POST["name"]; "</strong> <br> ";$_POST["message"];
		$Office365_mail->Body    = "Name : ".$_POST["name"] ."\n"."Contact Number : ".$_POST["phone"]."\n"."Email : ".$_POST["email"]."\n"."Total Payment ($) : ".$total_hrs."\n"."Message : ".$_POST["message"];
		//$Office365_mail->Body    = $_POST["message"];
		//$Office365_mail->AltBody = "This is the with out HTML message For Setting up PHPMailer with Office365 using SMTP";
	


		try
		{
			$Office365_mail->Send();
			echo '
			<div class="alert alert-success">
				<strong>Success!</strong> We will Contact you.
		  	</div>
			';
			header("Location: paynow.php?email=$email&payment=$total_hrs");
			
		}
		catch(Exception $exception)
		{
			echo "<pre>";
			var_dump($exception);
			echo "</pre>";
			//Something went bad
			echo "PHPMailer with Office365 Fail :: " . $Office365_mail->ErrorInfo;
		}
	}
}

?>

