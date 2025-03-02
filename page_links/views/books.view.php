</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-content: center;
            text-align: center;
            height: 100vh;
            font-size: 2rem;
            font-weight: bold;
            color: red;
            background-color: #000;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <!-- Inicie com php -S localhost:porta -->
    <h1>Partials</h1>
    <?php require('partials/nav.php') ?>
    <p><?php echo $name ?></p>
    
</body>
</html>