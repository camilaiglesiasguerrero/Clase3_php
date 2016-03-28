<h1>DATOS RECIBIDOS</h1>
<?php 
echo "Recibidos: <br>";
var_dump($_POST);
//var_dump($_POST);
echo "<br>";
$nombre = $_POST['usuario']; // => que puedo tomar una variable del array, asignarsela a una variable y mostrarla. O bien puedo trabajar directamente desde el itemd del array
echo $nombre;
echo $_POST['password'];

if($nombre=="admin" && $_POST['password'] == "1234")
{
	include"bienvenida.html";
}
else
{
	include"no_loggueado.html";
}


 ?>
