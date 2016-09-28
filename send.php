session_start();
if (isset($_POST['enviar']) && $_POST['captcha'] && $_POST['captcha'] !="" && $_SESSION['code']==$_POST['captcha'])
$nombre=$_POST['nombre'];
$mail=$_POST['mail'];
$empresa =$_POST['empresa'];
$header = "From:" . $mail . "\r\n";