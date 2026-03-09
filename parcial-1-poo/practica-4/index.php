<?php

require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';
require_once 'clases/Invitado.php';

$usuarios = [];
$error = '';

try {
    $usuarios[] = new Admin('Miles Prower', 'milesElectric@gmail.com');
    $usuarios[] = new Alumno('Max Campbell', 'definitelyNotDavidsPhone@gmail.com', '123456789');
    $usuarios[] = new Invitado('Moenella Regect', 'HonkHonk@eyes.com', 'Tech Corp');
    $usuarios[] = new Admin('ERROR USER', 'NOT AN EMAIL!');
} catch (Exception $e) {
    $error = $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 4</title>
</head>
<body>

<h2>Sistema de Usuarios</h2>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Matrícula</th>
            <th>Empresa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?= htmlspecialchars($u->getNombre()) ?></td>
            <td><?= htmlspecialchars($u->getCorreo()) ?></td>
            <td><?= htmlspecialchars($u->getRol()) ?></td>
            <td><?= ($u instanceof Alumno) ? htmlspecialchars($u->getMatricula()) : 'N/A' ?></td>
            <td><?= ($u instanceof Invitado) ? htmlspecialchars($u->getEmpresa()) : 'N/A' ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php if ($error): ?>
    <p class="error">Error: <?= htmlspecialchars($error) ?></p>
<?php endif; ?>

</body>
</html>