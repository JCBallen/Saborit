<?php

include_once 'conexion.php';

// if (isset($_POST['track-id'])){
// $idtrack=$_POST['track-id'];
// echo '<pre>';
// var_dump($idtrack);
// echo '</pre>';
$sql="SELECT * FROM tracker WHERE code = {$_POST['track-id']}";
if($sql){
$sentencia=$pdo->prepare($sql);
$sentencia->execute();
$resultado = $sentencia->fetch();

// $latitud=$resultado['lt'];

// // $resultado=array(13,29,"carro");
// $resultado=[1,3,"uy"];
// var_dump("")

// header('Content-Type: application/json');
// echo json_encode(utf8_encode($resultado));

$objeto='{
    "latitud":"'.$resultado['lt'].'",
    "longitud":"'.$resultado['lg'].'"
}';

echo $objeto;
}
// }
// $show_json = json_encode($latitud , JSON_FORCE_OBJECT);
// if ( json_last_error_msg()=="Malformed UTF-8 characters, possibly incorrectly encoded" ) {
//     $show_json = json_encode($API_array, JSON_PARTIAL_OUTPUT_ON_ERROR );
// }
// if ( $show_json !== false ) {
//     echo($show_json);
// } else {
//     die("json_encode fail: " . json_last_error_msg());
// }
// header('location:Tracking.php');


?>