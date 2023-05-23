<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class EmailServices {
    private $transporter;

    public function __construct() {
        $this->transporter = new PHPMailer(true);
        $this->transporter->isSMTP();
        $this->transporter->Host = 'leafeon.rapidplex.com';
        $this->transporter->Port = 465;
        $this->transporter->SMTPSecure = 'ssl';
        $this->transporter->SMTPAuth = true;
        $this->transporter->Username = 'edifarm_company@okifirsyah.com';
        $this->transporter->Password = '[~jcwaUM-Jh%';
        $this->transporter->setFrom('edifarm_company@okifirsyah.com');
    }

    public function sendEmail($email, $subject, $html) {
        try {
            $this->transporter->addAddress($email);
            $this->transporter->isHTML(true);
            $this->transporter->Subject = $subject;
            $this->transporter->Body = $html;
            $this->transporter->send();
            echo 'Email sent: ' . $this->transporter->getLastMessageID();
        } catch (Exception $e) {
            echo 'Email could not be sent. Error: ', $this->transporter->ErrorInfo;
        }
    }

    public function sendEmailVerification($email, $token) {
        $this->sendEmail(
            $email,
            'Email verification',
            '<h2>Verifikasi Email</h2>' .
            '<p>Harap inputkan kode berikut untuk pendaftaran Bimbel Linear.</p>' .
            '<br/><br/>' .
            '<h3><b>' . $token . '</b></h3>' .
            '<br/><br/>' .
            '<p>Jika ini bukan anda, harap abaikan email ini.</p>'
        );
    }

    public function sendEmailResetPassword($email, $token) {
        $this->sendEmail(
            $email,
            'Reset password',
            '<h2>Reset password</h2>' .
            '<p>Harap inputkan kode berikut untuk reset password Bimbel Linear.</p>' .
            '<br/><br/>' .
            '<h3><b>' . $token . '</b></h3>' .
            '<br/><br/>' .
            '<p>Jika ini bukan anda, harap abaikan email ini.</p>'
        );
    }

    public function sendEmailChangePassword($email, $token) {
        $this->sendEmail(
            $email,
            'Change password',
            '<h2>Change password</h2>' .
            '<p>Harap inputkan kode berikut untuk change password Bimbel Linear.</p>' .
            '<br/><br/>' .
            '<h3><b>' . $token . '</b></h3>' .
            '<br/><br/>' .
            '<p>Jika ini bukan anda, harap abaikan email ini.</p>'
        );
    }
}

$EmailServices = new EmailServices();

?>
