<?php

include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
$nombre =$_POST['nombre'];
$email = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'sistemas2@agcollege.edu.mx';
$mail->Password = 'keko1234';
$mail->IsHTML(true);

//$mail->From = $_POST['email'];
$mail->FromName = 'Web Instituto Toks';
$mail->Subject = 'Contacto Pagina Web Instituto Toks';
$mail->MsgHTML(
    '<h2><center>-------------------- Contacto ---------------------</center></h2>'.
    '<p>Nombre de la persona:<strong>'.$nombre.'</strong></p>'.
    '<p>Teléfono:<strong>'.$telefono.'</strong></p>'.
    '<p>Correo Electrónico:<strong> '.$email.'</strong></p>'.
    '<h2><center>-------------------- Mensaje ---------------------</center></h2>'.
    '<p>Mensaje:<br> <strong>'.$mensaje.'</strong></p>'
);

//$mail->AddAddress('casa@agcollege.edu.mx' , 'Asesor');
$mail->AddAddress('ernesto.torres@aggroup.com.mx' , 'Asesor');

//$mail->AddAddress('admisiones@umi.edu.mx' , 'Asesor');

/*
 $mail->AddAddress('cesar.ibarra@agcollege.edu.mx' , 'Cesar Ibarra');
 $mail->AddAddress("paul.acosta@agcollege.edu.mx","Paul Acosta");
 $mail->AddAddress("diracademica@agcollege.edu.mx","Vanessa Fuentes");
 $mail->AddAddress("asesor2@agcollege.edu.mx","Fredy Sapiens");
 $mail->AddAddress("sorianaprepa@gmail.com","Soriana Prepa");
*/

if(!$mail->Send()) {
    echo 0;
    //echo 'Error: ' . $mail->ErrorInfo;
    //header('Refresh: 2; url=' . $_SERVER['HTTP_REFERER']);
} else {
    echo 1;
}

?>