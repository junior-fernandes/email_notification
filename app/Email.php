<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email{

	private $mail = stdClass::class;

	public function __construct()
	{

		$this->mail = new PHPMailer(true);

		$this->mail->IsSMTP();
		$this->mail->SMTPDebug = SMTP_DEBUG;
		$this->mail->Host = SMTP_HOST;	
		$this->mail->SMTPAuth = true;
		$this->mail->Port = 587;
		$this->mail->Username = SMTP_USER;
		$this->mail->Password = SMTP_PASS;

		$this->mail->CharSet = "utf-8";
		$this->mail->setLanguage = "br";
		$this->mail->isHTML(true);
		$this->mail->SetFrom(SMTP_FROM, SMTP_FROM_NAME);

	}

	public function	sendEmail($subject, $body, $addressEmail, $addressName)
	{

		$this->mail->Subject = $subject;
		$this->mail->Body = $body;
		$this->mail->addAddress($addressEmail, $addressName);

		try{

			$this->mail->send();

		}catch(Exception $e){
			echo "Erro ao enviar o email: {$this->mail->ErrorInfo} {$e->getMessage()}";
		}

	}

}

?>