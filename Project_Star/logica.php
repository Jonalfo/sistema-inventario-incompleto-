<?php
$con = mysqli_connect("localhost","root","","clientes");
@$nombre = $_POST['nombre'];
@$apelido = $_POST['apelido'];
@$telefono = $_POST['telefono'];
@$cedula = $_POST['cedula'];
$sql = "INSERT INTO registrarclientes (Id, Nombre, apellido, telefono, cedula) VALUES ('0', '$nombre', '$apelido', '$telefono', '$cedula')";
$rs = mysqli_query($con, $sql);
if($rs){
    echo "<script> alert('correcto');
    location.href = './registrarU.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = './registrarU.php';
    </script>";
}
?>
