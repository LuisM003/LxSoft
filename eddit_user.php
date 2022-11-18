<?php 

    include_once('db.php');
    $con=conn();

    $id=$_REQUEST['id'];
    $buscar=$_POST['buscar'];
   $name = $_POST['usernuevo'];
    $ncontacto = $_POST['ncontanuevo'];
    $ncontacto2 = $_POST['ncont2nuevo'];
    $marca = $_POST['marcanuevo'];
    $dañosHad = $_POST['Hadnuevo'];
    $dañosSof = $_POST['Sofnuevo'];
    $textInf = $_POST['infonuevo'];

    if ( isset( $_REQUEST['guardar'])) {

        $sql= " UPDATE `logcel_usuarios` SET us_Nombre='$name' , us_Nrocontacto='$ncontacto' , us_Nrocontacto_2='$ncontacto2' , us_Marca='$marca' , us_Dañoshad='$dañosHad' , us_Dañossof='$dañosSof' , us_textinfo='$textInf'  WHERE us_Id='$id' OR '$buscar'";
        $resul = mysqli_query($con,$sql) or trigger_error("query failed" . mysqli_error($con));;
        
      
        if ($resul) {
            echo "Registro editado correctamente";
            
            header('Location: consultaUsuarioGeneral.php');
        } else {
            echo "Error al editar el registro";
           
        }
    
        

    }

    
   
?>