<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Guardar Datos</title>

</head>

<body>

    <?php

        $conexion = mysqli_connect("localhost", "Maurelvys", "elpilar2021", "Zapateria") or
        die("Problemas con la conexión");

        mysqli_query($conexion, "UPDATE Zapatos SET Marca= '$_POST[marcaZapatos]',
                                                          Color= '$_POST[colorZapatos]',
                                                          Talla= '$_POST[tallaZapatos]'
                                                      WHERE Referencia='$_POST[referencia]'")

        or die("Problemas en el select:" . mysqli_error($conexion));
        echo "La informacion fue modificada con exito";
    ?>

<br>
    <input style="color: #003366; background-color: #99CCFF" type="button" onclick="location.href='index.php';" value="Regresar" /><br>
    <input style="color: #003366; background-color: #99CCFF" type="button" onclick="location.href='Consulta.php';" value="Verificar Cambio" /><br><br>

</body>

</html>
