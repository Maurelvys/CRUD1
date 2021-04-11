<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Guardar Datos</title>

</head>

<body>

        <?php

        $conexion=mysqli_connect ("localhost", "nombre usuario", "clave usuario", "nombre BDD   ")
        or die("Problemas con la conexion");

        $consulta=mysqli_query($conexion,"select * from Zapatos where Referencia='$_POST[busqueda]'")
        or die ("Ha ocurrido un problema al realizar la seleccion". mysqli_error($conexion));

        if ($consul=mysqli_fetch_array($consulta)){

            echo "Referencia:". " " . $consul['Referencia']."<br>";
            echo "Marca:". " " . $consul['Marca']."<br>";
            echo "Color:". " " . $consul['Color']."<br>";
            echo "Talla:". " " . $consul['Talla']."<br>";
        }
        else{
            echo "Los zapatos no se encuentran registrados en sistema";
        }

        mysqli_close($conexion);

        ?>


        <input style="color: #003366; background-color: #99CCFF" type="button" onclick="location.href='index.php';" value="Regresar" />
</body>


</html>
