<!-- Main Content -->
<section class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="welcome-text-box p-4">
                    <h2>¡Bienvenido a Registro Mapachesco! 🦝</h2>
                    <p>Nos alegra que hayas decidido unirte a nuestra comunidad de amantes de los mapaches. Aquí, no solo encontrarás una mascota única y fascinante, sino también un nuevo mejor amigo que llenará tu hogar de alegría y aventuras.</p>
                    <h3>Ventajas de tener un mapache como mascota:</h3>
                    <ul>
                        <li><strong>Inteligencia y Cariño:</strong> Los mapaches son animales extremadamente inteligentes y cariñosos. Disfrutan de la compañía humana y pueden aprender trucos y comportamientos con facilidad.</li>
                        <li><strong>Diversión y Entretenimiento:</strong> Con su naturaleza curiosa y juguetona, los mapaches siempre encuentran formas de entretenerse y entretenerte. Cada día con un mapache es una nueva aventura.</li>
                        <li><strong>Unicidad:</strong> Tener un mapache como mascota es una experiencia exclusiva. Destácate entre tus amigos y familiares con una mascota que es tan única como tú.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-register p-4">
                <?php $validation = \Config\Services::validation(); ?>

<form method="post" action="<?php echo base_url('/enviar_form'); ?>"> 
<?= csrf_field(); ?>
<?php if (!empty(session()->getFlashdata('fail'))): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
<?php endif ?>
<?php if (!empty(session()->getFlashdata('success'))): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
<?php endif ?>
                        <div class="text-center mb-4">
                            <img src="public/assets/img/tu_logo.gif" alt="User Icon" class="user-icon">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label text-white">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?= old('nombre') ?>">
                            <?php if ($validation->getError('nombre')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('nombre'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label text-white">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?= old('apellido') ?>">
                            <?php if ($validation->getError('apellido')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('apellido'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label text-white">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" value="<?= old('usuario') ?>">
                            <?php if ($validation->getError('usuario')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('usuario'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-white">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="correo@algo.com" value="<?= old('email') ?>">
                            <?php if ($validation->getError('email')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('email'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-white">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña (mínimo 5 caracteres)">
                            <?php if ($validation->getError('pass')): ?>
                                <div class="alert alert-danger"><?= $validation->getError('pass'); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="termsCheck">
                            <label class="form-check-label" for="termsCheck">Estoy de acuerdo con los <a href="#">Términos</a></label>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary me-2">Registrar</button>
                            <button type="button" class="btn btn-secondary" onclick="window.location.href='<?php echo base_url('principal')?>'">¿Cancelar? no seas así</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
