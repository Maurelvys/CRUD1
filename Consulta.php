<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

    <title>Consulta de Datos</title>

    <header style="text-align: center"><h3>REGISTRO GENERAL</h3></header>

</head>

<body>


    <?php

    $conexion=mysqli_connect ("localhost", "Maurelvys", "elpilar2021", "Zapateria")
    or die("Problemas al conectar con la base de datos");

    $consulta=mysqli_query($conexion,"select * from Zapatos")
    or die ("Problemas en la seleccion". mysqli_error($conexion));

    echo "<table align='center' border='1'> 
            <tr>
            <td>Referencia</td>
            <td>Marca</td>
            <td>Color</td>
            <td>Talla</td>
            </tr>";
    
    while ($consul=mysqli_fetch_array($consulta)){
        "<tr>";
        echo "<td>". $consul['Referencia']."<br>";
        echo "<td>". $consul['Marca']."</td>";
        echo "<td>". $consul['Color']."</td>";
        echo "<td>". $consul['Talla']."</td>";
        echo "</tr>";
    }

    Echo "</table>";

    mysqli_close($conexion);

?>

</div>

    <br>
    <div style="text-align: center">
    <input style="color: #003366; background-color: #99CCFF" type="button" onclick="location.href='index.php';" value="Regresar" />
    </div>
</body>

</html>
