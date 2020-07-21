<?php
session_start();
ob_start();

require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;


use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/vendor/autoload.php';
require_once "..\private\class\User.php";

$u = new User();

switch ($_GET['do']) {
    case 'send_code': {

            if (isset($_POST['email'])) {
                $u->setEmail(trim($_POST['email']));
            } else
                $u->setEmail('');


            if (isset($_POST['phone'])) {
                $u->setPhone(trim($_POST['phone']));
            } else
                $u->setPhone('');

            $res = $u->getUser();

            $name = $res['name'];
            $phone = $res['phone'];
            $email = $res['email'];

            $code = rand(11111, 99999);

            $_SESSION['code'] = $code;

            $_SESSION['user'] = $res['user_id'];

            if ($_POST['type'] == 1) {

                $mail = new PHPMailer;

                $mail->IsSMTP();
                // $mail->SMTPDebug = 4;
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 587;
                $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;
                $mail->IsHTML(true);

                $mail->Username = "xxxxxxx";
                $mail->Password = "xxxxxx";

                $mail->setFrom('xxxxxx', 'E7GZLY');
                $mail->addAddress($email, $name);

                $mail->Subject = 'Password Recovery Code from E7GZLY';
                $mail->Body = '  <h2>Dear ' . $name . ' <br>this is your password recovery code: ' . $code . ' <br>Thanks <br> E7GZLY </h2>';

                if (!$mail->send()) {
                    $data =  "Opps! For some technical reasons we couldn't able to sent you an email. We will shortly get back to you with download details.";
                    $data =  "Mailer Error: " . $mail->ErrorInfo;
                } else {

                    $data =  "sent";
                }
            } else if ($_POST['type'] == 2) {

                // Your Account SID and Auth Token from twilio.com/console
                $account_sid = 'xxxxxxxxxxxxxxxxxx';
                $auth_token = 'xxxxxxxxxxxxxxxx';
                // In production, these should be environment variables. E.g.:

                // A Twilio number you own with SMS capabilities
                $twilio_number = "+xxxxxxxxxxxxxxxx";

                $client = new Client($account_sid, $auth_token);
                $client->messages->create(
                    '+2'.$phone.'',
                    array(
                        'from' => $twilio_number,
                        'body' => 'Dear '.$name.'! This is your recovery code: '.$code.''
                    )
                );

                $data = 'sent';
            }
        }
        break;

    case 'confirm_code': {
            $form_code = trim($_POST['code']);
            if ($_SESSION['code'] == $form_code)
                return $data = 'true';
            else
                return $data = 'false';
        }
        break;

    case 'reset_pass': {
            if ($_SESSION['code'] == trim($_POST['code2'])) {
                $u->setUserID($_SESSION['user']);
                $u->setNewPassword($_POST['new_password']);
                unset($_SESSION['code']);
                $data = $u->RecoveryPass();
            } else {
                return $data = 'code changed';
            }
        }
        break;

    default:
        $data = 'choose Action';
        break;
}
