<!-- Main Content -->
<section class="my-4 d-flex justify-content-center align-items-center">
        <div class="form-register p-4">
            <form>
                <div class="text-center mb-4">
                    <img src="public/assets/img/deuna.jpg" alt="User Icon" class="user-icon">
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label text-white">Correo</label>
                    <input type="email" class="form-control" id="correo" placeholder="Correo">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-white">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Contraseña">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary w-50 me-2">Ingresar</button>
                    <a href="<?php echo base_url ('principal')?>" class="btn btn-secondary w-50">Cancelar</a>
                </div>
                <div class="mt-3 text-center">
                    <span>¿Aún no se registró? <a href="<?php echo base_url ('registro')?>">Registrarse aquí</a></span>
                </div>
            </form>
        </div>
    </section>