<div class="container mt-5" style="background-color: #333; color: #fff; height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="p-4 shadow-lg rounded-lg" style="background-color: #fff; color: #333;">
            <h2 class="text-center mb-4">Editar Usuario</h2>
            <?php if (session()->getFlashdata('msg')): ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('usuario/update/' . $usuario['id_usuario']); ?>" method="post">
                <div class="form-group">
                    <label for="nombre" style="font-size: 1.2em;">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= esc($usuario['nombre']); ?>" required style="font-size: 1.2em;">
                </div>
                <div class="form-group">
                    <label for="apellido" style="font-size: 1.2em;">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="<?= esc($usuario['apellido']); ?>" required style="font-size: 1.2em;">
                </div>
                <div class="form-group">
                    <label for="usuario" style="font-size: 1.2em;">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" value="<?= esc($usuario['usuario']); ?>" required style="font-size: 1.2em;">
                </div>
                <div class="form-group">
                    <label for="email" style="font-size: 1.2em;">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= esc($usuario['email']); ?>" required style="font-size: 1.2em;">
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-primary" style="font-size: 1.2em; padding: 10px;">Actualizar</button>
                    <a href="<?= base_url('panel'); ?>" class="btn btn-secondary" style="font-size: 1.2em; padding: 10px;">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
