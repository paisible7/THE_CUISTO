
<header>
    <h1>Site de recettes</h1>
<nav>
    <ul>
        <li>
           <a class="nav_link"  href="acceuil.php">Acceuil</a>
        </li>
        <li >
           <a class="nav_link" href="contact.php">Contact</a>
        </li>
        <li>
           <a class="nav_link"  href="#">A propos</a>
        </li>
        <li>
           <a class="nav_link"  href="index.php">Recetes</a>
        </li>
        <li>
            <a class="nav_link"  href="form_recipe.php">Ajouter Recette</a>
        </li>
    </ul>

</nav>
    <button class="btnConnexion" >Conexion</button>
        <?php if (isset($_SESSION['LOGGED_USER'])):?>
            <li>
                <a href="logout.php">Deconnexion</a>
            </li>
        <?php endif?>
</header>