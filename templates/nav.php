<div class='bg-light'>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand font-weight-bold" href="index.php">Management Consulting Int</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="main.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=(isset($path))? $path : ''?>=about">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=(isset($path))? $path : ''?>=contact" tabindex="-1" aria-disabled="true">Contact</a>
                </li>
            </ul>

            <a href="<?=(isset($path))? $path : ''?>=announces" class='navbar-nav btn btn-warning px-3 py-3'>Consulter les annonces</a>

            <a href="<?=(isset($path))? $path : ''?>=login" class='navbar-nav btn btn-primary px-3 py-3'>Déposer une annonce</a>

        </div>
    </nav>
</div>

<section class='bg-primary py-5' id='search-section'>
    <div class='container'>
        <div class='row'>
            <form class="form-group col-10 offset-1 col-md-8 offset-md-2">
                <div class='row'>
                    <div class='col-md-8'>
                        <div class='row'>
                            <input class="form-control col-12 py-4" type="search" placeholder="Recherche" aria-label="Search">

                            <ul class='col-12 list-unstyled mt-5 bg-white d-none'>
                                <li>texte1</li>
                                <li>texte2</li>
                                <li>texte3</li>
                                <li>texte4</li>
                                <li>texte5</li>
                                <li>texte6</li>
                            </ul>
                        </div>
                    </div>

                    <button class="btn btn-outline-warning ml-md-2 mt-3 mt-md-0 text-white col-md-3" type="submit">Recherche</button>
                </div>
            </form>
        </div>
    </div>
</section>