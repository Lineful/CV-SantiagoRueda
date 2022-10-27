<?php

require_once('conexion.php')

?>
<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leer registros</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
    <script src="../JS/scriptfrontend.js"></script>
</head>
<header class="header">

<ul>
    <li id="seccion1" onmouseover="ver(1)" onmouseout="ocultar(1)">
        <a >USUARIO </a>
        <div id="subseccion1">
            <p><a href="../HTML/registrar.html">REGISTRAR</a></p>
            <P><a href="">LOGIN</a></P>


        </div>
    </li>
    <li id="seccion2"onmouseover="ver(2)" onmouseout="ocultar(2)">
        <a >FUNCIONES</a>
        <div id="subseccion2">
            <p><a href="../HTML/edad.html">EDAD</a></p>
            <p><a href="../HTML/numeromayor.html">NUMERO MAYOR</a></p>
            <p><a href="../HTML/game.html">JUEGO</a></p>
            <p><a href="../HTML/arrays.html">ARRAYS</a></p>
            <p><a href="../HTML/mru.html">MRU</a></p>
        </div>
    </li>
    <li id="seccion3" onmouseover="ver(3)" onmouseout="ocultar(3)">
        <a >NOSOTROS</a>
        <div id="subseccion3">
            <p><a href="">MISION</a></p>
            <P><a href="">VISION</a></P>
        </div>
    </li>

</ul>



</header>
<body>

<section id="contenedor">

<h2 id="registros">REGISTROS</h2>

<table border="3" id="tabla">

 <tr>
    <td>NOMBRE</td>
    <td>APELLIDO</td>
    <td>EMAIL</td>
    <td>IDENTIFICACIÓN</td>
</tr>

<?php

$sql="select * from estudiante";
$resultado=mysqli_query($conn,$sql);
while($mostrar=mysqli_fetch_array($resultado)){



?>

<tr>

<td ><?php echo $mostrar['nombre'] ?> </td>
<td ><?php echo $mostrar['apellido'] ?> </td>
<td ><?php echo $mostrar['email'] ?> </td>
<td ><?php echo $mostrar['identificacion'] ?> </td>

</tr>

<?php 

}

?>

</table>


</section>

</body>





</html>