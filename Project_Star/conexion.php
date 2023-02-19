<?php
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "db_proyecto";
    $puerto = "3307";

    $con = new mysqli($server, $user, $pass, $db, $puerto);
    $con -> set_charset("utf8");
?>