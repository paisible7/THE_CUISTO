<?php

if (!isset($_POST['AddRecipe'])|| !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)||empty($postData['message'])
){
    echo ('il faut une rectte valide et un message ');
    return;

}
redirectToUrl('index.php');
?>

<link rel="stylesheet" href="assets/nav.css">
<?php require_once(__DIR__ . '/header.php'); ?>
<?php if(!isset($_SESSION['LOGGED_USER'])) :?>
    <form class= "form_login" action="index.php" method="POST">
        <div class="login_connex">
            <label for="email">Email</label>
            <input type="email" placeholder="User_name@gmail.com" name="email"/>
        </div>
        <div class="login_connex">
            <label for="add recipe">Add Recipe</label>
            <input type="text" placeholder="Add Recipe " name="AddRecipe"/>
        </div>
        <div class="btnBtn">
            <button type="submit">Envoyer</button>
        </div>
    </form>

<?php else :?>
    Bonjour <?php echo $_SESSION['LOGGED_USER']; ?>et bienvenue sur le site !

    <?php require_once(__DIR__ . '/header.php'); ?>
        <?php if(!isset($_SESSION['LOGGED_USER'])) :?>
            <form class= "form_login" action="index.php" method="POST">
                <div class="login_connex">
                    <label for="email">Email</label>
                    <input type="email" placeholder="User_name@gmail.com" name="email"/>
                </div>
                <div class="login_connex">
                    <label for="add recipe">Add Recipe</label>
                    <input type="text" placeholder="Add Recipe " name="AddRecipe"/>
                </div>
                <div class="btnBtn">
                    <button type="submit">Envoyer</button>
                </div>
            </form>

        <?php endif;?>


<?php require_once(__DIR__ . '/footer.php'); ?>

<?php endif;?>