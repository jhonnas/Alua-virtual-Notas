<?php
//conexion con la ase de datos y el servidor

$link = mysql_connect("localhost","root","") or die ("<h2>NO se encuentar conectado</h2>");
$db = mysql_select_db("registro",$link) or die("<h2>Error de Conexion</h2>");

//obtenemos los valores del formulario
$idecurso= $_POST('idecurso');
$curso= $_POST('curso');
$iddocente=$_POST('iddocente');
$nota=$_POST('notas'); 

//ingresar la informacion a la tabla de datos

mysql_query("INSERT INTO datos VALUES ('','$curso','$iddocente','$nota')", $link);
echo '

    <h2>Registro Completo</h2>
    <a href="notas.html"></a>
    ';

 ?>   