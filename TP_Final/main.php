<html lang="en">
<!-- <script src="chrome-extension://ljdobmomdgdljniojadhoplhkpialdid/page/prompt.js"></script>
<script src="chrome-extension://ljdobmomdgdljniojadhoplhkpialdid/page/runScript.js"></script> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DD DiaperDeals</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/alertify.min.css">
    <link rel="stylesheet" href="css/themes/default.min.css">
    <link rel="stylesheet" href="css/styles.css" />
    
        <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <!-- importante mantener las librerias en este orden para que no rompa el js del button -->
    <script src="js/alertify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   
    
</head>
<body>
    <div id="container1" class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div id="name-session">
                <?php if ( isset($_SESSION['usuario']))
                { 
                ?>
                <h2 id="name-session-h2">Bienvenida <?php echo $_SESSION['usuario']; ?></h2><br>
                <?php } ?>
            </div>
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none"> <b>DD DiaperDeals</b>
            </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Inicio</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Noticias</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Servicios</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Galeria</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Sobre nosotros</a></li>
                </ul>

            <!-- button menu -->
            
                <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle my-2 my-sm-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="edit_view.php">Edita tu cuenta</a>
                        <a class="dropdown-item" href="delete_view.php">Eliminar tu cuenta</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php">Cerrar sesión</a>
                    </div>
                </div>
                
        </header>
        <main>
                    <!-- arreglar el carrusel -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/pañal1.jpg"  alt="carrusel 1" style="width:100%;height:340px" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>DD DiaperDeals</h5>
                    <p>Promos</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/pañal2.jpg"  alt="carrusel 2" style="width:100%;height:340px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>DD DiaperDeals</h5>
                    <p>Conexión</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/pañal3.jpg"  alt="carrusel 3" style="width:100%;height:340px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>DD DiaperDeals</h5>
                    <p>Acción</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>   
</main>
<section>
    <!-- seccion momentanea -->
    <center><img src="img/underConstruction.jpg" alt="En construccion"></center>
    
</section>

</body>
</html>

