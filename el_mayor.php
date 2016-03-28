<html>
<head>
	<title>Ej.2</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="elPrimero"><!--Los input no es necesario que estén cerrados-->
		<input type="text" name="elSegundo">
		<input type="text" name="elTercero">
		<input type="submit" name="calcular" value="Calcular">
	</form>

	<?php 
		//var_dump($_POST);
	//ASI FUNCIONA:
	// $primero = $_POST['elPrimero'];
	// $segundo = $_POST['elSegundo'];
	// $tercero=$_POST['elTercero'];
	// $mayor;

	// if($primero>$segundo && $primero>$tercero)
	// 	$mayor=$primero;
	// else if($segundo>$tercero && $segundo>$primero)
	// 	$mayor=$segundo;
	// else
	// 	$mayor=$tercero;

//HACIENDOLO SIN DECLARAR VARIABLES : 

	if($_POST['elPrimero']>$_POST['elSegundo'] && $_POST['elPrimero']>$_POST['elTercero'])
		$_POST['elMayor']=$_POST['elPrimero'];
	else if($_POST['elSegundo']>$_POST['elTercero']&& $_POST['elSegundo']>$_POST['elPrimero'])
		$_POST['elMayor']=$_POST['elSegundo'];
	else
		$_POST['elMayor']=$_POST['elTercero'];

	var_dump($_POST);

	 ?>

</body>
</html>