<?php
require_once (__DIR__ . '/../includes/constants.php');
require_once (__DIR__ . '/../includes/header.php');
require_once (__DIR__ . '/../includes/database-config.inc');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"] ?? '';
    $contrasena = $_POST["contrasena"] ?? '';

    try {
        $sql = "INSERT INTO usuarios (correo, contrasena) VALUES (?, ?)";
        $stmt = $dbConnection->prepare($sql);
        $stmt->execute([$correo, $contrasena]);

        echo '<div style="color: green;">✔ Usuario registrado correctamente.</div>';
    } catch (Exception $e) {
        echo '<div style="color: red;">✖ Error al registrar: ' . $e->getMessage() . '</div>';
    }
}
?>

<h2>Registro de Usuario</h2>
<form method="POST">
    <label>Correo:</label><br>
    <input type="email" name="correo" required><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="contrasena" required><br><br>

    <input type="submit" value="Registrar">
</form>

<?php
require_once (__DIR__ . '/../includes/footer.php');
?>
