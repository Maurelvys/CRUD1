<!DOCTYPE html>
<html>

<head>

 <meta charset="UTF-8">

    <title>REGISTRO</title>

    <header style="text-align: center"><h3>REGISTRO DE ZAPATOS</h3></header><br>

</head>

<body>

<div style="text-align: center">

<form method="post" action="guardar.php">

        Ingrese referencia <input type="text" name="Ref" required /><br><br>

        Ingrese la marca <input type="text" name="marca" required /><br><br>

        Ingrese el color <input type="text" name="color" required /><br><br>

        Ingrese la talla: <input type="text" name="talla" required /><br><br>

    <input style="color: #003366; background-color: #99CCFF" type="submit" value="Enviar">
    <input style="color: #003366; background-color: #99CCFF" type="reset" value="Limpiar">
    <input style="color: #003366; background-color: #99CCFF" type="button" onclick="location.href='index.php';" value="Regresar" />

</form>

</div>

</body>

</html>
