<?php include '../template_pagina_principal/header.php'?>
<?php include_once "../model/conexion.php";
$profesional=$sentencia->fetchAll(PDO::FETCH_OBJ) 
?>

<div class="container-fluid mt-3">
<div class="row justify-content-center">
<div class="col-md-7">


<!--Alertas-->
   <?php
   if(isset($_GET['mensaje']) and $_GET['mensaje']=='falta'){
   ?>
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong> ERROR!!</strong> Faltan campos por llenar
   <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button> 
   </div>
   <?php
    }
    ?>
    <?php
   if(isset($_GET['mensaje']) and $_GET['mensaje']=='registrado'){
   ?>
   <div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong> ALMACENADO!!</strong> Registro exitoso!
   <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button> 
   </div>
   <?php
    }
    ?>
<!--Alertas-->
 
<div class="col-md-4">
    <div class="card container-fluid">
      <div class="card-header">
        Registro del profesional
      </div>
       <form action="./profesional/profesional.php" class="p-2" method="post">
        <div class="mb-2">
            <label class="form-label">Documento:</label>
            <input type="text" class="form-control" name="txtdoc" autofocus>
        </div>
        <div class="mb-2">
            <label class="form-label">Nombres:</label>
            <input type="text" class="form-control" name="txtnombres" autofocus>
        </div>
        <div class="mb-2">
            <label class="form-label">Apellido:</label>
            <input type="text" class="form-control" name="txtapellidos" autofocus>
        </div>
        <div class="mb-2">
            <label class="form-label">Correo:</label>
            <input type="text" class="form-control" name="txtcorreo" autofocus>
        </div>
        <div class="d-grid">
            <input type="hidden" name="oculto" value="1">
            <input type="submit" class="btn btn-primary" value="registrar">
        </div>
       </form>
    </div>
</div>
</div>
</div>
</div>
<?php include '../template_pagina_principal/footer.php' ?>


