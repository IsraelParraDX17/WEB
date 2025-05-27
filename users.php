<?php
require_once (__DIR__ . '/../includes/constants.php');
require_once (__DIR__ . '/../includes/header.php');
require_once (__DIR__ . '/../includes/database-config.inc');

try {
    $sql = "SELECT id, correo, contrasena, fecha_registro FROM usuarios";
    $stmt = $dbConnection->query($sql);
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo '<div style="color: red;">✖ Error al obtener registros: ' . $e->getMessage() . '</div>';
    $usuarios = [];
}
?>

<h2>Usuarios Registrados</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Correo</th>
        <th>Contraseña</th>
        <th>Fecha Registro</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= htmlspecialchars($usuario['id']) ?></td>
            <td><?= htmlspecialchars($usuario['correo']) ?></td>
            <td><?= htmlspecialchars($usuario['contrasena']) ?></td>
            <td><?= htmlspecialchars($usuario['fecha_registro']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
require_once (__DIR__ . '/../includes/footer.php');
?>
