<?php

require_once('conexion.php');
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$Email=$_POST['Email'];
$identificacion=$_POST['ID'];
print($nombre);
print('<br>');
print($apellido);
print('<br>');
print($Email);
print('<br>');
print($identificacion);

$sql=("INSERT INTO `estudiante` (`nombre`, `apellido`, `email`, `identificacion`) VALUES
 ('$nombre', '$apellido', '$Email', '$identificacion')");

if (mysqli_query($conn, $sql)) {
    echo "Exito en la insercion";
    header("Location: ../index.html", TRUE, 301);
    exit();
    mysqli_close($conn);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>