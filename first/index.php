<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-content: center;
            height: 100vh;
            font-size: 3rem;
            font-weight: bold;
            color: #fff;
            background-color: #000;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <!-- Inicie com php -S localhost:porta -->
    <h1>
    <?php
        $name = 'James da salada de fruta';

        echo "Hello $name";
    ?>
    </h1>
</body>
</html>