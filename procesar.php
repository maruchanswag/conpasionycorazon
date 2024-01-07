<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión con Con Pasion y Corazon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://www.yourwebsite.com/path/to/huaso-huasa-chilenos-bailando.jpg');
            background-size: cover;
            background-position: center;
        }

        .container {
            width: 300px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 100px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .title {
            text-align: center;
            margin-bottom: 16px;
        }

        .logo {
            width: 200px;
            margin: 0 auto;
            display: block;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="cueca-958x575.jpeg" alt="Con Pasion y Corazon" class="logo">
        <h2 class="title">Iniciar sesión</h2>
        <form>
            <label for="uname"><b>Email o número de teléfono</b></label>
            <input type="text" placeholder="Ingresa un email o un número de teléfono válido" name="uname" required>

            <label for="psw"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingresa tu contraseña" name="psw" required>

            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
