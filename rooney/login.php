
<?php


$postData = $_POST;



if(isset($postData['email']) && isset($postData['password'])){

    if (!filter_var($postData['email'],FILTER_VALIDATE_EMAIL)){
        $errorMessage = "Il faut un email valide pour soumetre la formulaire";
    }else{
        foreach ($users as $user){
            if($user['email'] == $postData['email'] && $user['password']==$postData['password']){
                $_SESSION['LOGGED_USER'] =  $user['email'];
            }
        }
        if (!isset($_SESSION['LOGGED_USER '])){
            $errorMessage = sprintf('les informations envoyeé ne permettent pas de vous identifier : (%s/%s)'
                ,$postData['email'],strip_tags($postData['password']));
        }
    }
    redirectToUrl('index.php');
}
?>
<?php if(!isset($_SESSION['LOGGED_USER'])) :?>
    <form class= "form_login" action="submit_contact.php" method="POST">
        <?php if(isset($errorMessage)) :?>
            <div class="login_connex">
            <?php
                echo $errorMessage; ?>
            </div>
        <?php endif;?>
            <div class="login_connex">
            <label for="email">Email</label>
            <input type="email" placeholder="User_name@gmail.com" name="email"/>
        </div>
        <div class="login_connex">
            <label for="password">Password</label>
            <input type="password" placeholder="password" name="password"/>
        </div>
            <div class="btnBtn">
            <button type="submit">Envoyer</button>
        </div>
    </form>

<?php else :?>
    Bonjour <?php echo $_SESSION['LOGGED_USER']; ?>et bienvenue sur le site !

<?php endif;?>