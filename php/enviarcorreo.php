<?php

include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
require_once('connection.php');

$conexion= conexion();
mysqli_set_charset($conexion,'utf8');

$query = 
    "INSERT INTO escolar.tb_contacto_correos_enviados(pagina_origen, nombre, correo, telefono, ip, navegador, mensaje) 
        VALUES ('http://institutotoks.mx/web/', '$_POST[nombre]', '$_POST[correo]', '$_POST[telefono]', '$_POST[ip]', '$_POST[browser]', '$_POST[mensaje]')";
$conexion->query($query);
print_r($query);



?>