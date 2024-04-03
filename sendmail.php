<?php
//index.php

$error = '';
$name = '';
$email = '';
$phone = '';
$subject = '';
$message = '';

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
	if(empty($_POST["subject"]))
	{
		$error .= '<p><label class="text-danger">Subject is required</label></p>';
	}
	else
	{
		$subject = clean_text($_POST["subject"]);
	}
	if(empty($_POST["message"]))
	{
		$error .= '<p><label class="text-danger">Message is required</label></p>';
	}
	else
	{
		$message = clean_text($_POST["message"]);
	}

            // reCAPTCHA validation
            if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

                // Google secret API
                $secretAPIkey = '6LddsoUmAAAAAD2LQafiEsIkM9HgKq-uVuEQa9TW';

                // reCAPTCHA response verification
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']);

                // Decode JSON data
                $response = json_decode($verifyResponse);
                    if($response->success){

                        $response = array(
                            "status" => "alert-success",
                            "message" => "Your mail have been sent."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Robot verification failed, please try again."
                        );
						$error .= '<p><label class="text-danger">Invalid Captcha</label></p>';
                    }       
            } else{ 
                $response = array(
                    "status" => "alert-danger",
                    "message" => "Plese check on the reCAPTCHA box."
                );
				$error .= '<p><label class="text-danger">Invalid Captcha</label></p>';
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
		$Office365_mail->Password = "Newphp@2024";
		 
		// Typical mail data
		$Office365_mail->SetFrom("contact@symprio.com");
		$Office365_mail->AddAddress("contact@symprio.com");

		$Office365_mail->Subject = $_POST["subject"];	
		//$Office365_mail->Body    = "Name : <strong>";$_POST["name"]; "</strong> <br> ";$_POST["message"];
		$Office365_mail->Body    = "Name : ".$_POST["name"] ."\n"."Contact Number : ".$_POST["phone"]."\n"."Email : ".$_POST["email"]."\n"."Message : ".$_POST["message"];
		//$Office365_mail->Body    = $_POST["message"];
		//$Office365_mail->AltBody = "This is the with out HTML message For Setting up PHPMailer with Office365 using SMTP";
	
		$name = $_POST["name"];

		try
		{
			$Office365_mail->Send();

			header("Location: thanks.php?name=$name");


			//echo '
			//<div class="alert alert-success">
			//	<strong>Success!</strong> We will Contact you.
		  	//</div>
			//';
			
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
