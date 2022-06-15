<html>
  <head>
	<meta charset = "utf-8"/>
    <title> baja </title>
  <link href="Estilos/style-consulta.css" rel="stylesheet" type="text/css">
	
</head>
  <body>
  
  
  <header class="cabezera">
	  
  baja
	  
	  </header>
	  
	  <a href="index.html"> <img src="Imagenes/home.png" width="71" height="59" alt=""/> </a>
	  
  <div class="img">
	  
    <aside class="tapa">   </aside>
	  <aside class="tapa2">   </aside>
        
  </div>
	  
	  <div class = "info">
	  
		  <main>
		  
          <?php
	$conexion = mysqli_connect("localhost", "root", "irvinadrian5", "base1") or
	die("Problemas con la conexion.");

	$registros =mysqli_query($conexion, "select NumOrden from restaurante
					where NumOrden='$_REQUEST[orden]'") or
		die("Problemas en el select:" .mysqli_error($conexion));
	if($reg = mysqli_fetch_array($registros)) {
		mysqli_query($conexion,"delete from restaurante where NumOrden='$_REQUEST[orden]'") or
			die("Problemas en el select:" . mysqli_error($conexion));
		echo"Se dio de baja el cliente con exito.";
	} else {
		echo"No existe un cliente con ese numero de orden.";
	}
	mysqli_close($conexion);
	?>
		  
		  </main>
		  
	  </div>
	  
  </body>
</html>