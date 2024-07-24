<div class="container mt-5">
    <div class="row justify-content-md-center"> 
        <div class="col-5">
            <?php if(session()->getFlashdata('msg')): ?> 
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?> 
            </div>
            <?php endif; ?>
        <br><br>
        <?php if(session()->perfil_id == 1): ?> 
        <div>
            <img class="center" height="100px" width="100px" src="<?php echo base_url('public/assets/img/mapachecliente.jpg'); ?>">
            <h1>INICIASTE SESION COMO ADMIN</h1>
            <!-- Tabla de usuarios -->
        <div class="mt-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($usuarios) && is_array($usuarios)): ?>
                        <?php foreach($usuarios as $usuario): ?>
                            <tr>
                                <td><?= esc($usuario['nombre']); ?></td>
                                <td><?= esc($usuario['apellido']); ?></td>
                                <td><?= esc($usuario['email']); ?></td>
                                <td>
                                    <a href="<?= base_url('usuario/edit/'.$usuario['id_usuario']); ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="<?= base_url('usuario/delete/'.$usuario['id_usuario']); ?>" class="btn btn-danger btn-sm">Borrar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center">No hay usuarios disponibles</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <!-- Botón para agregar nuevo usuario dentro de las acciones -->
        <div class="mt-3">
            <a href="<?= base_url('usuario/new'); ?>" class="btn btn-primary">Agregar Nuevo Usuario</a>
        </div>

        </div>

        <?php elseif(session()->perfil_id == 2 ):?> 

        <div>
            <img class="center" height="100px" width="100px" src="<?php echo base_url('public/assets/img/mapachecliente.jpg'); ?>">
           <h1>INICIASTE SESION COMO USUARIO</h1>
        </div>

            <?php endif; ?>
        </div>
    </div>
</div>
   