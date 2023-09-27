
<?php
$con=mysqli_connect("localhost" , "brayan", "3226165364", "cliente");
$a=mysqli_query($con, "SELECT * FROM cliente");
?>
<!doctype html>

<html> <head> <meta charset="utf-8">
    <title>mostrar datos cliente</title>
</head>
<body>
    <table border="3">
    <tr>
        <td>documento</td>
        <td>nombre</td>
        <td>apellido</td>
        <td>telefono</td>
        <td>dirección</td>
        <td>ciudad</td>
        <td>foto</td>
        <td>eliminar</td>




    </tr>
    <?php while($s=mysqli_fetch_array ($a)) { ?>

    <tr>
        <td><?php echo $s ['documento']; ?> </td>
        <td><?php echo $s['nombre']; ?> </td>
        <td><?php echo $s['apellido']; ?> </td>
        <td><?php echo $s['telefono']; ?> </td>
        <td><?php echo $s['direccion']; ?> </td>
        <td><?php echo $s['idciudad']; ?> </td>
        <td><?php
                $b=mysqli_query($con,"SELECT * FROM cliente inner join ciudad on '$s[idciudad]'=ciudad.idciudad");
            $d=mysqli_fetch_array($b);
            echo $d['ciudad']; ?>
        </td>
        <td> <img src="<?php echo $s['foto']; ?>" width="50" heigt="50" ></td>
        <td><a href="elimcli.php?ec=<?php echo $s['documento']; ?>">eliminar</a></td>
    </tr>
<?php } ?>

</table>
</body> </html>

