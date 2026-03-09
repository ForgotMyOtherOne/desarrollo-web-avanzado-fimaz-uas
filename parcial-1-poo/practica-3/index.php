<?php

require_once 'Admin.php';
require_once 'Alumno.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 3</title>
</head>
<body>

<?php
try {
    $admin = new Admin('Miles Prower', 'milesElectric@gmail.com');
    echo "<p>Nombre: " . $admin->getNombre() . "</p>";
    echo "<p>Correo: " . $admin->getCorreo() . "</p>";
    echo "<p>Rol: " . $admin->getRol() . "</p>";
} catch (InvalidArgumentException $e) {
    echo "<p>Error: " . $e->getMessage() . "</p>";
}

echo "<br>";

try {
    $alumno = new Alumno('Max Campbell', 'definitelyNotDavidsPhone@gmail.com', '123456789');
    echo "<p>Nombre: " . $alumno->getNombre() . "</p>";
    echo "<p>Correo: " . $alumno->getCorreo() . "</p>";
    echo "<p>Rol: " . $alumno->getRol() . "</p>";
    echo "<p>Matrícula: " . $alumno->getMatricula() . "</p>";
} catch (InvalidArgumentException $e) {
    echo "<p>Error: " . $e->getMessage() . "</p>";
}

echo "<br>";

try {
    $invalido = new Admin('TEST USER', 'NOT AN EMAIL!');
} catch (InvalidArgumentException $e) {
    echo "<p>Error: " . $e->getMessage() . "</p>";
}
?>

</body>
</html>