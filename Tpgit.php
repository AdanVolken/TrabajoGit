<?php
$nombre= $_POST['nombre'];
$apellido=$_POST['apellido'];
$nota1=$_POST['parcial1'];
$nota2=$_POST['parcial2'];

$media= round(($nota1+$nota2)/2);


echo "El alumno: $nombre $apellido"."<br><br>";
echo "Tiene las siguientes notas, Parcial 1: $nota1 y en el Parcial 2: $nota2". "<br><br>";
echo "El promedio de las notas es: $media  ";
if ($media<=5)
{
    echo "Desaprobado";
}
else if ($media>=6)
{
    echo "Aprobado";
}
