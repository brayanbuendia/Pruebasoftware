<?php
  
 $conn = new mysqli("localhost","brayan","3226165364", "cliente");
	
    if(!$conn){
        die("imposible conectarse: ".mysqli_error($conn));
                            echo "imposible conectarse";
    }
    if (@mysqli_connect_errno()) {
        die("Conexion ha fallado: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
    return $conn;
  ?>
