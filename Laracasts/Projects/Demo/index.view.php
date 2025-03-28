
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS bellow -->
    <style>
        body {
            display: grid;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Courier New', Courier, monospace;
        }

        ul > div {
            display: flex;
            align-items: center;
            /* justify-content: center; */
        }
    </style>
</head>
<body>
    <h1>Recommended Books</h1>

    <div>
        <ul>
            <?php foreach ($filteredBooks as $book) : ?>
                <div>
                    <a href="<?= $book['link'] ?>">
                        <li><?= $book['name'] ?> - By <?= $book['author'] ?></li>
                    </a>
                    <p><?= " , " . $book['date'] ?></p>
                </div>        
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>