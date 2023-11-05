<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <main>
    <?php include 'oeuvres.php';

        echo '<article id="detail-oeuvre">';
        echo '<div id="img-oeuvre">';
        echo '<img src="'.$oeuvre10['img'].'" alt="'.$oeuvre10['alt'].'">';
        echo '</div>';
        echo '<div id="contenu-oeuvre">';
        echo '<h1>'. $oeuvre10['contenu']['titre'].'</h1>';
        echo '<p class="decription">'. $oeuvre10['contenu']['description'] .'</p>';
        echo '<p class="description-complete">'. $oeuvre10['contenu']['description_complete'] .' </p>';
        echo '</div>';
        echo '</article>';
    ?>
    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>