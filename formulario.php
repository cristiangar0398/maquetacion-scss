<?php

if (isset($_POST['submit'])){

    $nombre = $_POST["nombre"];
    $telefono = $_POST["correo"];
    $correo = $_POST["Telefono"];
    $mensaje = $_POST["menseje"];
 
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();

    $mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'formularioholiday@gmail.com';
    $mail->Password = 'Holiday2020';

    $mail->setFrom($correo, $nombre);
    $mail->addAddress('formularioholiday@gmail.com', 'Receptor');

    $mail->isHtml(true);
    $mail->Subject = 'Enviado por '. $nombre;
    $mail->Body = '<h1> Nombre: ' .$nombre. '<br> Email: ' .$correo. '<br> Telefono: ' .$telefono. '<br> Mensaje: ' .$mensaje. '</h1>' ;

    if($mail->send()) {
        echo '<script> 
        alert("el mensaje fue enviado correctamente");
        window.history.go(-1);
        </script> ';
		} 
}
?>