
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="../scripts/validacionCajas.js"> 
</script>
    <title>Document</title>
</head>

<body>
    <?php
    require_once('menu_principal_T.php');
    ?>
    <div class="container">
        <h2>Editar Alumno</h1>
            <form action="../controllers/procesar_cambios_tutores.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputEmail4">Numero de Control</label>
                        <input type="text" class="form-control" id="caja_nc" name="caja_nc" placeholder="Numero de Control" maxlength="8" minlength="8"
                        value="<?php 
                        if(isset($_SESSION['nc'])){
                            echo $_SESSION['nc'];
                        }else{
                            if(isset($_GET["nc"])){
                                echo $_GET["nc"];
                            }else{
                                header('Location: gestion_tutores');
                            }
                        }
                            ?>" readonly>
                            <div style="color:red;"> 
                            <?php  if(isset($_SESSION['err_nc'])){
                                        echo "Solo numeros";
                                    } ?>
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputPassword4">Nombre</label>
                        <input type="text" class="form-control" id="caja_nombre" name="caja_nombre" placeholder="Nombre"
                        onkeypress=" return validacionLetras(event);"
                        value="<?php 
                            if(isset($_SESSION['nombre'])){
                                echo $_SESSION['nombre'];
                            }else{
                                if(isset($_GET["nombre"])){
                                    echo $_GET["nombre"];
                                } 
                            };?>">
                            <div style="color:red;"> 
                            <?php  if(isset($_SESSION['err_nombre'])){
                                        echo "Solo letras";
                                    } ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputAddress">Primer Apellido</label>
                    <input type="text" class="form-control" id="caja_primerAp" name="caja_primerAp" placeholder="Apellido Paterno"
                    onkeypress=" return validacionLetras(event);" value="<?php 
                            if(isset($_SESSION['pAp'])){
                                echo $_SESSION['pAp'];
                            }else{
                                if(isset($_GET["primerAp"])){
                                    echo $_GET["primerAp"];
                                } 
                            };?>">
                            <div style="color:red;"> 
                            <?php  if(isset($_SESSION['err_pAp'])){
                                        echo "Solo letras";
                                    } ?>
                        </div>
                </div>
                <div class="form-group col-md-5">
                    <label for="inputAddress2">Segundo Apellido</label>
                    <input type="text" class="form-control" id="caja_segundoAp" name="caja_segundoAp" placeholder="Apellido Materno"
                    onkeypress=" return validacionLetras(event);" value="<?php 
                            if(isset($_SESSION['sAp'])){
                                echo $_SESSION['sAp'];
                            }else{
                                if(isset($_GET["segundoAp"])){
                                    echo $_GET["segundoAp"];
                                } 
                            };?>">
                            <div style="color:red;"> 
                            <?php  if(isset($_SESSION['err_sAp'])){
                                        echo "Solo letras";
                                    } ?>
                        </div>
                </div>
                </div>
                
                <div class="form-row">
                    
                    <div class="form-group col-md-4">
                        <label for="inputState">Semestre a tutorar</label>
                        <select name="caja_semestre"  class="form-control" aria-label="Default select example">
                            <option value="1" <?php
                            if(isset($_SESSION['semestre']) && $_SESSION['semestre'] === "1"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['semestre']) && $_GET['semestre'] === "1"){
                                    echo 'selected';  
                                }};?>>1</option>

                            <option value="2" <?php
                            if(isset($_SESSION['semestre']) && $_SESSION['semestre'] === "2"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['semestre']) && $_GET['semestre'] === "2"){
                                    echo 'selected';  
                                }};?>>2</option>

<option value="3" <?php
                            if(isset($_SESSION['semestre']) && $_SESSION['semestre'] === "3"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['semestre']) && $_GET['semestre'] === "3"){
                                    echo 'selected';  
                                }};?>>3</option>

<option value="4" <?php
                            if(isset($_SESSION['semestre']) && $_SESSION['semestre'] === "4"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['semestre']) && $_GET['semestre'] === "4"){
                                    echo 'selected';  
                                }};?>>4</option>

<option value="5" <?php
                            if(isset($_SESSION['semestre']) && $_SESSION['semestre'] === "5"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['semestre']) && $_GET['semestre'] === "5"){
                                    echo 'selected';  
                                }};?>>5</option>

<option value="6" <?php
                            if(isset($_SESSION['semestre']) && $_SESSION['semestre'] === "6"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['semestre']) && $_GET['semestre'] === "6"){
                                    echo 'selected';  
                                }};?>>6</option>

