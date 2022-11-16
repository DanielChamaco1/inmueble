<?php
$alerta = '';

$usuario=$_POST['correo'];
$contraseña=$_POST['clave'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","inmuebles");

$consulta="SELECT*FROM usuario where correo='$usuario' and clave='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['rol']==1){ //administrador
    header("location: administrador/");

}else
if($filas['rol']==2){ //cliente
header("location: pago.php");
}
else{
    ?>
    <?php
    include("signin.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
