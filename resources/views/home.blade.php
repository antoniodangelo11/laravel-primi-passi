<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hompage</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <header>
        <h1>Hello World</h1>
        <ul>
            Lista Pagine
            <li><a href="/contacts">Vai alla pagina "Contatti"</a></li>
            <li><a href="/gallery">Vai alla pagina "Galleria"</a></li>
            <li><a href="/faq">Vai alla pagina "FAQ"</a></li>
            <li><a href="/rules">Vai alla pagina "Regolamento"</a></li>
        </ul>
    </header>
</body>
</html>