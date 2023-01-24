<?php 

    include_once "common/header.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $receiver = array(
        'email' => 'flavdevweb@gmail.com',
        'name' => "Hello World",
    );

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'flavdevweb@gmail.com';                     //SMTP username
        $mail->Password   = 'hello';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('flavdevweb@gmail.com', 'Flavien MAYET');
        $mail->addAddress($receiver['email'], $receiver['name']);     //Add a recipient
        $mail->addReplyTo('flavdevweb@gmail.com', 'Flavien MAYET');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Bienvenue sur IMMOBELLO';
        $mail->Body    = '
                        <html>
                            <body>
                            <p>Bonjour '.$receiver['name'].',</p>
                            <p><b>IMMOBELLO</b></p>
                            </body>
                        </html>
                        ';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>