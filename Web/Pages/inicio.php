<?php
session_start();
$login_required = true;
$admin = false;
$user = "";

if (isset($_SESSION["user_id"])) {
    $login_required = false;
    $user = $_SESSION["username"] ?? "Usuario";
    if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]) {
        $admin = true;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chak - Seguridad en Cascos</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="inicio.php">
                <i class="fas fa-helmet-safety me-2"></i>Rinos al volante
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="practicas_seguras.php">Practicas Seguras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reglamento_vial.php">Normativas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lista_cascos.php">Cascos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="certificaciones.php">Certificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="noticias_accidentes.php">Ver Accidentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                    <?php
                    if ($login_required) {
                        echo
                        "<li class='nav-item'>
                            <a class='nav-link' href='login.php'>Iniciar Sesión</a>
                        </li>
                        ";
                    } else {
                        echo "
                        <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        <i class='fas fa-user' style='color: var(--secondary-color);'></i>
                            $user
                        </a>
                        <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        ";
                        if ($admin) {
                            echo
                            "<li><a class='dropdown-item' href='admin.php'>Admin</a></li>
                            </li>";
                        }
                        echo
                        "<li><a class='dropdown-item' href='logout.php'>Cerrar Sesión</a></li>
                        </ul>
                        </li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold">Rinos al movimiento</h1>
            <h4 class="lead"><u>Responsabilidad sobre ruedas.</u></h4>
            <a href="lista_cascos.php" class="btn btn-secondary-custom btn-lg mt-3">Ver Catálogo</a>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="text-center my-5">
                <h2 class="section-title">Nuestro objetivo</h2>
                <div class="mx-auto" style="max-width: 600px;">
                    <p class="text-center" style="color: var(--soft-text);">
                        Promover el uso adecuado del casco y fomentar hábitos de conducción responsable para reducir accidentes y proteger la integridad de los motociclistas, y así, reducir el índice de lesiones en accidentes de motocicleta proporcionando equipo de protección accesible y confiable.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Acerca de los cascos</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4 text-center">
                    <div class="card card-custom h-100 p-4">
                        <div class="card-body">
                            <i class="fas fa-shield-alt fa-3x mb-3" style="color: var(--primary-color);"></i>
                            <h5 class="card-title">Certificaciones</h5>
                            <p class="card-text">Infórmate sobre las certificaciones más importantes y descubre cuál es la adecuada para garantizar tu seguridad en cada trayecto.</p>
                            <a href="certificaciones.php" class="btn" style="background-color: var(--primary-color); color: var(--secondary-color);">Informarse</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card card-custom h-100 p-4">
                        <div class="card-body">
                            <i class="fas fa-motorcycle fa-3x mb-3" style="color: var(--primary-color);"></i>
                            <h5 class="card-title">Normativas Y Reglamento Vial</h5>
                            <p class="card-text">Conoce las leyes y lineamientos esenciales para circular de forma segura y responsable, protegiéndote a ti y a los demás.</p>
                            <a href="reglamento_vial.php" class="btn" style="background-color: var(--primary-color); color: var(--secondary-color);">Informarse</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card card-custom h-100 p-4">
                        <div class="card-body">
                            <i class="fas fa-shield fa-3x mb-3" style="color: var(--primary-color);"></i>
                            <h5 class="card-title">Practicas Seguras</h5>
                            <p class="card-text">Aprende técnicas y recomendaciones clave para mejorar tu conducción y mantener un manejo seguro en todo momento.</p>
                            <a href="practicas_seguras.php" class="btn" style="background-color: var(--primary-color); color: var(--secondary-color);">Informarse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="container">
            <p>&copy; 2025 Proyecto - Practica 3. CMS: Todos los derechos reservados.</p>
            <a style="color: var(--secondary-color);" href="contacto.php">Contacto</a>
        </div>
    </footer>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>