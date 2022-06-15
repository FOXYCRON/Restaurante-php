<html>
  <head>
	<meta charset = "utf-8"/>
    <title> pedidos </title>
  <link href="Estilos/style-consulta.css" rel="stylesheet" type="text/css">
	
</head>
  <body>
  
  
  <header class="cabezera">
	  
  Todos los pedidos
	  
	  </header>
	  
	  <a href="index.html"> <img src="Imagenes/home.png" width="71" height="59" alt=""/> </a>
	  
  <div class="img">
	  
    <aside class="tapa">   </aside>
	  <aside class="tapa2">   </aside>
        
  </div>
	  
	  <div class = "info">
	  
		  <main>
		  
      <?php
       $ar = fopen("datos.txt", "r") or
         die ("Aun no tenemos pedidos nuevos desde el ultimo reinicio.");
       while (!feof($ar)) {
         $linea = fgets($ar);
         $lineasalto = nl2br($linea);
       echo $lineasalto;
     }
      fclose($ar);
    ?>
		  
		  </main>
		  
	  </div>
	  
  </body>
</html>