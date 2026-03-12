<?php
/**
 * The index.php file makes use of the classes Admin, Alumno and Invitado
 */
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';
require_once 'clases/Invitado.php';
/**
 * @var array $usuarios Its used to create an array where all the succesfull instanced classes will be saved
 * @var string $error It saves the error message if an exception its "catched"
 */
$usuarios = [];
$error = '';
//Instances of the class to build the array
try {
    $usuarios[] = new Admin('Miles Prower', 'milesElectric@gmail.com');
    $usuarios[] = new Alumno('Max Campbell', 'definitelyNotDavidsPhone@gmail.com', '123456789');
    $usuarios[] = new Invitado('Moenella Regect', 'HonkHonk@eyes.com', 'Tech Corp'); //Please get the reference.
    $usuarios[] = new Admin('ERROR USER', 'NOT AN EMAIL!');
} catch (Exception $e) {
    $error = $e->getMessage();
}

?>
<!--HTML STARTS HERE ============================================= HTML STARTS HERE -->  
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Examen-practico</title>
</head>
<body>

<h2>Sistema de Usuarios</h2>

<table>
    <thead>
        <tr>
            <!-- TABLE HEADERS -->     
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Matrícula</th>
            <th>Empresa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $u): ?> 
            <!-- LOOPS THROUGH ALL THE STORED USERS TO FILL THE TABLE 
            WHEN THERES NO MORE USERS ON THE ARRAY IT STOPS-->     
        <tr>      
            <td><?= htmlspecialchars($u->getNombre()) ?></td> 
            <td><?= htmlspecialchars($u->getCorreo()) ?></td>
            <td><?= htmlspecialchars($u->getRol()) ?></td>
            <td><?= ($u instanceof Alumno) ? htmlspecialchars($u->getMatricula()) : 'N/A' ?></td> <!-- Checking if the user !Alumno, then fills accordingly-->     
            <td><?= ($u instanceof Invitado) ? htmlspecialchars($u->getEmpresa()) : 'N/A' ?></td> <!-- Checking if the user !Invitado, then fills accordingly-->       
            <!-- htmlspecialchars recommended by StackOverflow, its apparently good practice-->     
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php if ($error): ?> <!-- Checking if an exception was catched -->  
    <p class="error">Error: <?= htmlspecialchars($error) ?></p>
<?php endif; ?>

</body>
</html>
<!-- HTML ENDS HERE HTML ============================================= ENDS HERE-->  