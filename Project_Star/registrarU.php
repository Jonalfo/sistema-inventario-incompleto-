<?php
include('layout/header.php')
?>
<html>
<link rel="stylesheet" href="estilos.css">
<div class="testbox">
      <<form class="form-register" name="registrate" action="logica.php" method="post">
    <h4>REGISTRAR CLIENTE</h4>
    <input class="controls" type="text" name="nombre" placeholder="Ingrese su Nombre">
    <input class="controls" type="text"  name="apelido" placeholder="Ingrese su Apellido">
    <input class="controls" type="text"  name="telefono" placeholder="Ingrese N° de telefono">
    <input class="controls" type="text" name="cedula" placeholder="Ingrese N° de cedula">
    <input class="botons" type="submit" value="Registrar">
    </form>
</div>
<script src="script.js"></script>
</html>
