<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8e8f0">
    <title>Crear cuenta | Brisa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Nunito:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Form1/styles.css">
</head>
<body>
    <div class="ambient ambient-one" aria-hidden="true"></div>
    <div class="ambient ambient-two" aria-hidden="true"></div>
    <main class="container">
        <div class="brand-mark" aria-hidden="true">✿</div>
        <p class="eyebrow">UN ESPACIO PARA TI</p>
        <form id="form1" action="process.php" method="post">
            <h1>¡Hola! <span>Qué bueno verte</span></h1>
            <p class="intro">Completa tus datos para crear tu cuenta.</p>
            <div class="campo">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre" placeholder="¿Cómo te llamas?" autocomplete="name" required>
            </div>
            <div class="campo">
                <label for="txtEmail">Correo electrónico</label>
                <input type="email" name="txtEmail" id="txtEmail" placeholder="tu@correo.com" autocomplete="email" required>
            </div>
            <div class="campo">
                <label for="txtTelefono">Teléfono</label>
                <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Tu número de contacto" autocomplete="tel" required>
            </div>
            <button type="submit">Crear mi cuenta <span aria-hidden="true">→</span></button>
            <p class="note">Un pequeño paso para empezar algo bonito ✨</p>
        </form>
    </main>
</body>
</html>
