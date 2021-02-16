<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">

    <title>Teste</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="antialiased">
        <div class="container">

            <header>
                <h2><a href="#">Tribunal do consumidor</a></h2>
                <nav>
                    <ul>
                        <li>
                            <a class="btn" href="{{ route('login') }}" title="Register / Log In">Register/Log In</a>
                        </li>
                    </ul>
                </nav>
            </header>

            <div class="cover">
                <h1>Bem vindo</h1>
                <img src="../logo-480w.png" alt="Logo TDC">
            </div>

        </div>
</body> 
</html>