<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include "header.php"; ?>
    
    <main>
        <?php
        include 'oeuvres.php';

        // Vérifie si l'identifiant d'œuvre est passé dans l'URL
        if (isset($_GET['id'])) {
            $oeuvre_id = $_GET['id'];

            // Recherche de l'œuvre par son identifiant
            $oeuvre = null;
            foreach ($oeuvres as $element) {
                if ($element['id'] == $oeuvre_id) {
                    $oeuvre = $element;
                    break;
                }
            }

            if ($oeuvre) {
                // Affichage des détails de l'œuvre
                echo '<article id="detail-oeuvre">';
                echo '<div id="img-oeuvre">';
                echo '<img src="' . $oeuvre['img'] . '" alt="' . $oeuvre['alt'] . '">';
                echo '</div>';
                echo '<div id="contenu-oeuvre">';
                echo '<h1>' . $oeuvre['contenu']['titre'] . '</h1>';
                echo '<p class="description">' . $oeuvre['contenu']['description'] . '</p>';
                echo '<p class="description-complete">' . $oeuvre['contenu']['description_complete'] . ' </p>';
                echo '</div>';
                echo '</article>';
            } else {
                echo '<p>Identifiant d\'œuvre non valide.</p>';
            }
        } else {
            echo '<p>Aucun identifiant d\'œuvre fourni.</p>';
        }
        ?>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>
