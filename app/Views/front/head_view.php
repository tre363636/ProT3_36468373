<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($titulo);?></title>
    <link href="<?php echo base_url('public/assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/miestilo.css'); ?>">
</head>
<body>
    <!-- Header -->
    <header class="header-container">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <a href="https://www.youtube.com/watch?v=RXKabdUBiWM" target="_blank">
                        <img src="<?php echo base_url('public/assets/img/programmer.gif'); ?>" alt="Logo Talentos Digitales" class="logo">
                    </a>
                    <div class="title-container">
                        <h1>Mapacholandia S.A.</h1>
                        <h1>Tierra de los antifaces</h1>
                    </div>
                </div>
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                </form>
                <div class="dropdown ms-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Usuario
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url('registro'); ?>">Registro</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('login'); ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Aquí iría el resto de tu contenido -->

    <!-- JavaScript -->
    <script src="<?php echo base_url('public/assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/js/all.js'); ?>"></script>
</body>
</html>
