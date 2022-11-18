<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta Especifica</title>
    <script src="js/val.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<?php

include("menu.php");

?>

<h1>Buscador Registro</h1>

<form action="consultaUsuarioEspecifico.php" method="post" onsubmit="return consulta()" >


    <input type="text" name="buscar" class="form-control m-0.8" id="userConsul">

    <div class="container">
        <input type="submit" class="btn btn-primary m-2" value="Buscar">
    </div>
    

</form>

<div class="container">


    
    <table border="2px" class="table m-2">

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
                                <td><a class="btn btn-warning" href="editarUsuario.php?id=<?php echo $rowTotal['us_Id']?>" >Editar</a></td>
                                <td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $rowTotal['us_Id']?>">Eliminar</a></td>
                            </tr>
                    <?php  }?>
    </tbody>

    </table>
    
</div>




</body>
</html>