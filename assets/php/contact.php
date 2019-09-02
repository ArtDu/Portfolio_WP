<?php

require_once "../vendor/autoload.php";

if(isset($_POST['message'])){

    $mail = new PHPMailer;

	$name = filter_var($_POST['name']);
	$email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
    $text = filter_var($_POST['message']);


    //$mail->SMTPDebug = 4;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.artdub.ru';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'artdub@artdub.ru';                 // SMTP username
    $mail->Password = 'Magnetolog13';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('artdub.artdub.ru', 'artdub');
    $mail->addAddress('rusartdub@gmail.com', 'Получатель');     // Add a recipient
    $mail->addReplyTo('artdubchick@yandex.ru', 'Robot');
    $mail->addCC('rus_artyom@mail.ru',"art");

    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Письмо с сайта';
    $mail->Body    = "от: $name<br>e-mail: $email<br><br>";
    $mail->Body    .= $text;
    $mail->AltBody = $name;

	if($mail->send()){
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Form Submission Successful';
    }
	else{
		$res['message'] = "Failed to send mail. Please mail me to rusartdub@gmail.com<br>"  . $mail->ErrorInfo;
	}
	
	
	echo json_encode($res);
}






?>