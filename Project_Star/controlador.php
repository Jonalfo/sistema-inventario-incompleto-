<?php
include("conexion.php");

if(isset($_POST["btn_ingresar"])){
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    $sql = $con -> query("select * from usuarios where usuario = '$usuario' and clave = '$clave' ");

    if($datos = $sql->fetch_object()){
        header("location: ../inicio.php");
    }else{
        echo '<h5 style="color:red;">Usuario y/o contraseña incorrecta</h5>';
    }
}
?>