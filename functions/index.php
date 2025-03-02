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

require 'index.view.php';