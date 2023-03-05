<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Phpmailer
	{
		public function __construct(){

			log_message('debug','Phpmailer class is loaded.');


		}

		public function load()
		{
			require_once(APPPATH.'third_party/Phpmailer/src/PPHMailer.php');
			require_once(APPPATH.'third_party/Phpmailer/src/SMTP.php');
			require_once(APPPATH.'third_party/Phpmailer/src/Exception.php');

			$objMail = new PHPMailer\PHPMailer\PHPMailer();
			return $objMail;
		}

	}
 ?>