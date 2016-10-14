<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Images\idea-genial.png">
    <title>..--|Aula virtual|--..</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="CSS/jumbotron-narrow.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style,css">
    <link rel="stylesheet" href="CSS\font-awesome.css">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
    <section id="principal">
    <h1 class="text-center">Listado de productos</h1>
    <form style="display: block; margin:0px auto; text-align: center;" name="frmbusqueda" accept-charset="utf-8" method="GET"></form>
    <label for="">Producto a buscar : </label>
    <input type="text" name="producto" maxlength="50">
    <input type="submit" name="buscar" value="buscar">
    </section>
    <?php
    header('Content-Type: text/html;charset=UTF-8');
    include_once 'includes/bdd.php';
    $con=crearConexion();
    $con->set_charset("utf8");
    if (isset($_GET['buscar']))
    {
        $claveBusqueda=$_GET['producto'];
        $sql="select pro.id_producto, pro.descripcion, pro.precio, pro.cantidad, cat.descripcion from categorias catinner join productos pro on cat.id_categoria=pro.id_categoria where pro.descripcion like concat('%','$claveBusqueda','%')
        order by pro.descripcion";
        }
        else
        {
    $sql="select pro.id_producto,pro.descripcion, pro.precio,pro.cantidad,cat.descripcion from categorias cat
    inner join productos pro on cat.id_categoria=pro.id_categoria order by pro.descripcion";
    }
    $result=$con->query($sql);
    echo "<table style='margin: 0px auto;border:1px solid #cccccc;font-family:Verdana, Arial, Helvetica'>";
    echo "<thead style='background-color:#16a085;color:#ffffff'>";
    echo "<tr>";
    echo "<th>";
    echo "Codigo";
    echo "</th>";
    echo "<th>";
    echo "Descripcion";
    echo "</th>";
    echo "<th>";
    echo "precio";
    echo "</th>";
    echo "<th>";
    echo "cantidad";
    echo "</th>";
    echo "<th>";
    echo "categoria";
    echo "</th>";
    echo "</thead>";
    echo "<tbody>";
    while ($row=$result->fetch_row())
    {
        echo "<tr>";
        foreach ($row as $valor)
        {
            echo "<td style='border:1px solid #ccc;text-align:center'>";
            echo $valor;
            echo "</td>";
            }
            echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            /* cerrar la conexión */
            $con->close();
      ?>

        <footer class="footer">
            <div class="container text-center">
                <p>&copy; 2016 Todos los derechos reservados.</p>
                <a href="login.php"><span class="glyphicon glyphicon-log-in fa-2x" aria-hidden="true"></span></a>
                <a href="https://www.facebook.com/groups/193592334396351/"><span><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></span></a>
                <a href="https://github.com/Polaken"><span><i class="fa fa-github fa-3x" aria-hidden="true"></i></span></a>
                <a href="https://twitter.com/Aula_virtual_ok"><span><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></span></a>
                <a href="https://plus.google.com/communities/104682285015405256311"><span><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></span></a>
                <a href="contacto.html"><span><i class="fa fa-ticket fa-3x" aria-hidden="true"></i></span></a>
            </div>
        </footer>
    </div>
    <script src="JS/jquery-3.1.1.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
