<?php 

include("db.php");
$con=conn();

if(!isset($_POST['buscar'])){
    $_POST['buscar'] = "";
    $buscar = $_POST['buscar'];
}

$buscar=$_POST['buscar'];

$sql="SELECT * FROM `Logcel_usuarios` WHERE `us_Nrocontacto` ='$buscar'";

$resul = mysqli_query($con, $sql) or trigger_error("query failed" . mysqli_error($con), E_USER_ERROR);




?>