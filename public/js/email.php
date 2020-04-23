<?php
/*$clientName = check_input($_POST['client_name'], "Please enter name");
$clientEmail = check_input($_POST['client_email'], "Please enter your email");
$clientInsta = check_input($_POST['client_insta'], "Please enter your Instagram or social media handle");
$clientDesc = check_input($_POST['client_desc'], "Please enter your message");
//functions we used

function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//preparing message for email:
$message = "exploremhg.com contact submission
Contact Information (Name, Email, Phone):
$clientName, $clientEmail, $clientPhone.

Message:

$clientDesc.

-----
end of message.";

$myEmail = "wallemang98@gmail.com";
$subject = "$name | exploremhg.com contact";

//sending message using mail function
mail($myEmail, $subject, $message);
*/
require "vendor/autoload.php";

$robo = 'robot@example.com';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$developmentMode = true;
$mailer = new PHPMailer($developmentMode);

try {
    $mailer->SMTPDebug = 2;
    $mailer->isSMTP();

    if ($developmentMode) {
    $mailer->SMTPOptions = [
        'ssl'=> [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        ]
    ];
    }


    $mailer->Host = 'mail.exploremhg.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'william@exploremhg.com';
    $mailer->Password = 'TJwM1hzY99!';
    $mailer->SMTPSecure = 'tls';
    $mailer->Port = 587;

    $mailer->setFrom('william@exploremhg.com', 'Name of sender');
    $mailer->addAddress('wallemang98@gmail.com', 'Name of recipient');

    $mailer->isHTML(true);
    $mailer->Subject = 'PHPMailer Test';
    $mailer->Body = 'This is a <b>SAMPLE<b> email sent through <b>PHPMailer<b>';

    $mailer->send();
    $mailer->ClearAllRecipients();
    echo "MAIL HAS BEEN SENT SUCCESSFULLY";

} catch (Exception $e) {
    echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
}

redirect('pages.index');
?>
