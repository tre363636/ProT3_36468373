<!-- Main Content -->
<section class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="welcome-text-box p-4">
                    <h2>¡Bienvenido a Registro Mapachesco! 🦝</h2>
                    <p>Nos alegra que hayas decidido unirte a nuestra comunidad de amantes de los mapaches...</p>
                    <h3>Ventajas de tener un mapache como mascota:</h3>
                    <ul>
                        <li><strong>Inteligencia y Cariño:</strong>...</li>
                        <li><strong>Diversión y Entretenimiento:</strong>...</li>
                        <li><strong>Unicidad:</strong>...</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-register p-4">
                    <?php $validation = \Config\Services::validation(); ?>

                    <form id="registerForm" method="post" action="<?= base_url('/enviar-form'); ?>"> 
                        <?= csrf_field();?>
                        <?php if (!empty(session()->getFlashdata('fail'))): ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                        <?php endif ?>
                        <?php if (!empty(session()->getFlashdata('success'))): ?>
                            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                        <?php endif ?>
                        <div class="text-center mb-4">
                            <img src="<?= base_url('public/assets/img/tu_logo.gif'); ?>" alt="User Icon" class="user-icon">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?= old('nombre') ?>">
                            <?php if ($validation->getError('nombre')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('nombre'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?= old('apellido') ?>">
                            <?php if ($validation->getError('apellido')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('apellido'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" value="<?= old('usuario') ?>">
                            <?php if ($validation->getError('usuario')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('usuario'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="correo@algo.com" value="<?= old('email') ?>">
                            <?php if ($validation->getError('email')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('email'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña (mínimo 5 caracteres)">
                            <?php if ($validation->getError('pass')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('pass'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="termsCheck">
                            <label class="form-check-label" for="termsCheck">Estoy de acuerdo con los <a href="<?= base_url('terminos'); ?>" target="_blank">Términos</a></label>
                        </div>
                        <div id="termsError" class="alert alert-danger d-none">Debe aceptar los términos para poder registrarse.</div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary me-2">Registrar</button>
                            <button type="button" class="btn btn-secondary" onclick="window.location.href='<?= base_url('principal') ?>'">¿Cancelar? no seas así</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript para validar el formulario -->
<script>
document.getElementById('registerForm').addEventListener('submit', function(event) {
    var termsCheck = document.getElementById('termsCheck');
    var termsError = document.getElementById('termsError');
    if (!termsCheck.checked) {
        event.preventDefault(); // Evita que el formulario se envíe
        termsError.classList.remove('d-none'); // Muestra el mensaje de error
    }
});
</script>
