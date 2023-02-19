<?php
include('layout/header.php')
?>
    <link rel="stylesheet" href="estilos.css">
<div class="testbox">

      <form class="form-register" name="registrate" action="logicaP.php" method="post">
    <h4>REGISTRAR PRODUCTOS</h4>
    <input class="controls" type="text"  name="nombre" placeholder="Nombre del producto" >
    <input class="controls" type="number"  name="cantidad" placeholder="cantidad" >
    <input class="controls" type="text"  name="tipoP" placeholder="Tipo de Producto" >
    <input class="controls" type="text"  name="PrecioP" placeholder="Precio del Producto">
    <input class="botons" type="submit" value="submit" >
    </form> 
    <script src="script.js"></script>


</body>
</html>
