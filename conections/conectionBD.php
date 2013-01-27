
<?php
function conectarse(){
$servidor = "localhost";
$user = "root";
$password = "root";
$bd = "webAbogados";

$conexion = new mysqli ($servidor, $user, $password,$bd);
return $conectar;
}
$conexion= conectarse();
/*abogado accidente
abogado de accidente*/
 ?>
