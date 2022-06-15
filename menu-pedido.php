<!DOCTYPE html>
<html>
    <head>
        <title> Menu </title>
    <link href="Estilos/style-menu.css" rel="stylesheet" type="text/css">
    <link href="Estilos/style-menu-p.css" rel="stylesheet" type="text/css">

</head>
    <body>
    
		
    <header class="cabezera">
	  
  menu
  
		&nbsp; </header>
	  
	  <a href="menu.html"> <img src="Imagenes/atras.png" width="71" height="59" alt=""/> </a>
		
		
	<div class="par1">
		
	  <aside>
	    <nav>
			
      <?php
	$conexion = mysqli_connect("localhost", "root", "irvinadrian5", "base1") or
  die("Problemas con la conexion.");

      mysqli_query($conexion, "insert into restaurante (NumOrden,Cliente,Pedido,Precio) values
                            ('$_REQUEST[numero]','$_REQUEST[nombre]','$_REQUEST[pedido]',$_REQUEST[precio])") 
        or die("Problemas en el select" . mysqli_error($conexion));

      mysqli_close($conexion);

      echo"El cliente fue dado de alta.";
?>
			
		  </nav>
      </aside>
	  <main class="cuadro"> 
		  
	  </main>
	</div>
    </body>
</html>