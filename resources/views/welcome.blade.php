<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f7f9fc;
            color: #333;
        }

        .welcome-container {
            text-align: center;
            max-width: 800px;
            width: 90%;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 20px;
        }

        .welcome-container h1 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        .welcome-container p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .welcome-container .btn {
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            padding: 15px 25px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .welcome-container .btn:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
        }

        .welcome-container .btn:active {
            transform: translateY(-1px);
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <h1>¡Bienvenido a la plataforma del cine! 🍿🎞️</h1>
        <p>
            Estamos encantados de tenerte aquí. Nuestra aplicación te ofrece una experiencia única y sencilla para crear la disponibilidad de películas o cartelera para nuestro cine. Además de darle importancia a cada Productor.
            ¡Prepárate para descubrir todas las funcionalidades que hemos creado especialmente para ti!
        </p> 
        <a href="{{ route('movies.index') }}" class="btn">Ingresa Ahora</a>
    </div>
</body>

</html>
