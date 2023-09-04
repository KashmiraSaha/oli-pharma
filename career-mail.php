<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$first_name = ucfirst($_POST['first_name']);
$last_name = ucfirst($_POST['last_name']);
$email = $_POST['email'];
$phone = trim($_POST['phone']);

// echo $name.$phone.$location.$message;exit;
$data = [];

if (empty($first_name)) {
    $data['status'] = 0;
    $data['key'] = "first_name";
    $data['val'] = "First Name Feild is Required!";
    echo json_encode($data);
}
else if (empty($last_name)) {
    $data['status'] = 0;
    $data['key'] = "last_name";
    $data['val'] = "Last Name Feild is Required!";
    echo json_encode($data);
} else if (empty($email)) {
    $data['status'] = 0;
    $data['key'] = "email";
    $data['val'] = "Email Feild is Required!";
    echo json_encode($data);
} else if(empty($phone)) {
    $data['status'] = 0;
    $data['key'] = "phone";
    $data['val'] = "Phone Feild is Required!";
    echo json_encode($data);
} else if($phone < 1000000000 || $phone > 9999999999) {
    $data['status'] = 0;
    $data['key'] = "phone";
    $data['val'] = "Phone Number should be 10 digit !";
    echo json_encode($data);
} else{

    $mail = new PHPMailer(true); 

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'olipharma3@gmail.com';                     //SMTP username
        $mail->Password   = 'labsuozzmojzaibu';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('olipharma3@gmail.com', 'Mailer');
      
        $mail->addAddress('care@olipharma.in', 'Admin');     //Add a recipient  -  care@olipharma.in
      
        foreach ($_FILES["attachment"]["name"] as $k => $v) {
            $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
        }
        

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        $message_body = 'First Name : '.$first_name.'<br>'.'LastName : '.$last_name.'<br>'.'Email : '.$email.'<br>'.'Phone : '.$phone;

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Career Info';
        $mail->Body    = $message_body;
        $mail->AltBody = $first_name;

        $mail->send();
        
        $data['status'] = 1;
        $data['key'] = "message";
        $data['val'] = "Thank You to contact with Us. We will get back to You shortly...";
        echo json_encode($data);
      
    } catch (Exception $e) {
        $data['status'] = 0;
        $data['key'] = "message";
        $data['val'] = "Message could not be sent.";
        echo json_encode($data);
    }

}

?>