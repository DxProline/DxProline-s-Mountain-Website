<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
require_once 'secret.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function prepareEmail(){
    try {
        $mail = new PHPMailer(true);
        /*$mail->SMTPDebug = 2; // Nastavení úrovně debug */

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // SMTP server Google
        $mail->SMTPAuth   = true;
        $mail->Username   = 'resetermem@gmail.com'; // Tvůj Gmail
        $mail->Password   = EMAIL_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Odesílatel a příjemce
        $mail->setFrom('resetermem@gmail.com', 'ResetHesla');

        // **Nastavení kódování na UTF-8**
        $mail->CharSet = 'UTF-8';

        // Obsah e-mailu
        $mail->isHTML(true);
        return $mail;
    } catch (Exception $e) {
        return null;
    }
}
function sendResetRecoveryPassword($emailAddress, $password){
    try {
        $mail = prepareEmail();
        if($mail === null){
            return false;
        }
        $mail->addAddress($emailAddress, $emailAddress);
        $mail->Subject = 'Výzva k resetu hesla';
        $mail->Body    = 'Dobrý den, ' . $emailAddress . ',<br><br>'
            . 'Vyresetovali jste si heslo <br>'
            . 'Vaše nové heslo je' . $password . '<br>'
            . 'Pokud jste to nebyli vy tak e-mail ignorujte <br>'
            . 'S pozdravem online obchod MEM <br>';
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}