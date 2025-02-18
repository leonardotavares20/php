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
    <?php
        $books = [
            [
                'title' => 'As Crônicas de Gelo e Fogo',
                'author' => 'George R. R. Martin',
                'purchaseUrl' => 'https://example.com/ascronicasdegeloeFogo',
            ],
            [
                'title' => 'Mil leguas submarinas',
                'author' => 'H.P. Lovecraft',
                'purchaseUrl' => 'https://example.com/millegassubmarinas',
            ],
            [
                'title' => 'O horizonte limpo',
                'author' => 'Ernest Hemingway',
                'purchaseUrl' => 'https://example.com/oHorizontelimpo',
            ],
            [
                'title' => 'O poder do haikus',
                'author' => 'Lin Yutang',
                'purchaseUrl' => 'https://example.com/oPoderdoHaikus',
            ],
            [
                'title' => 'A guerra dos tronos',
                'author' => 'George R. R. Martin',  
                'purchaseUrl' => 'https://example.com/aGuerraDostronos',
            ]
        ];

        function filter($items, $fn) {
            $filteredItems = [];

            foreach ($items as $item) {
                if ($fn($item)) {
                    $filteredItems[] = $item;
                }
            }
            
            return $filteredItems;
        };

        $filteredBooks = filter($books, function ($book) {
            return $book['author'] === 'George R. R. Martin';
        });
    ?>
    <p>
        <?php foreach ($filteredBooks as $book) : ?>    
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= "{$book['title']} de {$book['author']}™" ?>
                </a>
            </li>
        <?php endforeach ?>
    </p>
</body>
</html>