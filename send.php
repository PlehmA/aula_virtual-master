session_start();
if (isset($_POST['enviar']) && $_POST['captcha'] && $_POST['captcha'] !="" && $_SESSION['code']==$_POST['captcha'])
{
$nombre=$_POST['nombre'];
$mail=$_POST['mail'];
$empresa =$_POST['empresa'];
$header .= "From:" . $mail . "\r\n";
$header .= "Mime Version 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", de la empresa " . $empresa . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = "info@micorreo.com.ar";
$asunto = "Pedido de Informacion de:" . $nombre;

if (($nombre=="") or ($mail=="") or ($_POST['mensaje']==""))
{
echo 
"Error en el envio del correo";
}
else
{
mail($para, $asunto, utf8_decode($mensaje), $header);
echo "correo enviado";
}
// Trabajo con la base de datos.
if (isset($_POST['novedades']))
{
header('Content-Type: text/html;
charset=UTF-8');
include_once "bdd.php";
$con = crearConexion();
$con->set_charset("utf8");
$sql="insert into clientes (nombre,empresa,email) values (?,?,?)";
$stmt = $con->prepare($sql);
/* Bind parameters. Tipos: s = string, i = integer, d = double,  b = 
blob */
$stmt->bind_param('sss', $nombre,$empresa,$mail);
$stmt->execute();
$stmt->close();
$con->close();
} 
// if checkbox novedades
elseif ($_SESSION["code"]!=$_POST["captcha"]) 
{
echo "<p style='text
-
align:center'>Codigo Invalido</p>";
}
}