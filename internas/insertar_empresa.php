<?php
      // proceso para guardar un nuevo registro a la base de datos
      include("config.php");
      include("class_mysqli.php");

      $nombre = $_REQUEST['nombre'];
      $siglas = $_REQUEST['siglas'];
      $direccion = $_REQUEST['direccion'];
      $nombre_gerente = $_REQUEST['nombre_gerente'];
      $num_sucursales = intval($_REQUEST['num_sucursales']);
      $num_empleados = intval($_REQUEST['num_empleados']);
      $ventas_mensuales = intval($_REQUEST['ventas_mensuales']);
      $cadena = "insert into `empresa_automotriz`( `nombre`, `siglas`,`direccion`, 
        `nombre_gerente`, `num_sucursales`, `num_empleados`, `ventas_mensuales`) values ('%s', '%s', '%s', '%s', '%d', '%d', '%d');"; 
      $cadena = sprintf($cadena, $nombre, $siglas, $direccion, $nombre_gerente, $num_sucursales, $num_empleados, $ventas_mensuales);
      echo $cadena;
      $miconexion= new class_mysqli;
      $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
      $miconexion-> consulta($cadena);
      
      if($miconexion){
        // si hay existo con la inserción, 
        // se realiza un redirect a index.php
        header("Location: ../index.php");
      }else{
        // si exite un error
        // se captura el error
        // se hace un redirect a nuevo.php
        // además se envía el mensaje de error
        // como parámetro
        $mensaje = $miconexion -> error;
        header("Location: nuevo_parque.php?error=".$mensaje);
      }
?>
