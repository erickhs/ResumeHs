<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$proyecto = $_POST['proyecto'];
$mensaje = $_POST['mensaje'];
$para = 'erickhs.nqv@gmail.com';
$titulo = 'Mensaje desde Erickhs.com';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Proyecto: $proyecto\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Muchas gracias, tu mensaje fue enviado, te respondere en la brevedad posible.');
window.location.href = 'http://erickhs.com';
</script>";
} else {
echo 'Falló el envio, por favor intenta de nuevo.';
}
}
?>
