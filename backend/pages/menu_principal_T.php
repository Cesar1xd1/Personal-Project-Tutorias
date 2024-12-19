<?php
    session_start();   
    if(!isset($_SESSION['valida'])){
        header('location: login');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
        <a class="navbar-brand" href="menu_principal_T"><i style="font-size: 30px; color: white;" class="bi bi-house-fill" height="500"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a style="color: white;" class="nav-link" aria-current="page" href="procesar_consulta_A">Alumnos </a>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" aria-current="page" href="procesar_consulta_T">Tutores </a>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" aria-current="page" href="gestion_grupos">Grupos </a>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" aria-current="page" href="gestion_log">Gestion eliminacion alumnos </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="../controllers/cerrar_sesion.php" method="POST">
            <!--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                <h3 style="color: white;">Bienvenido <?php 
                    
                    
                    echo $_SESSION['usuario']. "! ‎ ";
                    
                ?></h3>
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log out</button>
            </form>
        </div>
        </div>
        
    </nav>

    
</body>

</html>