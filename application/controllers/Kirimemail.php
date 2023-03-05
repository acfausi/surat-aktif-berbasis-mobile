<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';
require 'vendor/PHPMailer/src/OAuth.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;


class Kirimemail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_kirimemail');
	}

	public function index()
	{
		
		$data['judul'] = 'Mail';
			$this->load->view('templetes/header',$data);
			$this->load->view('templetes/sidebar');	
			$this->load->view('kirimemail/inputemail');
			$this->load->view('templetes/footer');
	}

	public function kirimemail()
	{
		$emailpenerima = $this->input->post("emailpenerima");
		$namapenerima = $this->input->post("namapenerima");
		$isiemail = $this->input->post("isiemail");

		//script pengiriman email
		echo "berhasil"; 
	}

	public function cobakirim()
	{
     	// error_reporting(0);
     	$emailpenerima = $this->input->post("emailpenerima");
		$namapenerima = $this->input->post("namapenerima");
		$isiemail = $this->input->post("isiemail");
        date_default_timezone_set('Asia/Jakarta');
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'muzansconvert.com;158.106.138.119';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
            $mail->Username = 'administrator@v2project.com';                 // SMTP username
            $mail->Password = 'buatkanAKU000';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('administrator@v2project.com', 'V2 PROJECT');
            $mail->addAddress($emailpenerima, $emailpenerima);     // Add a recipient
            $mail->addAddress($emailpenerima);               // Name is optional
            
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "Verifikasi Surat Keterangan Aktif";
            $mail->Body    = 'Selamat berhasil';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


            if ($mail->send()) {
                echo "<br><a href='list'>Kembali</a>";
            }
            
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }

   	public function coba()
	{
     	error_reporting(0);
        date_default_timezone_set('Asia/Jakarta');
        $emailpenerima = $this->input->post("emailpenerima");
		$namapenerima = $this->input->post("namapenerima");
		$isiemail = $this->input->post("isiemail");

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'muzansconvert.com;158.106.138.119';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
            $mail->Username = 'administrator@v2project.com';                 // SMTP username
            $mail->Password = 'buatkanAKU000';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('administrator@v2project.com', 'UNIBA');
            $mail->addAddress($emailpenerima, $emailpenerima);     // Add a recipient
            $mail->addAddress($emailpenerima);               // Name is optional

            
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "VERIFIKASI SURAT KETERANGAN AKTIF";
            $mail->Body    = '
            <div style="border-style: solid;
            border-width: thin;
            border-color: #dadce0;
            border-radius: 8px;
            width:60%;
            margin: auto;
            padding: 40px 20px; text-align: center;">
          		<p>Verifikasi Berhasil</p>
            </div>


            ';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


            if ($mail->send()) {

                echo json_encode(['error' => 'false']);
                echo "<br><a href='list'>Kembali</a>";
            }
            
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }

}

/* End of file Kirimemail.php */
/* Location: ./application/controllers/Kirimemail.php */