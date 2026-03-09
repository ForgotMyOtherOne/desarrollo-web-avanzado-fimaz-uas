<?php require_once 'Admin.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 2</title>
</head>
<body>

<?php
$admin = new Admin('Miles Prower', 'milesElectric@gmail.com');
echo "<p>Nombre: " . $admin->getNombre() . "</p>";
echo "<p>Correo: " . $admin->getCorreo() . "</p>";
echo "<p>Rol: " . $admin->getRol() . "</p>";
?>

</body>
</html>