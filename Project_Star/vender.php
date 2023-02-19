<?php
include('layout/header.php')
?>
<html>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
<section class="home">
        <div class="text">VENDER</div>
    </section>

</html>
<div class="container">
        <div class="row">
            <div class="two columns u-pull-right">
                <ul>
                    <li class="submenu">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAiVJREFUaEPtWFsyBEEQzD2A1wlwApwEBxD45QMnwQe/CAfASXACbuB1ACLFjOit6V3V1dXRsxHTn2KqOrOyKrvWCDN+RjOOHwOB2goOCvRRge8IqCcA9wDOAbzXBh3eH2uhGIE25hrA/iwTIPbtRo1e8EhVgKDZThu9QA+o3oEVAC8CMAmQSPWjtVEO8GaA9gbAXnX0SgWIcwvAnQC81AdH0ipA7K8AlgMSJwDOaquQQuAYwGlFwCwgi8Z2/jspBBYBvFUk0HbBqpUA4/iQ7VYk8QGAhTQpwKB1AI8VCXCVYSubCTCQ/r8W5OgkdSIYa9nO+5MyAy0u+v9VAJLLHS3V+0jTeG46YOweCwEmIOiFIBMXPM6H52GrsmXbE7VtKwH6/1GQ3Hs/is1a9OG0Eii9H8kCPTTbQEdhKwEmKrkf8b0J7XLiCp9DoNR+JPN2vD/XRsP4EvuRVHaqTecoQCLS6kho7KlPtCWV93sqELsw5yenyvs9CTCX3I8mOoZCDZX3exOIeTbbiO2UctTe702A+eR+lAJ80rcqJXOHuL1c7kceBFSz5EUgth/lkJjq/SVaiDn5AHEFCH83W0gQPN1ItRx6KmABmx0zEBAlvACw0/ztFsChssTWONW/FpUYQBAH4uNLBQlr3O9Vni30CWBOEPgCMP9PBaxxAwFZWGsrWOPcFWBC6zBa41xnQDvsrt95DrErMG2ygYC2UqW+GxQoVVlt3h/JXmwx4mN8XQAAAABJRU5ErkJggg==" id="img-carrito" />
                            <div id="carrito">
                                    
                                    <table id="lista-carrito" class="u-full-width">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                                    <a href="#" id="vaciar-carrito" class="button u-full-width">Procesar Pago</a>
                                </div>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
    </header>


    <div id="lista-cursos" class="container">
        <h1 id="encabezado" class="encabezado">Productos</h1>
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/corsair.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Corsair Vengeance RGB PRO</h4>
                        <p>Memoria RAM</p>
                        <img src="img/estrellas.png">
                        <p class="precio">$200  <span class="u-pull-right ">$119.99</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/mouse.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4> REDRAGON Zalman I3 Airflow</h4>
                            <p>Mouse</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$100  <span class="u-pull-right ">$80.50</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar Al Carrito</a>
                        </div>
                    </div>
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/case.png" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>XTECH DEIMOS ATX Luz Led</h4>
                            <p>Case</p>
                            <img src="img/estrellas.png">
                            <p class="precio"><span class="u-pull-right ">$125.00</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>

        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/audifonos.png" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Vsg Kuiper 35mm Luz Verde</h4>
                        <p>Headset</p>
                        <img src="img/estrellas.png">
                        <p class="precio"><span class="u-pull-right ">$47.80</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/audifonosRosa.png" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>AJAZZ AX365 ROSA USB RGB</h4>
                            <p>Headset</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$35  <span class="u-pull-right ">$28.99</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/fuente.png" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>EVGA 700 GD GOLD 700W</h4>
                            <p>Fuente de poder</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$230  <span class="u-pull-right ">$219.99</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/motherboard.png" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Asus Rog Strix B550-f Gaming</h4>
                        <p>Motherboard</p>
                        <img src="img/estrellas.png">
                        <p class="precio"><span class="u-pull-right ">$83.26</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="7">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/mouseHavit.png" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>HAVIT MS878 RGB 10.000 DPI</h4>
                            <p>Mouse</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$29.99  <span class="u-pull-right ">$22.99</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="8">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/teclado.png" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>K530 DRACONIC REDRAGON</h4>
                            <p>Teclado</p>
                            <img src="img/estrellas.png">
                            <p class="precio"><span class="u-pull-right ">$269.99</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="9">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
        </div> <!--.row-->
        <div class="row">
                <div class="four columns">
                    <div class="card">
                        <img src="img/teclado2.png" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Teclado Meetion MT-K9320 RGB</h4>
                            <p>Teclado</p>
                            <img src="img/estrellas.png">
                            <p class="precio"><span class="u-pull-right ">$13.00</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="10">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
                </div>
                <div class="four columns">
                        <div class="card">
                            <img src="img/memoriaRAM.png" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>HP V8 DDR4 HP 8GB 3200MHz</h4>
                                <p>Memoria RAM</p>
                                <img src="img/estrellas.png">
                                <p class="precio"><span class="u-pull-right ">$73.00</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="11">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
                <div class="four columns">
                        <div class="card">
                            <img src="img/monitor.png" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Asus Vg278Qr Led 27″ Full HD</h4>
                                <p>Monitor</p>
                                <img src="img/estrellas.png">
                                <p class="precio">$300<span class="u-pull-right ">$280.30</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="12">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
    </div>  

    <script src="js/app.js"></script>
   
    <script src="script.js"></script>
</body>
</html>
