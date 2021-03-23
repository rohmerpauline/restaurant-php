<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="Logo chez Mauricette" style="width:100px; height:auto">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fs-4"></span>
    </button>
    <div class="collapse navbar-collapse fs-4" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link text-center text-uppercase 
            <?php 
            // Make link active when on the index page
                if($_SERVER['SCRIPT_NAME'] == "/restaurant-php/index.php"){ 
            ?> active
            <?php 
                } 
            ?>"aria-current="page" href="index.php">Accueil
        </a>
        <a class="nav-link text-center text-uppercase 
            <?php 
            // Make link active when on the menu page
                if($_SERVER['SCRIPT_NAME'] == "/restaurant-php/menu.php") {
            ?>active 
            <?php 
                } 
            ?>" href="menu.php"> Menu
        </a>
        <a class="nav-link text-center text-uppercase
            <?php 
            // Make link active when on the galerie page
                if($_SERVER['SCRIPT_NAME'] == "/restaurant-php/galerie.php") { 
            ?>active 
            <?php 
                } 
            ?>" href="galerie.php">Photos
        </a>
        <a class="nav-link text-center text-uppercase
            <?php 
            // Make link active when on the restaurant page
                if($_SERVER['SCRIPT_NAME'] == "/restaurant-php/nosrestaurants.php") { 
            ?>active 
            <?php 
                } 
            ?>" href="nosrestaurants.php">Nos restaurants
        </a>
        <a class="nav-link text-center text-uppercase
            <?php 
            // Make link active when on the restaurant page
                if($_SERVER['SCRIPT_NAME'] == "/restaurant-php/nouscontacter.php") { 
            ?>active 
            <?php 
                } 
            ?>" href="nouscontacter.php">Nous contacter</a>
        </div>
    </div>
    </div>
</nav>