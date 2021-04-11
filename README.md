## Mi Primer CRUD

Un CRUD es un programa con el que aquellos programadores que recién se inician, pueden dar sus primeros pasos fácilmente.
Esta palabra es un acrónimo que significa C (Create), R (Read), U (Update) y D (Delete).
Dicho de mejor manera; un CRUD debe poder insertar, leer, actualizar y eliminar datos.

Para la realización de este CRUD se utilizaron PHP y MySQL; para mostrar una interfaz adecuada, se utilizó HTML.

Como todo CRUD, éste comienza con un menú de opciones; donde el usuario puede elegir qué operación desea realizar.
Estas operaciones son: registro de datos, consulta general e individual de datos, actualización y borrado de datos.

Para la realizacion de mi CRUD, debi crear varios ficheros:

## 1° index.php
En este se realizo el menú principal. Para ello, se utilizó HTML para la interfaz y botones de conexión con las páginas solicitadas; como se muestra en el código.

## 2° create.php
Por medio de un formulario con el metodo POST, se solicita la informacion que el usuario desea registrar, para posteriormente pasar a la siguiente direccion con un registro exitoso.

## 3° guardar.php
En el fichero guardar, se van a ir registrando los datos introducidos por el usuario. Para ello, se debe realizar la conexion con la Base de Datos, luego el comando insert para ir guardando cada dato.

## 4° Consulta.php
En este punto, se inicia directamente con la conexion de la Base de Datos; pues, aca se seleccionan todos los registros que se encuentran ya dentro del sistema.

## 5° consultaIndividual.php
En este fichero se recoge el dato primario, el cual debe ser introducido por el usuario, para luego pasar a mostrar la informacion individual del producto.
Esta solicitud, se realizo mediante un formulario con el metodo POST.

## 6° especifica.php
En este apartado se vuelve hacer la conexion con la Base de Datos para, dependiendo de los datos ingresados en consultaIndividual, mostrar el resultado.

## 7° actualizando.php
Para la parte de la actualizacion de datos, se debio realizar tres ficheros; el primero de ellos es el de actualizando. Aca se recolecta un dato en especifico introducido por el usuario para poder pasar a la siguiente seccion.

## 8° actualizado.php
Una vez ingresado el dato en la pagina anterior, se procede a conectar con la base de datos para realizar la seleccion del producto a modificar.

## 9° exitoso.php
Para culminar con la actualizacion de los datos, se vuelve a realizar la conexion con la Base de Datos; pero esta vez para iniciar con la actualizacion por parte del usuario; por lo que, justo aca se realiza el cambio y se guarda en el registro.

## 10° borrarUnoAno.php
Por ultimo pero no menos importante, el programa permite borrar datos del registro. Para ello, lo primero que se hace es crear un formulario con el metodo POST para solicitar el dato principal que nos llevara a la informacion general del producto que se desea eliminar.

## 11° unoAUno.php
Para culminar el proceso, se pasa a conectar con la base de datos, seguidamente se realiza la seleccion del producto a eliminar y por ultimo se eliminan los datos de nuestro registro. Cabe resaltar que no se eliminaran todos los datos que se encuentren registrados; sino unicamente el indicado por el usuario.
