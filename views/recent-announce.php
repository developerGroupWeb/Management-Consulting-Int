
<section class='bg-primary py-5' id='search-section'>
        <div class='container'>
            <div class='row'>
                <form method="post" action="" id="form-search" class="form-group col-10 offset-1 col-md-8 offset-md-2">
                    <div class='row'>
                        <div class='col-md-8'>
                            <div class='row'>
                                <input class="form-control col-12 py-4" id="search" type="search" placeholder="Recherche" aria-label="Search">

                                <ul class='col-12 list-unstyled mt-5 bg-white d-none'>

                                </ul>
                            </div>
                        </div>

                        <button class="btn btn-outline-warning ml-md-2 mt-3 mt-md-0 text-white col-md-3 d-none" type="submit">Recherche</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id='categories' class='py-5'>
        <div class='container py-5 '>
            <div class='row'>
                <a href="/category/recrutement" class='col-md py-5 px-2 box1'>
                    <div class='row'>
                        <h5 class="mx-auto text-center font-weight-bold">Récrutement</h5>
                    </div>
                    
                </a>

                <a href="/category/services" class='col-md py-5 px-2 bg-light ml-md-3 mx-lg-3 mt-4 mt-md-0 box2'>
                    <div class='row  '>
                        <h5 class='mx-auto text-center'>Conseils</h5>
                    </div>
                </a>

                <div class='w-100 d-none d-sm-block d-lg-none'></div>

                <a href="/category/audit-formation" class='col-md py-5 px-2 bg-light mt-4 mt-lg-0 box3'>
                    <div class='row'>
                        <h5 class="mx-auto text-center">Audit & Formation</h5>
                    </div>
                </a>

                <a href="/category/materiel-professionnel" class='col-md py-5 px-2 bg-light ml-md-3 mt-4 mt-lg-0 box4'>
                    <div class='row'>
                        <h5 class='mx-auto text-center'>MATÉRIEL PROFESSIONNEL</h5>
                    </div>
                </a>
            </div>

            <div class='row mt-4'>
                <a href="/category/achat-vente" class='col-md py-5 px-2 bg-light box5'>
                    <div class='row '>
                        <h5 class="mx-auto text-center">Création de site web</h5>
                    </div>
                </a>

                <a href="/category/immobilier" class='col-md py-5 px-2 bg-light ml-md-3 mx-lg-3 mt-4 mt-md-0 box6'>
                    <div class='row  '>
                        <h5 class='mx-auto text-center'>Immobilier & Mobilier</h5>
                    </div>
                </a>

                <div class='w-100 d-none d-sm-block d-lg-none'></div>

                <a href="/category/vehicules" class='col-md py-5 px-2 bg-light mt-4 mt-lg-0 box7'>
                    <div class='row'>
                        <h5 class="mx-auto text-center">Véhicules</h5>
                    </div>
                </a>

                <a href="/category/electronique-media" class='col-md py-5 px-2 bg-light ml-md-3 mt-4 mt-lg-0 box8'>
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
                <? foreach ($latest as $item):?>
                <div class="card">
                    <a href="/announce/<?=$item->id?>"><img src="https://via.placeholder.com/150" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="/announce/<?=$item->id?>"><?=$item->title?></a></h5>
                        <p class="card-text"><?=$item->price.'  '.strtoupper($item->devise)?></p>

                        <p class="card-text"><i class="fa fa-folder-open" aria-hidden="true"></i> <a href="/category/<?= strtolower($item->category)?>"><?=$item->category?></a></p>

                        <p class="card-text"><i class="fa fa-map-marker" aria-hidden="true"></i> <a href=''> <?=$item->city?></a></p>

                        <p class="card-text"><i class="fa fa-eye" aria-hidden="true"></i> <?=$counter->number_views($item->id)?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> <?=time_ago($item->created_at)?></small>
                    </div>
                </div>

                <div class='w-100 d-md-none'></div>
                <? endforeach;?>
            </div>
            
            <div class='row mt-5'>
                <div class='mx-auto'>
                    <a href="/announces" class='btn btn-outline-primary px-4 font-weight-bold py-3'>Consultez toutes les annonces</a>
                </div>
            </div>
        </div>
    </section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/public/js/search.js"></script>
