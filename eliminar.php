<?php 

    
    echo '<script language="javascript">alert("estas seguro ?");</script>';

    
        
        include_once("db.php");
        $con=conn();

        
        $id=$_REQUEST['id'];
        $buscar=$_POST['buscar'];
        
      
        
        
        $sql="DELETE FROM `Logcel_usuarios` WHERE `us_Id`= '$id' OR '$buscar'"; 
        $resul = mysqli_query($con,$sql) or trigger_error("Error:",mysqli_error($con));

        if($resul){
            echo "Dato eliminado";
            header("Location: consultaUsuarioGeneral.php");

        }else{
            echo "Dato no eliminado";

        }

       

    
?>
