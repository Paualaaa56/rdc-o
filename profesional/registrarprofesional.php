 <?php
if(empty($_POST["oculto"]) || empty($_POST["txtdoc"]) || empty($_POST["txtnombres"]) || empty($_POST["txtapellidos"]) || empty($_POST["txtcorreo"])){
    header('location:profesional.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';
$Doc=$_POST["txtdoc"];
$Nombres=$_POST["txtnombres"];
$Apellidos=$_POST["txtapellidos"];
$Correo=$_POST["txtcorreo"];

$sentencia=$bd->prepare("INSERT INTO  registroprofesional(Doc,Nombres,Apellidos,Correo) VALUES (?,?,?,?);");
$resultado=$sentencia->execute([$Doc,$Nombres,$Apellidos,$Correo]);

if($resultado === TRUE)
{
    header('Location:profesional.php?mensaje=registrado');
}else{
    header('Location:profesional.php?mensaje=error');
}

?> 



