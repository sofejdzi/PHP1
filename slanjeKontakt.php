<?php
    ob_start();
    session_start();
    if(isset($_POST['send'])){

        $imePrezime=$_POST['imePrezime'];
        $poruka=$_POST['poruka'];
        $ispravno=true;

        if(empty($imePrezime)){ 
            $ispravno=false; 
        } 
        if(empty($poruka)){ 
            $ispravno=false; 
        }

        $userEmail = $_SESSION['korisnik']->email;

        if($ispravno==true){
            $mail = new PHPMailer(true);

            try{
                $mail->SMTPDebug = 0;  
                $mail->isSMTP();  
                $mail->Host = 'smtp.gmail.com';  
                $mail->SMTPAuth = true;  
                $mail->Username = 'sofijastolic@gmail.com';  
                $mail->Password = 'Password123';  
                $mail->SMTPSecure = 'tls';  
                $mail->Port = 587;  

                $mail->setFrom($emailFrom, $emailName); 
                $mail->addAddress('sofijastolic@gmail.com', 'Zdrava hrana Sanitas'); 
                $mail->isHTML(true);  
                
                $mail->imePrezime= $imePrezime; 
                $mail->Body = $poruka; 
                $mail->send();
            }
            catch(Exception $e){                                         
                echo $e->getporuka();                                     
            }
        }
    
    }
?>