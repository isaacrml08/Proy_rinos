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
    <title>Certificaciones de Cascos</title>
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
                        <a class="nav-link" href="inicio.php">Inicio</a>
                    </li>
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
                        <a class="nav-link" href="noticias_accidentes.php">Ver Accidentes</a>
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
            <h1 class="display-4 fw-bold">Certificaciones de Cascos</h1>
            <p class="lead"><u>Tu seguridad empieza con un casco certificado</u></p>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-title">¿Qué son las certificaciones?</h2>
            </div>
            <p class="text-center mx-auto" style="max-width: 800px; color: var(--soft-text);">
                Las certificaciones garantizan que un casco ha sido sometido a pruebas de seguridad
                que evalúan su resistencia a impactos, absorción de energía y calidad de materiales.
                Utilizar un casco certificado puede marcar la diferencia entre la vida y la muerte en un accidente.
            </p>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">

                <div class="col-md-6 col-lg-3">
                    <div class="card card-custom h-100 text-center p-3">
                        <i class="fas fa-flag-usa fa-3x mb-3"></i>
                        <h5>DOT</h5>
                        <p>
                            Certificación de Estados Unidos. Es obligatoria en ese país y
                            verifica impactos básicos y resistencia del casco.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card card-custom h-100 text-center p-3">
                        <i class="fas fa-globe-europe fa-3x mb-3"></i>
                        <h5>ECE</h5>
                        <p>
                            Estándar europeo muy exigente. Evalúa múltiples impactos,
                            retención del casco y distribución de la energía.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card card-custom h-100 text-center p-3">
                        <i class="fas fa-award fa-3x mb-3"></i>
                        <h5>SNELL</h5>
                        <p>
                            Certificación privada con pruebas más estrictas que DOT.
                            Recomendada para conducción deportiva.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card card-custom h-100 text-center p-3">
                        <i class="fas fa-shield-alt fa-3x mb-3"></i>
                        <h5>NOM</h5>
                        <p>
                            Norma Oficial Mexicana. Garantiza que el casco cumple con
                            estándares mínimos de seguridad en México.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-title">¿Cuál es mejor?</h2>
            </div>
            <p class="text-center mx-auto" style="max-width: 800px; color: var(--soft-text);">
                No existe una certificación “perfecta”, pero se recomienda elegir cascos que cuenten
                con al menos una certificación reconocida. Para mayor seguridad, los cascos con ECE
                o SNELL ofrecen pruebas más completas.
            </p>
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