<option value="7" <?php
                            if(isset($_SESSION['semestre']) && $_SESSION['semestre'] === "7"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['semestre']) && $_GET['semestre'] === "7"){
                                    echo 'selected';  
                                }};?>>7</option>

                            <option value="8" <?php
                            if(isset($_SESSION['semestre']) && $_SESSION['semestre'] === "8"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['semestre']) && $_GET['semestre'] === "8"){
                                    echo 'selected';  
                                }};?>>8</option>

                            <option value="9" <?php
                            if(isset($_SESSION['semestre']) && $_SESSION['semestre'] === "9"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['semestre']) && $_GET['semestre'] === "9"){
                                    echo 'selected';  
                                }};?>>9</option>

                            <option value="10" <?php
                            if(isset($_SESSION['semestre']) && $_SESSION['semestre'] === "10"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['semestre']) && $_GET['semestre'] === "10"){
                                    echo 'selected';  
                                }};?>>10</option>

                            <option value="11" <?php
                            if(isset($_SESSION['semestre']) && $_SESSION['semestre'] === "11"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['semestre']) && $_GET['semestre'] === "11"){
                                    echo 'selected';  
                                }};?>>11</option>

                            <option value="12" <?php
                            if(isset($_SESSION['semestre']) && $_SESSION['semestre'] === "12"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['semestre']) && $_GET['semestre'] === "12"){
                                    echo 'selected';  
                                }};?>>12</option>


                            
                        </select>
                            <div style="color:red;"> 
                            <?php  if(isset($_SESSION['err_semestre'])){
                                        echo "Solo numeros enteros";
                                    } ?>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputZip">Carrera a tutorar</label>
                        <select name="caja_carrera"  class="form-control" aria-label="Default select example">
                            <option value="LA" <?php
                            if(isset($_SESSION['carrera']) && $_SESSION['carrera'] === "LA"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['carrera']) && $_GET['carrera'] === "LA"){
                                    echo 'selected';  
                                }
                            };  
                            ?>>LA</option>
                            <option value="CP"  <?php if(isset($_SESSION['carrera']) && $_SESSION['carrera'] === "CP"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['carrera']) && $_GET['carrera'] === "CP"){
                                    echo 'selected';  
                                }
                            };  ?>>CP</option>
                            <option value="ISC"  <?php
                            if(isset($_SESSION['carrera']) && $_SESSION['carrera'] === "ISC"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['carrera']) && $_GET['carrera'] === "ISC"){
                                    echo 'selected';  
                                }
                            };  ?>>ISC</option>
                            <option value="IM"  <?php if(isset($_SESSION['carrera']) && $_SESSION['carrera'] === "IM"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['carrera']) && $_GET['carrera'] === "IM"){
                                    echo 'selected';  
                                }
                            }  ?>>IM</option>
                            <option value="IIA"  <?php
                            if(isset($_SESSION['carrera']) && $_SESSION['carrera'] === "IIM"){
                                echo 'selected';
                            }else{
                                if(isset($_GET['carrera']) && $_GET['carrera'] === "IIM"){
                                    echo 'selected';  
                                }
                            };   ?>>IIA</option>
                        </select>
                    
                            <div style="color:red;"> 
                            <?php  if(isset($_SESSION['err_carrera'])){
                                        echo "Solo letras";
                                    } ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                <label for="inputZip">Fecha de Nacimiento</label>
                <div class="form-group col-mid-6">
                <input class="form-control" type="date" name="caja_fecha" id="" 
                value="<?php if(isset($_SESSION['fecha'])){
                                echo $_SESSION['fecha'];
                            }else{
                                if(isset($_GET["fecha"])){
                                    echo $_GET["fecha"];
                                } 
                            };?>">
                            <div style="color:red;"> 
                            <?php  if(isset($_SESSION['err_fecha'])){
                                        echo "fecha vacia";
                                    } ?>
                        </div>
                </div>
                
                
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Numero de Telefono</label>
                        <input type="tel" class="form-control" id="caja_tel" name="caja_tel" placeholder="# de Telefono" maxlength="10" minlength="10"
                        onkeypress=" return validacionNumeros(event);"
                        value="<?php 
                            if(isset($_SESSION['tel'])){
                                echo $_SESSION['tel'];
                            }else{
                                if(isset($_GET["tel"])){
                                    echo $_GET["tel"];
                                } 
                            };?>" >
                        <div style="color:red;"> 
                            <?php  if(isset($_SESSION['err_tel'])){
                                        echo "Solo numeros";
                                    } ?>
                        </div>
                    </div>
                
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
    </div>


    </form>
    </div>

</body>

</html>

<?php
    unset($_SESSION['edicion_correcta']);
    unset($_SESSION['error_validacion']);

    unset($_SESSION['nc']);
    unset($_SESSION['nombre']);
    unset($_SESSION['pAp']);
    unset($_SESSION['sAp']);
    unset($_SESSION['fecha']);
    unset($_SESSION['semestre']);
    unset($_SESSION['carrera']);
    unset($_SESSION['tel']);

    unset($_SESSION['err_nc']);
    unset($_SESSION['err_nombre']);
    unset($_SESSION['err_pAp']);
    unset($_SESSION['err_sAp']);
    unset($_SESSION['err_fecha']);
    unset($_SESSION['err_semestre']);
    unset($_SESSION['err_carrera']);
    unset($_SESSION['err_tel']);
?>