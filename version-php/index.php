<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <?php
        include '../db.php';
    ?>
    <header>
        <h1>HEADER</h1>
    </header>

    <main>
        <h1>Lista dei dischi</h1>

        <div>
            <?php foreach($discsList as $disc){ ?>
        </div>
            <ul>
                <li>Indirizzo Immagine: <?php echo $disc['poster'] ?> </li>
                <li>Titolo: <?php echo $disc['title'] ?></li>
                <li>Autore: <?php echo $disc['author'] ?></li>
                <li>Anno: <?php echo $disc['year'] ?></li>
            </ul>
            <br>
        <div>
            <?php } ?>
        </div>
    </main>
</body>
</html>