<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Nuevo Usuario</title>
</head>
<body>
    <h2>Agregar Nuevo Usuario</h2>
    <form action="<?= base_url('/usuario_controller/saveNewUser') ?>" method="post">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?= set_value('nombre') ?>">
        </div>
        <div>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" value="<?= set_value('apellido') ?>">
        </div>
        <div>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" value="<?= set_value('usuario') ?>">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= set_value('email') ?>">
        </div>
        <div>
            <label for="pass">Contraseña</label>
            <input type="password" name="pass" id="pass">
        </div>
        <button type="submit">Agregar Usuario</button>
    </form>
</body>
</html>
