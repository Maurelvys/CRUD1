<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

    <title>Guardar Datos</title>

    </head>

<body>

    <?php

        $conexion=mysqli_connect ("localhost", "nombre usuario", "clave usuario", "nombre BDD")
        or die("Problemas con la conexion");

        mysqli_query($conexion,"insert into Zapatos(Referencia, Marca, Color, Talla) 
                values ('$_POST[Ref]','$_POST[marca]','$_POST[color]','$_POST[talla]')")
                or die ("Problemas en la seleccion". mysqli_error($conexion));

        mysqli_close($conexion);

        echo "Los datos fueron registrados con exito.";

    ?>
<br>
<input type="button" onclick="location.href='index.php';" value="Regresar" />

</body>

</html>
