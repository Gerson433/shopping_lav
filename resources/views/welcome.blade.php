<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEJEBRY APP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="four columns">
                    <h1><img src="images/icono2.png" alt=""></h1>
                    <h1>STORE GEJEBRY</h1>
                </div>
                <div class="two columns u-pull-right">
                    <ul>
                        <li class="submenu">
                            <img src="images/cart.png" alt="">
                            <div id="carrito">
                                <p class="vacio">Carrito</p>
                                <table id="lista-carrito" class="u-full-width">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Descripcion</th>
                                            <th>Precio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                                <a href="#" id="vaciar-carrito" class="button u-full-width">Pagar</a>
                            </div>
                            
                        </li>
                        <li class="submenu">
                            <img src="images/cart.png" alt="">
                            <div id="carrito">
                                <p class="vacio">Usuario</p>
                                <table id="lista-carrito" class="u-full-width">
                                    <thead>
                                        <tr>
                                            <th>
                                                <a class="vacio" >Ver perfil</a>
                                                <a class="vacio">Configuracion</a>
                                                <a class="vacio">Cambiar cuenta</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                                <a href="#" id="vaciar-carrito" class="button u-full-width">Cesar Sesion</a>
                            </div>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="hero">
        <div class="container"> 
            <div class="row">  
                <div class="six columns">
                    <div class="contenido-hero">
                        <h2>Ofertas Relampago</h2>
                        <p>Solo por tiempo limitado ¡No te lo pierdas!</p>
                        <form>
                            <input class="u-full-width" type="text" placeholder="Estoy Buscando..." id="buscador">
                            <input type="submit" class="submit-buscador">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="barra">
        <div class="container">
            <div class="row">
                <div class="four columns icono icono1">
                    <li>Escogida para ti</li>
                </div>
                <div class="four columns icono icono">
                    <li>Electronica</li>
                </div>
                <div class="four columns icono icono">
                    <li>Salud y Belleza</li>
                </div>
                <div class="four columns icono icono4">
                    <li>Telefonia y Comunicaciones</li>
                </div>
                <div class="four columns icono icon5">
                    <li>Deporte y Exterior</li>
                </div>
                <div class="four columns icono icono6">
                    <li>Bisuteria y Relojes</li>
                </div>
                <div class="four columns icono icono7">
                    <li>Casa y Jardin</li>
                </div>  
                <div class="four columns icono icono8">
                    <li>Complementos</li>
                </div>
            </div>
        </div>
    </div>

    <div id="lista-productos" class="container">
        <h1 class="encabezado">Seguro que te gusta</h1>

        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="images/producto.jpg" class="imagen-producto u-full-width">
                    <div class="info-card">
                        <h4>Producto 1</h4>
                        <p>DESCRIPCION</p>
                        <img src="images/estrellas.png">
                        <p class="precio">$250 <span class="u-pull-right">$200</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="images/producto.jpg" class="imagen-producto u-full-width">
                    <div class="info-card">
                        <h4>Producto 2</h4>
                        <p>DESCRIPCION</p>
                        <img src="images/estrellas.png">
                        <p class="precio">$250 <span class="u-pull-right">$200</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="images/producto.jpg" class="imagen-producto u-full-width">
                    <div class="info-card">
                        <h4>Producto 3</h4>
                        <p>DESCRIPCION</p>
                        <img src="images/estrellas.png">
                        <p class="precio">$250 <span class="u-pull-right">$200</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="images/producto.jpg" class="imagen-producto u-full-width">
                    <div class="info-card">
                        <h4>Producto 4</h4>
                        <p>DESCRIPCION</p>
                        <img src="images/estrellas.png">
                        <p class="precio">$250 <span  class="u-pull-right">$200</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="images/producto.jpg" class="imagen-producto u-full-width">
                    <div class="info-card">
                        <h4>Producto 5</h4>
                        <p>DESCRIPCION</p>
                        <img src="images/estrellas.png">
                        <p class="precio">$250 <span class="u-pull-right">$200</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="images/producto.jpg" class="imagen-producto u-full-width">
                    <div class="info-card">
                        <h4>Producto 6</h4>
                        <p>DESCRIPCION</p>
                        <img src="images/estrellas.png">
                        <p class="precio">$250 <span class="u-pull-right">$200</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="images/producto.jpg" class="imagen-producto u-full-width">
                    <div class="info-card">
                        <h4>Producto 7</h4>
                        <p>DESCRIPCION</p>
                        <img src="images/estrellas.png">
                        <p class="precio">$250 <span class="u-pull-right">$200</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="7">Agregar</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="images/producto.jpg" class="imagen-producto u-full-width">
                    <div class="info-card">
                        <h4>Producto 8</h4>
                        <p>DESCRIPCION</p>
                        <img src="images/estrellas.png">
                        <p class="precio">$250 <span class="u-pull-right">$200</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="8">Agregar</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="images/producto.jpg" class="imagen-producto u-full-width">
                    <div class="info-card">
                        <h4>Producto 9</h4>
                        <p>DESCRIPCION</p>
                        <img src="images/estrellas.png">
                        <p class="precio">$250 <span class="u-pull-right">$200</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="9">Agregar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="footer"> 
        <div class="container">
            <div class="row">
                <div class="four columns">
                    <nav class="menu">
                        <a class="enlace" href="#"><b>GUIA COMPRA</b></a>
                        <a class="enlace" href="#">Crear una cuenta</a>
                        <a class="enlace" href="#">Pago</a>
                        <a class="enlace" href="#">Envio</a>
                        <a class="enlace" href="#">Proteccion del comprador</a>
                        <a class="enlace" href="#">Guia para nuevos usuarios</a>
                    </nav>
                </div>
                <div class="four columns">
                    <nav class="menu">
                        <a class="enlace" href="#"><b>Atencion al Cliente</b></a>
                        <a class="enlace" href="#">Atencion al Cliente</a>
                        <a class="enlace" href="#">Acuerdo de Servicio</a>
                        <a class="enlace" href="#">Encuesta</a>
                    </nav>
                </div>
                <div class="four columns">
                    <nav class="menu">
                        <a class="enlace" href="#"><b>Colabora con nosotros</b></a>
                        <a class="enlace" href="#">Colaboraciones</a>
                        <a class="enlace" href="#">Programa de Afiliados</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>   
    
    <script src="js/app.js"></script>
</body>
</html>
