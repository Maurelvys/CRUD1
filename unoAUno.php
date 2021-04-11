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

        $consulta=mysqli_query($conexion,"select Referencia from Zapatos where Referencia='$_POST[refEliminar]'")
        or die ("Problemas en la seleccion". mysqli_error($conexion));

        if ($consul=mysqli_fetch_array($consulta)){
            mysqli_query($conexion, "delete from Zapatos where Referencia='$_POST[refEliminar]'")
                or die ("Problemas en el select". mysqli_error($conexion));
            echo "El borrado se ha realizado satisfactoriamente";
        }
        else{
            echo "La referencia que ha introducido no se encuentra registrada";
        }

        mysqli_close($conexion);

        ?>

<br>
<input style="color: #003366; background-color: #99CCFF" type="button" onclick="location.href='index.php';" value="Regresar" /><br><br>

</body>

</html>
