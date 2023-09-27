<?php
$el=$_GET['t'];
$con=mysqli_connect("localhost", "brayan", "3226165364","clientes");
$a=mysqli_query($con, "delete from ciudad where idciudad='$el' ");
if(!$a){

echo "Datos no eliminados";
}

else{
echo "Datos eliminados";
echo "<a href='cim.php'>Regresar</a>";
}