<?php
$nombre = trim($_POST["txtNombre"] ?? "");
$tipoEstudio = $_POST["txtTipoEstudio"] ?? "";
$deporte = $_POST["txtDeporte"] ?? "";
$observaciones = trim($_POST["txtObservaciones"] ?? "");

function mostrar($valor) {
    return htmlspecialchars($valor, ENT_QUOTES, "UTF-8");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos recibidos</title>
    <link rel="stylesheet" href="a.css">
</head>
<body>
    <main class="container">
        <h1>Datos recibidos</h1>

        <div class="campo">
            <label>Nombre: <?= mostrar($nombre) ?></label>
        </div>

        <div class="campo">
            <label>Tipo de estudio: <?= mostrar($tipoEstudio) ?></label>
        </div>

        <div class="campo">
            <label>Deporte que practica: <?= mostrar($deporte) ?></label>
        </div>

        <div class="campo">
            <label>Observaciones de salud:</label>
            <p><?= nl2br(mostrar($observaciones)) ?></p>
        </div>

        <a href="index.php"><img src="https://wallpaperaccess.com/full/8715883.gif" max width="40px" alt=""></a>
    </main>
</body>
</html>