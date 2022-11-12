<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta Especifica</title>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<?php

include("menu.php");

?>

<h1>Buscador Registro</h1>

<form action="consultaUsuarioEspecifico.php" method="post" action="">
    <input type="text" name="buscar" class="form-control m-1">
    <input type="submit" class="btn btn-primary m-1" value="Buscar">
</form>

<div class="container">


    
    <table border="2px" class="table ">

    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Nrocontacto</th>
        <th>Nrocontacto 2</th>
        <th>Marca</th>
        <th>Daños had</th>
        <th>Daños sof</th>
        <th>Info</th>
        <th>Editar</th>
        <th>Eliminar</th>
        
    </thead>
    <tbody>
        <?php
        
        include("consulta.php");
       

        
        

        ?>

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
                                <td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $rowTotal['us_Nrocontacto']?>">Eliminar</a></td>
                            </tr>
                    <?php  }?>
    </tbody>

    </table>
    
</div>




</body>
</html>