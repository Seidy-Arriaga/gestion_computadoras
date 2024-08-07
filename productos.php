<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - TechLink</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="bg-primary text-white text-center py-4">
        <h1>TechLink: Sistema Integral de Venta de Equipos Informáticos</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">TechLink</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="ingresar_producto.php">Ingresar Producto</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        <h2>Lista de Productos</h2>
        <a href="ingresar_producto.php" class="btn btn-primary mb-3">Agregar Nuevo Producto</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'db_connect.php';

                $sql = "SELECT p.id, p.nombre, p.tipo, p.precio, p.cantidad, c.nombre AS categoria
                        FROM producto p
                        JOIN categoria c ON p.categoria_id = c.id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <tr>
                            <td>' . htmlspecialchars($row["id"]) . '</td>
                            <td>' . htmlspecialchars($row["nombre"]) . '</td>
                            <td>' . htmlspecialchars($row["tipo"]) . '</td>
                            <td>$' . htmlspecialchars($row["precio"]) . '</td>
                            <td>' . htmlspecialchars($row["cantidad"]) . '</td>
                            <td>' . htmlspecialchars($row["categoria"]) . '</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>';
                    }
                } else {
                    echo '<tr><td colspan="7">No hay productos disponibles.</td></tr>';
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>