<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechLink: Sistema Integral de Venta de Equipos Informáticos</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="js/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="bg-dark text-white text-center py-3">
        <div class="container">
            <div class="logo">
                <img src="images/logo.png" alt="TechLink Logo" class="img-fluid" style="max-width: 150px;">
            </div>
            <h1>TechLink: Sistema Integral de Venta de Equipos Informáticos</h1>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="ingresar_producto.php">Ingresar Producto</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="icon-bar">
        <a href="index.php"><i class="fa fa-home"></i></a>
        <a href="productos.php"><i class="fa fa-laptop"></i></a>
    </div>

    <div class="container mt-4">
        <h2>TechLink: Sistema Integral de Venta de Equipos Informáticos</h2>
        <hr>

        <!-- Slider de Imágenes -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/computer1.jpg" class="d-block w-50" alt="Computadora 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Computadora 1</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/computer2.jpg" class="d-block w-50" alt="Computadora 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Computadora 2</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/computer3.jpg" class="d-block w-50" alt="Computadora 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Computadora 3</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>

        <!-- Sección de Productos Destacados -->
        <h3>Productos Destacados</h3>
        <div class="product-grid">
            <div class="product-item">
                <img src="images/product1.jpg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>$100.00</p>
                <button>Ver Más</button>
            </div>
            <div class="product-item">
                <img src="images/product2.jpg" alt="Producto 2">
                <h3>Producto 2</h3>
                <p>$150.00</p>
                <button>Ver Más</button>
            </div>
            <!-- Agrega más productos aquí -->
        </div>
        <br>

        <!-- Barra de Búsqueda y Filtros -->
        <div class="search-bar">
            <input type="text" placeholder="Buscar productos...">
        </div>
        <div class="filters">
            <select>
                <option value="">Filtrar por categoría</option>
                <!-- Agrega opciones dinámicamente con PHP -->
            </select>
        </div>
    </div>
</body>
</html>