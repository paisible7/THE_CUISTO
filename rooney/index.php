<?php

session_start();
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variable.php');
require_once(__DIR__ . '/fonctions.php');
?>

<!-- inclusion des variables et fonctions -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Page d'accueil</title>
    <link rel="stylesheet" href="assets/nav.css">
</head>
<body>
<!-- section des hero -->
<section id="hero">
<?php include_once(__DIR__ . '/header.php'); ?>
</section>
<!--  -->
<main>
<!-- section affichages des recettes -->
<section id="Affichage_recettes">
<div class="container">
<div class="parent_element_recipe">
        <?php foreach (getRecipes($recipes) as $recipe) : ?>
            <div class="element_recipes">
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
            </article>
            </div>
        <?php endforeach ?>
</div>

</div>
</section>
<!-- -->


</main>
<!-- section du formulaire-->
<section id="formulaire_contact">
    <!-- Formulaire de connexion -->
    <?php require_once(__DIR__ . '/login.php'); ?>
</section>
<!-- inclusion du bas de page du site -->
<?php include_once(__DIR__ . '/footer.php'); ?>
</body>
</html>
