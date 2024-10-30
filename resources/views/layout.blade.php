<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ÇTBMYO</title>
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 0;
        }
        .text-red {
            color: #dc3545;
        }
        header,footer{
            background-color: aqua;
            text-align: center;
        }
        main{
            padding: 2em;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
        }
        nav ul li{
            margin: 0 1em;
        }
    </style>

</head>
<body>
<header>
    <h1>Çanakkale Teknik Bilimler MYO</h1>
</header>
<nav>
    <ul>
        <li><a href="/">Anasayfa</a></li>
        <li><a href="/about">Hakkımızda</a></li>
        <li><a href="/contact">İletişim</a></li>
        <li><a href="/messages">Mesajlar</a></li>
    </ul>
</nav>
<main>
    @yield('main')
</main>
<footer>
    Copyright &copy; Çanakkale Teknik Bilimler MYO
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
