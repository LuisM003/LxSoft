<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="styles/styles.css">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    
   
</head>
<script src="js/val.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


<body>

    <?php

    include("menu.php");

    ?>

    <div class="container">


           

        <form action="usuarioProcesado.php" method="post" onsubmit="return validacion()" class="fContaimer">

            <div class="col">
                
                <label for="name">Dueño:</label>
                <input type="text"" name="user" id="name">
                <label>N° de contacto:</label>
                <input type="text""  name="nconta" id="nucont">
                <label>N° de contacto 2:</label>
                <input type="text"" name="ncont2" id="nucont2">
                <label>Marca:</label>
                <input type="text"" name="marca" id="marc">

            </div>

            <div class="col">
                

                <label>Daños hadwar:</label>
                    <select name="Had"  id="dahad">

                        <option value="--">---</option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                        
                    </select>
                <label>Daños sofware:</label>
                    <select name="Sof" id="dasof" >

                        <option value="--">---</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>

                    </select>
                <label>más información:</label>
                <textarea name="info" id="" cols="30" rows="7" ></textarea>
                
            
            </div>

            <div class="btn">
                <input type="submit" value="Registrar">
            </div>


        </form>



    </div>

        

</body>

</html>