
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
        <h1>Tutores</h1>
        <form action="procesar_consulta_T.php" method="post">
            
            

            <div class="row justify-content-end">
                <div class="col-2">
                <a href="formulario_altas_tutores" class="btn btn-success">Agregar</a>
                <label > ‎ ‎ ‎ ‎ ‎ ‎   
                ‎   Filtro: </label>
                
                
                </div>
            
            <div class="col-4">
                <select class="form-control" name="select" id="">
                    <option value="1">No. de Control</option>
                    <option value="2">Nombre</option>
                    <option value="3">Primer Apellido</option>
                    <option value="4">Segundo Apellido</option>
                    <option value="5">Semestre</option>
                    <option value="6">Carrera</option>
                    <option value="7">Telefono</option>
                </select>
            </div>
            
                <div class="col-4">
                    <input class="form-control" type="search" name="caja_filtro" >
                </div>
                <div class="col-2">
                    <button class="btn btn-warning" type="submit">Buscar</button>
                    <form action="procesar_consulta" method="post">
                    <button class="btn btn-info" type="submit">Todos</button>
                    </form>
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