<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Guardar Datos</title>

    <header style="text-align: center"><h3>ACTUALIZACION DE DATOS</h3></header><br>

</head>

<body>

        <?php

        $conexion = mysqli_connect("localhost", "Maurelvys", "elpilar2021", "Zapateria") or
        die("Problemas con la conexión");

        $consulta = mysqli_query($conexion, "select * from Zapatos where Referencia='$_POST[refAct]'") or
        die("Problemas en el select:" . mysqli_error($conexion));

            ?>

        <div style="text-align: center">

            <form method="post" action="exitoso.php" >

                <?php

                while ($consul= mysqli_fetch_array($consulta)){

                    echo "Marca del Zapato <input type='text'; name= 'marcaZapatos'; value=' ".$consul['Marca']."'><br>"."<br>";
                    echo "Color del Zapato <input type='text'; name= 'colorZapatos'; value=' ".$consul['Color']."'><br>"."<br>";
                    echo "Talla Del Zapato <input type='text'; name= 'tallaZapatos'; value=' ".$consul['Talla']."'><br>"."<br>";
                    //OJO
                    echo "<input type='hidden' name='referencia' value='".$_POST['refAct']."'><br>";

                }
                ?>

                <input style="color: #003366; background-color: #99CCFF" type="submit" name="Actualizar" value="actualizar"/>
                <input style="color: #003366; background-color: #99CCFF" type="button" onclick="location.href='index.php';" value="Regresar" />

            </form>
        </div>


</body>

</html>