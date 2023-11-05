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
    <!-- Header -->
    <?php include "header.php"; ?> 
    <main>
        <?php include 'oeuvres.php';
        
        echo '<div id="liste-oeuvres">';
        foreach ($oeuvres as $element){
            echo '<article class="oeuvre">';
                echo '<a href="oeuvre.php?id='.$element['id'].'">';
                    echo'<img src="'.$element['img'].'" alt="'.$element['alt'].'">';
                    echo '<h2>'.$element['contenu']['titre'].'</h2>';
                    echo'<p class="description">'.$element['contenu']['description'].'</p>';
                echo '</a>';

            echo '</article>';

        };
        echo '</div>';             
        ?>
    </main>
    
    <!-- Footer -->
    <?php include "footer.php"; ?>
    
</body>
</html>
