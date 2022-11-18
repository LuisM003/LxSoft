<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuarios</title>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<?php

include("menu.php");

    include_once('db.php');
     $con=conn();
     
     $sql = "SELECT * FROM `Logcel_usuarios`";
     $resul = mysqli_query($con, $sql) or trigger_error("query failed" . mysqli_error($con), E_USER_ERROR);


?>



<h1>Eliminar Usuario</h1>

<form action="eliminar.php" method="post">
    <input type="text" name="buscar" class="form-control m-1">
    <input type="submit" class="btn btn-primary m-1" value="Buscar">
</form>

<div class="container">


    


    <section class="container">

        <h1>Lista de Usuarios</h1>

        <table border="1px" class="table">
            <thead class="thead-dark">
                <th>ID</th>
                <th>NOMBRE</th>
                <th>NRO CONTACTO</th>
                <th>NRO CONTACTO 2</th>
                <th>MARCA</th>
                <th>DAÑOS HAD</th>
                <th>DAÑOS SOF</th>
                <th>INFO</th>
            
            </thead>
            <tbody>
                <?php while($rowTotal = mysqli_fetch_assoc($resul)){?>
                        <tr >
                            <td><?php  echo $rowTotal['us_Id'];?></td>
                            <td><?php  echo $rowTotal['us_Nombre'];?></td>
                            <td><?php  echo $rowTotal['us_Nrocontacto'];?></td>
                            <td><?php  echo $rowTotal['us_Nrocontacto_2'];?></td>
                            <td><?php  echo $rowTotal['us_Marca'];?></td>
                            <td><?php  echo $rowTotal['us_Dañoshad'];?></td>
                            <td><?php  echo $rowTotal['us_Dañossof'];?></td>
                            <td><?php  echo $rowTotal['us_textinfo'];?></td>
                        
                        </tr>
                <?php  }?>
            </tbody>
        </table>
    </section>

</div>




</body>
</html>
  