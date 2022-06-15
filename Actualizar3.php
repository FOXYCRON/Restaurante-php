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
	  
	  <a href="index.html"> <img src="Imagenes/home.png" width="71" height="59" alt=""/> </a>
	  
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

	mysqli_query($conexion, "update restaurante
				set NumOrden='$_REQUEST[ordenNueva]'
				where NumOrden='$_REQUEST[ordenVieja]'") or
		die("Problemas en el select:" . mysqli_error($conexion));
	echo"El numero de orden fue modificado con exito";
	?>
		  
		  </main>
		  
	  </div>
	  
  </body>
</html>