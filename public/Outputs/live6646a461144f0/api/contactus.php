
<?php
header('Content-Type: application/json; charset=utf-8');
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (!$_POST) exit;
// Email address verification, do not edit.
function isEmail($email)
{
    return (preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
}
//Load Composer's autoloader
function sendMail($email, $message)
{
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'qandilafa2@gmail.com';                     //SMTP username
        $mail->Password   = 'dtmblheduwyehpyq';                               //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom('support@support.com', 'Mailer');
        $mail->addAddress($email, 'Portfolio');     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Thanks';
        $mail->Body    = $message;
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function sendMessage($phone, $message)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://92.205.179.102/~qafawhatsappapi//message/text?key=84f43cc2-dd1a-4c61-b389-616aba68b827',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => "id=$phone&message=$message",
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    return true;
}


if (isset($_POST["submit"])) {
    if (
        !isset($_POST["name"]) |
        !isset($_POST["email"]) |
        !isset($_POST["phone"]) |
        !isset($_POST["message"])
    ) {
        echo json_encode([
            "error" => true,
            "message" => "Complete information please."
        ]);
        exit();
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];



    if (trim($name) == '') {
        echo json_encode([
            "error" => true,
            "message" => "You must enter your name."
        ]);
        exit();
    } else if (trim($phone) == '') {
        echo json_encode([
            "error" => true,
            "message" => "You must enter your name."
        ]);
        exit();
    } else if (trim($email) == '') {
        echo json_encode([
            "error" => true,
            "message" => "Please enter a valid email address."
        ]);
        exit();
    } else if (!isEmail($email)) {
        echo json_encode([
            "error" => true,
            "message" => "You have entered an invalid e-mail address. Please try again."
        ]);
        exit();
    }

    if (trim($message) == '') {
        echo json_encode([
            "error" => true,
            "message" => "Please enter your message."
        ]);
        exit();
    }
    $res_mail_to_client = sendMail($email, "Thanks for contact us, <b>$name!</b>");
    $res_message_to_client = sendMessage($phone, "Thanks for contact us, $name!");

    $res_mail_to_support = sendMail('qandilafa@gmail.com', "Client <b>$name!</b>, calling for help, contact him in $email");
    $res_message_to_support = sendMessage('201207425745', "Client <b>$name!</b>, calling for help, contact him in $email");

    if ($res_mail_to_client && $res_message_to_client && $res_mail_to_support && $res_message_to_support) {
        echo json_encode([
            "error" => false,
            "message" => "sent!"
        ]);
        exit();
    }
}
?>