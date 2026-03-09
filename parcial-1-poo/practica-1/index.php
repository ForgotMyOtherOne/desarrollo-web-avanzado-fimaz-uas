<?php require_once 'Usuario.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuario</title>
</head>
<body>

<?php
$usuario = new Usuario('Miles Prower', 'milesElectric@gmail.com');
echo "<p>Nombre: " . $usuario->getNombre() . "</p>";
echo "<p>Correo: " . $usuario->getCorreo() . "</p>";

echo "<br>";

$usuario->setNombre('Max Campbell');
$usuario->setCorreo('definitelyNotDavidsPhone@gmail.com');
echo "<p>Nombre: " . $usuario->getNombre() . "</p>";
echo "<p>Correo: " . $usuario->getCorreo() . "</p>";
?>

</body>
</html>