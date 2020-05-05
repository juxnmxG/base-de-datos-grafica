<?php
include ('../conexion/conexion.php');
include ('../class/estudiante.php');

if (isset ($_POST["est_name"])){

  $nombre = $_POST["est_name"];
  $id = $_POST["est_id"];
  $fecha = $_POST["est_fec"];

  $query = 'create (n:estudiante {est_id: '".$id."', est_name:'".$nombre."', est_fec:'".$fecha."'})';
  $result = $connection->sendCypherQuery($query)->getResult();
}

if (isset ($_POST["eliminar"])){

  $nom = $_POST["eliminar"];

  $query = "MATCH path = (e: estudiante)
            WHERE e.est_name = {theName}
            DELETE path";
            
  $params = ['theName' => .$nom.];
  $result = $connection->sendCypherQuery($query, $params);
}

/*$query = 'MATCH (m: estudiante {est_name: $nombre }) return m';
$result = $connection->sendCypherQuery($query)->getResult();
$estudiante = $result->get('m');*/
?>

<div class="" style="margin: 100px; padding: 100px; background: black;  align-items: center">
  <h1 style="color: white">Añadir Estudiante</h1>
  <form class="" action="addestudiante.php" method="post" style="width:30%; display: inline">
    <input type="text" name="est_id" style="display: block; margin: 30px">
    <input type="text" name="est_name" style="display: block; margin: 30px">
    <input type="date" name="est_fec" style="display: block; margin: 30px">
    <input type="submit" name="Enviar" value="Enviar " style="display: block; margin: 30px">
  </form>
  <h1 style="color: white">Eliminar Estudiante</h1>
  <form class="" action="addestudiante.php" method="post" style="display: inline; width:30%">
    <input type="text" name="eiminar" style="display: block; margin: 30px">
    <input type="submit" name="Eliminar" value="Eliminar" style="display: block; margin: 30px">
  </form>
</div>
