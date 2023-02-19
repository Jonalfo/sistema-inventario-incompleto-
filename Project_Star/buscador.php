<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styless.css">
    
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Dashboard Sidebar Menu</title> 
</head>
<body>
    <?php
    $busqueda = $_REQUEST['busqueda'];
    if(empty($busqueda)){
        header("location: inicio.php");
    }
    ?>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <a href="./inicio.php">
                    <img src="logo.png" alt="">
                    </a>
                </span>

                <div class="text logo-text">
                    <span class="name">Project</span>
                    <span class="profession">Stars</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <form action="./buscador.php" method="get">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search..." name="busqueda" id="busqueda" value="<?php echo $busqueda;?>">
                </li>
                </form>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="dashboard.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="vender.php">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Vender</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="registrarP.php">
                        <i class='bx bx-plus-circle icon'></i>
                            <span class="text nav-text">Registrar producto</span>
                        </a>
                    </li>

                    <li class="nav-link">
                    <a href="registrarU.php">
                        <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">Registrar Usuario</span>
                        </a>
                        </form>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar sesion</span>
                    </a>
                </li>
                
            </div>
        </div>

    </nav>
    <script src="script.js"></script>


<?php
if(isset($_GET['enviar'])){
    $busqueda=$_GE['busqueda'];
    $consulta =$con->query("SELECT * FROM registrarproductos WHERE Nombre LIKE '%busqueda'");

    while($row = $consulta->fetch_array()){
        echo $row['Nombre'];
    }
}
?>