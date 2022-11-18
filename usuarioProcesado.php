<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    
    include("menu.php");
    

    $name = $_POST['user'];
    $ncontacto = $_POST['nconta'];
    $ncontacto2 = $_POST['ncont2'];
    $marca = $_POST['marca'];
    $dañosHad = $_POST['Had'];
    $dañosSof = $_POST['Sof'];
    $textInf = $_POST['info'];

   

    if(!$name || !$ncontacto || !$ncontacto2||!$marca ){

        echo "Ha faltado algun campo";

    }
    
    include("db.php");
    $conectar= conn();
    
    $sql= "INSERT INTO  Logcel_usuarios (`us_Id` , `us_Nombre` , `us_Nrocontacto` , `us_Nrocontacto_2` , `us_Marca` , `us_Dañoshad` , `us_Dañossof` , `us_textinfo`) VALUES ('', '$name' , '$ncontacto' , '$ncontacto2' , '$marca' , '$dañosHad' , '$dañosSof' , '$textInf')";
    $resul = mysqli_query($conectar,$sql) or trigger_error("Error:",mysqli_error($conectar));

    
    header("Location: registroUsuario.php");
   

?>



</body>
</html>





