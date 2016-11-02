<?php 
session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
include_once "conexion.php";
if(isset($_POST['enviar']))//para saber si el botón registrar fue presionado.
{
    if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '' or $POST['email'] == '')
    {
        echo 'Por favor llene todos los campos.';//Si los campos están vacíos muestra el siguiente mensaje, caso contrario sigue el siguiente codigo.
    }
    else
    {
        $sql = 'SELECT * FROM usuarios';
        $rec = mysqli_query($sql);
        $verificar_usuario = 0;//Creamos la variable $verificar_usuario que empieza con el valor 0 y si la condición que verifica el usuario(abajo), entonces la variable toma el valor de 1 que quiere decir que ya existe ese nombre de usuario por lo tanto no se puede registrar
        while($result = mysql_fetch_object($rec))
        {
            if($result->usuario == $_POST['usuario']) //Esta condición verifica si ya existe el usuario
            {
                $verificar_usuario = 1;
            }
        }

        if($verificar_usuario == 0)
        {
            if($_POST['password'] == $_POST['repassword'])//Si los campos son iguales, continua el registro y caso contrario saldrá un mensaje de error.
            {
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];
                $mail = $_POST['email']
                $sql = "INSERT INTO usuarios (usuario,password) VALUES ('$usuario','$password')";//Se insertan los datos a la base de datos y el usuario ya fue registrado con exito.
                mysql_query($sql);

                echo 'Usted se ha registrado correctamente.';
            }
            else
            {
                echo 'Las claves no son iguales, intente nuevamente.';
            }
        }
        else
        {
            echo 'Este usuario ya ha sido registrado anteriormente.';
        }
    }
}?>
