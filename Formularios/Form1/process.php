<?php
$nombre = trim($_POST["txtNombre"] ?? "");
$email = trim($_POST["txtEmail"] ?? "");
$telefono = trim($_POST["txtTelefono"] ?? "");

function escapar(string $valor): string {
    return htmlspecialchars($valor, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Listo! | Brisa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Nunito:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="ambient ambient-one" aria-hidden="true"></div>
    <div class="ambient ambient-two" aria-hidden="true"></div>
    <main class="container result-card">
        <div class="brand-mark success-mark" aria-hidden="true">✓</div>
        <p class="eyebrow">REGISTRO RECIBIDO</p>
        <h1>¡Gracias, <?= escapar($nombre) ?>!</h1>
        <p class="intro">Estos son los datos que nos compartiste:</p>
        <div class="campo"><span>Correo electrónico</span><strong><?= escapar($email) ?></strong></div>
        <div class="campo"><span>Teléfono</span><strong><?= escapar($telefono) ?></strong></div>
        <a class="back-link" href="index.php">← Volver al formulario</a>
    </main>
</body>
</html>
