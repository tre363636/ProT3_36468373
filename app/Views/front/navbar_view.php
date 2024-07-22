<?php
$current_uri = service('uri')->getSegment(1); // Obtén el primer segmento de la URI
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_uri == '') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_uri == 'quienes_somos') ? 'active' : ''; ?>" href="<?php echo base_url('quienes_somos'); ?>">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_uri == 'acerca_de') ? 'active' : ''; ?>" href="<?php echo base_url('acerca_de'); ?>">Acerca De</a>
                </li>
                <!-- Añade más enlaces según sea necesario -->
            </ul>
        </div>
    </div>
</nav>
