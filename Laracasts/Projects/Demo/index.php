<?php 

$books = [
    [
        'name' => 'Children Of Time',
        'author' => 'Adrian Tchaikovsky',
        'pages' => 657,
        'link' => 'www.books.com',
        'date' => 1989 
    ],
    [
        'name' => 'Hail MAry',
        'author' => 'Andy Weir',
        'pages' => 523,
        'link' => 'www.books.com',
        'date' => 2023 
    ],
    [
        'name' => 'Foundation',
        'author' => 'Isaac Asimov',
        'pages' => 320,
        'link' => 'www.books.com',
        'date' => 1978 
    ],
    [
        'name' => 'Foundation 2',
        'author' => 'Isaac Asimov',
        'pages' => 320,
        'link' => 'www.books.com',
        'date' => 1982
    ]
];

// filter
$filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === 'Isaac Asimov';
});


require 'index.view.php';