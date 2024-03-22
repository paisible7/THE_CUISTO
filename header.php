
<header>
    <h1>Site de recettes</h1>
<nav>
    <a class="nav_link"  href="acceuil.php">Acceuil</a>
    <a class="nav_link" href="contact.php">Contact</a>
    <a class="nav_link"  href="#">A propos</a>
    <a class="nav_link"  href="index.php">Recetes</a>
    <a class="nav_link"  href="form_recipe.php">Ajouter Recette</a>
</nav>
    <button class="btnConnexion" >Conexion</button>
        <?php if (isset($_SESSION['LOGGED_USER'])):?>
  
      <a href="logout.php">Deconnexion</a>
  
        <?php endif?>
</header>