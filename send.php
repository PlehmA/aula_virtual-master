session_start();
if (isset($_POST['enviar']) && $_POST['captcha'] && $_POST['captcha'] !="" && $_SESSION['code']==$_POST['captcha'])
{
$nombre=$_POST['nombre'];
$mail=$_POST['mail'];
$empresa =$_POST['empresa'];
$header .= "From:" . $mail . "\r\n";
$header .= "Mime Version 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", de la 
empresa " . $empresa . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = "info@micorreo.com.ar";
$asunto = "Pedido de Informacion de:" . $nombre;

}