<html>
  <head> 
     <title> Consulta 2 </title>
  </head>
   <body>
    <?php
         $conexion = mysqli_connect("localhost", "root", "cbtis043", "base1") or
          die("Problemas con la conexión");
 
           $registros = mysqli_query($conexion, "select codigo, nombre, mail, codigocurso
            from alumnos where mail = '$_REQUEST[mail]'") or
       die("problemas en el select: " . mysqly_error($conexion));

       if ($reg = mysqli_fetch_array($registros)) {
         echo "Nombre: " . $reg['nombre'] . "<br>";
         echo "Curso: ";
         switch ($reg['codigocurso']) {
          case 1:
            echo "PHP";
            break;
          case 2:
            echo "HTML";
            break;
          case 3:
            echo "JS";
            break;
         } 
     } else {
        echo "No existe un alumno con ese mail.";
}
    ?>
   </body>
</html>