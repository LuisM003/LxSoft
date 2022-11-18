<?php 
    
    include("menu.php")

?>

<?php 

    if(!isset($_REQUEST['id'])){
        
        $_REQUEST['id'] = "";
        $_id=$_REQUEST['id'];

    }
 
    $_id=$_REQUEST['id'];

    if(!isset($_POST['buscar'])){

        $_POST['buscar'] = "";
        $buscar = $_POST['buscar'];
    }

    $buscar=$_POST['buscar'];
 
  include_once "db.php";
  $con=conn();
  $sql="SELECT * FROM `Logcel_usuarios` WHERE us_Id= '$_id' OR '$buscar'";
  $resul = mysqli_query($con, $sql);

  while($rowTotal = mysqli_fetch_assoc($resul)){ 
    
    ?>


    <div class="container">
        <form action="eddit_user.php" method="POST"  class="fContaimer">
                <div class="col">
                    
                    <input type="hidden" name="id" value="<?php echo $rowTotal['us_Id']?>" >
                    <label for="name">Dueño:</label>
                    <input type="text"" name="usernuevo" id="name" value="<?php echo $rowTotal['us_Nombre']?>">
                    <label>N° de contacto:</label>
                    <input type="text""  name="ncontanuevo" id="nucont" value="<?php echo $rowTotal['us_Nrocontacto']?>">
                    <label>N° de contacto 2:</label>
                    <input type="text"" name="ncont2nuevo" id="nucont2" value="<?php echo $rowTotal['us_Nrocontacto_2']?>">
                    <label>Marca:</label>
                    <input type="text"" name="marcanuevo" id="marc" value="<?php echo $rowTotal['us_Marca']?>">

                </div>

                <div class="col">
                    

                    <label>Daños hadwar:</label>
                        <select name="Hadnuevo"  id="dahad" >
                            <option value="<?php  echo $rowTotal['us_Dañoshad']?>"><?php  echo $rowTotal['us_Dañoshad']?></option>
                            <option value="--">---</option>
                            <option value="si">si</option>
                            <option value="no">no</option>
                            
                        </select>
                    <label>Daños sofware:</label>
                        <select name="Sofnuevo" id="dasof"  >
                            <option value="<?php echo $rowTotal['us_Dañossof']?>"><?php echo $rowTotal['us_Dañossof']?></option>
                            <option value="--">---</option>
                            <option value="si">si</option>
                            <option value="no">no</option>

                        </select>
                    <label>más información:</label>
                    <textarea name="infonuevo" id="" cols="30" rows="7" value=""><?php echo $rowTotal['us_textinfo']?></textarea>
                    
                
                </div>

            <div class="btn">
                <input type="submit" value="Editar" name="guardar">
            </div>


        </form>
    </div>
    

<?php

  }

?>




