<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link
        href="assets/nav.css"
        rel="stylesheet"
    >
</head>
<body >
<?php require_once(__DIR__ . '/header.php'); ?>
    <div class="container">

        <main>

        <form action="submit_contact.php" method="post" enctype="multipart/form-data">
            <h1>Formulaire de Contact</h1>
            <div class="form_email">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
            </div>
            <div class="form_email">
                <label for="message" class="form-label">Votre message</label>
                <textarea class="form-control" placeholder="Exprimez vous" id="message" name="message"></textarea>
            </div>

            <div class="form_email">
                <label for="screenShoot" class="form-label">Votre message</label>
                <input type="file" name="screenShoot" />
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
            </main>
    </div>


    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>

