<header>
<nav>
    <a class="nav_link"  href="acceuil.php">Acceuil</a>
    <a class="nav_link" href="contact.php">Contact</a>
    <a class="nav_link"  href="#">A propos</a>
    <a class="nav_link"  href="index.php">Recetes</a>
    <a class="nav_link"  href="form_recipe.php">Ajouter Recette</a>
</nav>
<div class="container_header">
    <div class="content_header">
        <div id="the_cuisto">
           <h1 class="the_cuisto"><p>The</p></h1>
           <h1 class="the_cuisto"><p>Cuisto</p></h1> 
        </div>
        <div id="logo">
            <img src="images/img6.jpg" alt="">
        </div>
        <div id="btnconnect">
            <button class="btncnt" type="submit">Se connecter</button>
        </div>
    </div>
    <div class="form">
        <form action="">
            <div class="ipnput-group">
                <label for="eMail">Adresse Mail</label><br>
                <input type="email" name="eMail" id="eMail">
            </div>
            <div class="ipnput-group">  
                <label for="numTel">Numéro de téléphone</label><br>
                <input type="tel" name="numTel" id="numTel">
            </div>
            <div class="ipnput-group">
                <label for="mdp">Mot De Passe</label><br>
                <input type="password" name="mdp" id="mdp">
            </div>
            <div class="ipnput-group">
                <label for="cmdp">Confirmer Le Mot De Passe</label><br>
                <input type="password" name="cmdp" id="cmdp">
            </div>
            
            
           
        
            <button class="btnConnexion" >Conexion</button>
            <?php if (isset($_SESSION['LOGGED_USER'])):?>
            <a href="logout.php">Deconnexion</a>
            <?php endif?>
        </form>
    </div>  
</div>
</header>
   
    
