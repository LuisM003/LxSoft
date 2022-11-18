<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Usuarios</title>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<?php

include("menu.php");
include_once('db.php');
     $con=conn();
     $estado="activo";
     $sql = "SELECT * FROM `Logcel_usuarios`";
     $resul = mysqli_query($con, $sql) or trigger_error("query failed" . mysqli_error($con), E_USER_ERROR);


?>

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
            <th>Editar</th>
            <th>Eliminar</th>
            
           
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
                        <td><a class="btn btn-warning" href="editarUsuario.php?id=<?php echo $rowTotal['us_Id']?>">Editar</a></td>
                        <td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $rowTotal['us_Id']?>">Eliminar</a></td>
                        
                       
                    </tr>
            <?php  }?>
        </tbody>
    </table>
</section>
</body>
</html>