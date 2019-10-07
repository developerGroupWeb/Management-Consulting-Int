<?php include 'includes/header.php';?>
<?php include 'templates/nav.php';?>

    <title>Management Consulting Int</title>

    <section id='categories' class='py-5'>
        <div class='container py-5 '>
            <div class='row'>
                <a href="" class='col-md py-5 px-2 box1'>
                    <div class='row'>
                        <h5 class="mx-auto text-center font-weight-bold">EMPLOI</h5>
                    </div>
                    
                </a>

                <a href="" class='col-md py-5 px-2 bg-light ml-md-3 mx-lg-3 mt-4 mt-md-0 box2'>
                    <div class='row  '>
                        <h5 class='mx-auto text-center'>SERVICES</h5>
                    </div>
                </a>

                <div class='w-100 d-none d-sm-block d-lg-none'></div>

                <a href="" class='col-md py-5 px-2 bg-light mt-4 mt-lg-0 box3'>
                    <div class='row'>
                        <h5 class="mx-auto text-center">Cours & Formation</h5>
                    </div>
                </a>

                <a href="" class='col-md py-5 px-2 bg-light ml-md-3 mt-4 mt-lg-0 box4'>
                    <div class='row'>
                        <h5 class='mx-auto text-center'>MATÉRIEL PROFESSIONNEL</h5>
                    </div>
                </a>
            </div>

            <div class='row mt-4'>
                <a href="" class='col-md py-5 px-2 bg-light box5'>
                    <div class='row '>
                        <h5 class="mx-auto text-center">ACHAT - VENTE</h5>
                    </div>
                </a>

                <a href="" class='col-md py-5 px-2 bg-light ml-md-3 mx-lg-3 mt-4 mt-md-0 box6'>
                    <div class='row  '>
                        <h5 class='mx-auto text-center'>Immobilier</h5>
                    </div>
                </a>

                <div class='w-100 d-none d-sm-block d-lg-none'></div>

                <a href="" class='col-md py-5 px-2 bg-light mt-4 mt-lg-0 box7'>
                    <div class='row'>
                        <h5 class="mx-auto text-center">Véhicules</h5>
                    </div>
                </a>

                <a href="" class='col-md py-5 px-2 bg-light ml-md-3 mt-4 mt-lg-0 box8'>
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
                    <a href="<?=(isset($path))? $path : ''?>=show&id=1254789"><img src="https://via.placeholder.com/150" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Prix</p>
                        <p class="card-text">Categorie</p>
                        <p class="card-text">Ville</p>
                        <p class="card-text"><?=$counter->number_views('1254789')?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <a href="<?=(isset($path))? $path : ''?>=show&id=12547"><img src="https://via.placeholder.com/150" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Prix</p>
                        <p class="card-text">Categorie</p>
                        <p class="card-text">Ville</p>
                        <p class="card-text"><?=$counter->number_views('12547')?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>

                <div class='w-100 d-none d-sm-block d-lg-none'></div>

                <div class="card">
                    <a href="<?=(isset($path))? $path : ''?>=show&id=125784"><img src="https://via.placeholder.com/150" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Prix</p>
                        <p class="card-text">Categorie</p>
                        <p class="card-text">Ville</p>
                        <p class="card-text"><?=$counter->number_views('125784')?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <a href="<?=(isset($path))? $path : ''?>=show&id=125484"><img src="https://via.placeholder.com/150" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Prix</p>
                        <p class="card-text">Categorie</p>
                        <p class="card-text">Ville</p>
                        <p class="card-text"><?=$counter->number_views('125484')?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'templates/footer.php';?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
