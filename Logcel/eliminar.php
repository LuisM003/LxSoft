<?php 
        
        include("db.php");
        $con=conn();
        
        if(!isset($_POST['buscar'])){
            $_POST['buscar'] = "";
            $buscar = $_POST['buscar'];
        }
        
        $buscar=$_POST['buscar'];
        $sql="DELETE FROM `Logcel_usuarios` WHERE `us_Id`= '$buscar'"; 
        $resul = mysqli_query($con,$sql) or trigger_error("Error:",mysqli_error($con));

        if($resul){
            echo "Dato eliminado";
            header("Location: eliminarUsuario.php");

        }else{
            echo "Dato no eliminado";
        }

       

    
    ?>
