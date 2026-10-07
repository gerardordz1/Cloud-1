<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="css/estilo.css"> <!-- ajusta la ruta a tu CSS -->
</head>
<body class="login-body">
    <main class="login-caja">
        <h1>Agenda</h1>

        <!-- Aquí irá el mensaje de error más adelante -->
        <!-- <div class="alerta error">Usuario o contraseña incorrectos.</div> -->

        <form method="post" class="formulario">
            <label>Usuario
                <input type="text" name="usuario" required autofocus autocomplete="username">
            </label>
            <label>Contraseña
                <input type="password" name="password" required autocomplete="current-password">
            </label>
            <button type="submit" class="btn">Entrar</button>
        </form>
    </main>
</body>
</html>
