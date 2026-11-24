<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 3</title>
    <link rel="stylesheet" href="a.css">
</head>
<body>
    <main class="container">
        <form id="form1" action="process.php" method="post">
            <h1>Datos del usuario</h1>

            <div class="campo">
                <label for="txtNombre">Nombre</label>
                <input
                    type="text"
                    name="txtNombre"
                    id="txtNombre"
                    placeholder="Escribe tu nombre"
                    required
                >
            </div>

            <fieldset class="grupo-opciones">
                <legend>Tipo de estudio</legend>

                <div class="opcion">
                    <input type="radio" name="txtTipoEstudio" id="primarios" value="Estudios primarios" required>
                    <label for="primarios">Estudios primarios</label>
                </div>

                <div class="opcion">
                    <input type="radio" name="txtTipoEstudio" id="secundarios" value="Estudios secundarios">
                    <label for="secundarios">Estudios secundarios</label>
                </div>

                <div class="opcion">
                    <input type="radio" name="txtTipoEstudio" id="posgrado" value="Posgrado">
                    <label for="posgrado">Posgrado</label>
                </div>

                <div class="opcion">
                    <input type="radio" name="txtTipoEstudio" id="sin-estudios" value="No tiene estudios">
                    <label for="sin-estudios">No tiene estudios</label>
                </div>
            </fieldset>

            <fieldset class="grupo-opciones">
                <legend>Deporte que practica</legend>

                <div class="opcion">
                    <input type="checkbox" name="txtDeporte" id="baloncesto" value="Baloncesto" required>
                    <label for="baloncesto">Baloncesto</label>
                </div>

                <div class="opcion">
                    <input type="checkbox" name="txtDeporte" id="futbol" value="Fútbol">
                    <label for="futbol">Fútbol</label>
                </div>

                <div class="opcion">
                    <input type="checkbox" name="txtDeporte" id="tenis" value="Tenis">
                    <label for="tenis">Tenis</label>
                </div>

                <div class="opcion">
                    <input type="checkbox" name="txtDeporte" id="voleibol" value="Voleibol">
                    <label for="voleibol">Voleibol</label>
                </div>
                <div class="campo">
                <label for="txtObservaciones">Observaciones de salud</label>
                <textarea name="txtObservaciones" id="txtObservaciones" rows="5" placeholder="Ingrese sus obsevaciones de salud"></textarea>
            </div>
            </fieldset>

            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>