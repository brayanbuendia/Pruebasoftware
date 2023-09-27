<?php
$f=$_FILES['foto']['tmp_name'];
$name=$_FILES['foto']['name'];
$rutanueva="imagenes/".$name;

move_uploaded_file($f, $rutanueva);
$cone=mysqli_connect('localhost', 'root', '', 'clientes');
        $a=$_POST['textfield'];
        $b=$_POST['textfield2'];
        $c=$_POST['textfield3'];
        $d=$_POST['textfield4'];
        $e=$_POST['textfield5']; 
        $f=$_POST['ciu'];



$consulta="INSERT INTO cliente VALUES ('$a', '$b', '$c', '$d' , '$e' , '$f' '$rutanueva')"; 
$eje=mysqli_query($cone, $consulta);

if(!$eje) {
    echo "no se guardo datos";
}else{
    echo "datos guardados con exito";


}

?>

', '$rutanueva')";