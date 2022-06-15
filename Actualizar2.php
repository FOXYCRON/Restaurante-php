<html>
  <head>
	<meta charset = "utf-8"/>
    <title> Actualizar </title>
  <link href="Estilos/style-consulta.css" rel="stylesheet" type="text/css">
	
</head>
  <body>
  
  
  <header class="cabezera">
	  
  Actualizar pedido
	  
	  </header>
	  
	  <a href="consulta.html"> <img src="Imagenes/atras.png" width="71" height="59" alt=""/> </a>
	  
  <div class="img">
	  
    <aside class="tapa">   </aside>
	  <aside class="tapa2">   </aside>
        
  </div>
	  
	  <div class = "info">
	  
		  <main>
		  
			<center><h1>ACTUALIZAR</h1></center>
			<?php
	$conexion = mysqli_connect("localhost", "root", "irvinadrian5", "base1") or
		die("Problemas con la conexion.");

	$registros = mysqli_query($conexion, "select * from restaurante
				where NumOrden='$_REQUEST[numero]'") or
	die("Problemas en el select:" . mysqli_error($conexion));
	if ($reg=mysqli_fetch_array($registros)) {
		?>
	<form method="post" action="Actualizar3.php">
		Ingrese el nuevo Numero de Orden:
		<input type="text" name="ordenNueva" value="<?php echo $reg['NumOrden'] ?>">
		<br>
		<input type="hidden" name="ordenVieja" value="<?php echo $reg['NumOrden'] ?>">
		<input type="submit" value="Modificar">
	</form>
<?php
	} else
	echo "No existe un pedido como este.";
?>
		  
		  </main>
		  
	  </div>
	  
  </body>
</html>