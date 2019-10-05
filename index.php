<!doctype html>
<html lang="en">
  <head>
    <title>Management Consulting Int</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    
    <div class='bg-light'>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand font-weight-bold" href="index.php">Management Consulting Int</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
                    </li>
                </ul>

                <button class='navbar-nav btn btn-warning px-3 py-3'>Consulter les annonces</button>
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

    <section id='categories' class='py-5'>
        <div class='container py-5 '>
            <div class='row'>
                <a href="" class='col-md py-5 px-2 bg-light'>
                    <div class='row '>
                        <h5 class="mx-auto text-center">EMPLOI</h5>
                    </div>
                </a>

                <a href="" class='col-md py-5 px-2 bg-light ml-md-3 mx-lg-3 mt-4 mt-md-0'>
                    <div class='row  '>
                        <h5 class='mx-auto text-center'>SERVICES</h5>
                    </div>
                </a>

                <div class='w-100 d-none d-sm-block d-lg-none'></div>

                <a href="" class='col-md py-5 px-2 bg-light mt-4 mt-lg-0'>
                    <div class='row'>
                        <h5 class="mx-auto text-center">Cours & Formation</h5>
                    </div>
                </a>

                <a href="" class='col-md py-5 px-2 bg-light ml-md-3 mt-4 mt-lg-0'>
                    <div class='row'>
                        <h5 class='mx-auto text-center'>MATÉRIEL PROFESSIONNEL</h5>
                    </div>
                </a>
            </div>

            <div class='row mt-4'>
                <a href="" class='col-md py-5 px-2 bg-light'>
                    <div class='row '>
                        <h5 class="mx-auto text-center">ACHAT - VENTE</h5>
                    </div>
                </a>

                <a href="" class='col-md py-5 px-2 bg-light ml-md-3 mx-lg-3 mt-4 mt-md-0'>
                    <div class='row  '>
                        <h5 class='mx-auto text-center'>Immobilier</h5>
                    </div>
                </a>

                <div class='w-100 d-none d-sm-block d-lg-none'></div>

                <a href="" class='col-md py-5 px-2 bg-light mt-4 mt-lg-0'>
                    <div class='row'>
                        <h5 class="mx-auto text-center">Véhicules</h5>
                    </div>
                </a>

                <a href="" class='col-md py-5 px-2 bg-light ml-md-3 mt-4 mt-lg-0'>
                    <div class='row'>
                        <h5 class='mx-auto text-center'>Electronique-Média</h5>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class='pb-5'>
        <div class='container'>
            <div class='row my-4'>
                <h2 class=''>Annonces récentes</h2>
            </div>
            
            <div class="card-deck">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Prix</p>
                    <p class="card-text">Categorie</p>
                    <p class="card-text">Ville</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Prix</p>
                    <p class="card-text">Categorie</p>
                    <p class="card-text">Ville</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                
                <div class='w-100 d-none d-sm-block d-lg-none'></div>

                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Prix</p>
                    <p class="card-text">Categorie</p>
                    <p class="card-text">Ville</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Prix</p>
                    <p class="card-text">Categorie</p>
                    <p class="card-text">Ville</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id='footer' class='bg-dark py-4 mt-5'>
        <footer class='container text-center text-white'>
            <div class='row nav'>
                <div class=''>
                    <p>Copyright © 2019 - Management Consulting Int</p>
                </div>
                <div class='ml-auto'>
                    <p class=''> Tous droits réservés</p>
                </div>
                <div class='ml-auto'>
                    <p class='text-center'> Le portail d'annonces gratuites et de prestations de services</p>
                </div>
            </div>

            
        </footer>
    </section>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>