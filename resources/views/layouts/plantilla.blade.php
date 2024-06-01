<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            background-color: #f7f9fc;
            color: #333;
        }

        nav {
            background-color: #fff;
            padding: 15px 20px;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 10px 20px;
            border: 2px solid transparent;
            border-radius: 5px;
            transition: all 0.3s ease;
            margin: 0 10px;
        }

        nav a:hover {
            background-color: #3498db;
            color: #fff;
            border-color: #3498db;
        }

        .content {
            text-align: left;
            max-width: 800px;
            width: 90%;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 100px; /* Add margin-top to accommodate the fixed nav */
            margin-bottom: 20px;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn-submit {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <nav>
        <a href="{{ route('movies.index') }}">Películas</a>
        <a href="{{ route('producers.index') }}">Productores</a>
    </nav>
    <div class="content">
        @yield('content')
    </div>
</body>

</html>
