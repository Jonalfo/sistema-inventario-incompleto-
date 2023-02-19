<?php
$con = mysqli_connect("localhost","root","","productos");
@$nombre = $_POST['nombre'];
@$cantidad = $_POST['cantidad'];
@$tipoP = $_POST['tipoP'];
@$PrecioP = $_POST['PrecioP'];
$sql = "INSERT INTO registrarproductos (Id, Nombre, Cantidad, Tipo, Precio) VALUES ('0', '$nombre', '$cantidad', '$tipoP', '$PrecioP')";
$rs = mysqli_query($con, $sql);
if($rs){
    echo "<script> alert('correcto');
    location.href = './registrarP.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = './registrarP.php';
    </script>";
}
?>
