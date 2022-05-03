<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    //open libraries needed por PHPMailer
    require $_SERVER['DOCUMENT_ROOT'] . '/assets/php/PHPMailer/Exception.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/assets/php/PHPMailer/PHPMailer.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/assets/php/PHPMailer/SMTP.php';
    
    require __DIR__.'/vendor/autoload.php';
    
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    //Define account info
    $username=$_ENV['USERNAME']; //email used to send emails
    $password= $_ENV['PASSWORD']; //password of email used to send emails
    $email_admin= $_ENV['EMAIL_ADMIN'];//admin email that receives emails

    //open assets for mails
    $sImagen = '../assets/images/thermonox-neu-logo-xl.png'; //address of image for mail
    $rcss =  __DIR__ . '/mail_assets/formato_correo.css';//upload css file
    $fcss = fopen ($rcss, "r");//open css file
    $scss = fread ($fcss, filesize ($rcss));//read css file 
    fclose ($fcss);//close css file 

    //Set information received from contact form according to language
    if(strcmp($language, 'es')==0){
        $info = "<p><b>Nombre: </b>" . $name . "</p><p><b>Correo Electrónico: </b>" . $email .  "</p><p><b>Asunto: </b>" . $subject .  "</p><p><b>Mensaje: </b>" . $message . "</p><p><b>Tipo de Usuario: </b>" . $user_type . "</p><p><b>Municipio: </b>" . $city;
        $info .= "</p><p><b>Estado: </b>" . $state . "</p><p><b>Código Postal: </b>" . $zip_code . "</p><p><b>País: </b>" . $country . "</p><p><b>Copia Adicional: </b>" . $send_copy . " </p><p><b>Política de privacidad: </b>" . $privacy_policy ."</p>";
        $html_client= __DIR__.'/mail_assets/correo_cliente_es.html';
        $html_admin = __DIR__.'/mail_assets/correo_admin_es.html';
        $name_mail = 'Thermonox Contacto';
        $subject_client = 'Thermonox Contacto Copia Formulario';
        $subject_admin = 'Thermonox Cliente Asunto: ' . $subject;
        $sentMessageTitle= 'CORREO ENVIADO';
        $sentMessageBody= 'Nos podremos en contacto a la brevedad.';
        $errorCopyMessage = 'No se pudo enviar la copia del correo';
        $errorMessage = 'No se pudo enviar el correo';
        
    }else{
        $info = "<p><b>Name: </b>" . $name . "</p><p><b>Email: </b>" . $email .  "</p><p><b>Subject: </b>" . $subject .  "</p><p><b>Message: </b>" . $message . "</p><p><b>User Type: </b>" . $user_type . "</p><p><b>City: </b>" . $city;
        $info .= "</p><p><b>State: </b>" . $state . "</p><p><b>Zip Code: </b>" . $zip_code . "</p><p><b>Country: </b>" . $country . "</p><p><b>Additional copy: </b>" . $send_copy . " </p><p><b>Privacy Policy: </b>" . $privacy_policy ."</p>";
        $html_client= __DIR__.'/mail_assets/correo_cliente_en.html';
        $html_admin = __DIR__.'/mail_assets/correo_admin_en.html';
        $name_mail = 'Contact Thermonox';
        $subject_client = 'Contact Thermonox Form Copy';
        $subject_admin = 'Thermonox Client Subject: ' . $subject;
        $sentMessageTitle= 'EMAIL SENT';
        $sentMessageBody= 'We will contact you shortly.';
        $errorCopyMessage = 'The copy of the email could not be sent';
        $errorMessage = 'The email could not be sent';
    }

    //Set boolean if additional copy was requested
    if(($send_copy=='Solicitada') || ($send_copy=='Requested')){
        $send_copy= true;
    }else{
        $send_copy= false;
    }

    //Send mails 
    if(isset($_POST['enviar'])){
       try{
            $mail = new PHPMailer(true); //Creates a new PHPMailer instace
            $mail->isSMTP(); //Establises SMTP Protocol
            $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
            $mail->Host = "smtp.office365.com";//Name of the SMTP Server used. 
            $mail->Port = 587; // TLS only
            $mail->SMTPSecure = 'STARTTLS'; // Sets STARTTLS security protocol  
            $mail->SMTPAuth = true; //SetS SMTP authentication
            $mail->Username = $username; // Email account used to send emails
            $mail->Password = $password; // Password of email account used to send emails
            $mail->CharSet = 'UTF-8'; // Use special characters
            $mail->AddEmbeddedImage($sImagen, 'logo'); //Adds embedded image
            $mail->AltBody = 'Información de Contacto: '. $info; //Set the body of the message to text only
            
            //Sends copy of email to client if requested
            if ($send_copy){
                try{
                    $mail->setFrom($username, $name_mail); // From email and name
                    $mail->addAddress($email, $name); // To email and name
                    $mail->Subject = $subject_client; //Subject for client
                    $shtml = file_get_contents($html_client); // Read html
                    $incss = str_replace('<style id="estilo"></style>',"<style>$scss</style>",$shtml); //Replace css in html file
                    $body = str_replace('<p id="message"></p>',$info,$incss); // Replace message content
                    $mail->Body = $body; 
                    $mail->send();
                }catch (Exception $e){
                    echo "<div class='mail_message mail_message-error'><p class='mail_title'>ERROR</p> <p>".$errorCopyMessage ."</p><p>". $mail->ErrorInfo. "</p> </div>"; //Error message is email copy was not sent
                }   
                
            }
            $mail->ClearAddresses(); //Clears previous addresses to avoid sending two times the email to the administrator.
            $mail->setFrom($username, $name_mail); // From email and name
            $mail->addAddress($email_admin, $name_mail); // To email and name
            $mail->Subject = $subject_admin; //Subject for administrator
            $shtml = file_get_contents($html_admin); // Read html
            $incss = str_replace('<style id="estilo"></style>',"<style>$scss</style>",$shtml); //Replace css in html file
            $body = str_replace('<p id="message"></p>',$info,$incss); // Replace message content
            $mail->Body = $body; 

            if($mail->send()){
                echo "<div class='mail_message mail_message-sent'><p class='mail_title'>".$sentMessageTitle."</p> <p>".$sentMessageBody."</p> </div>"; //Message is email was sent
            }
        }catch (Exception $e){
            echo "<div class='mail_message mail_message-error'><p class='mail_title'>ERROR</p> <p>".$errorMessage ."</p><p>". $mail->ErrorInfo. "</p> </div>"; //Error message is email was not sent
        }
        
    }
?> 