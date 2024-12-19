
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <div class="container">
        <br>
        <h1>Grupo</h1>
        <form action="procesar_consulta_G.php" method="post">
            
            <div class="row justify-content-end">
                
                <div class="col-4">
                <label for="">N.Control del Docente:</label>
                    <input class="form-control" type="search" name="caja_tutor" >
                </div>
                <div class="col-2">
                    <button class="btn btn-warning" type="submit">Buscar</button>
                </div>
            </div>
        </form>
        <br>
    </div>
    <?php
        //require_once('procesar_consulta.php');
    ?>


</body>
</html>