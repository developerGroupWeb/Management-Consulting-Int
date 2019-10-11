<div class='container pt-5' id='all-annonces'>
    <div class='row'>
        <div class='col-lg-3'>
            <div class='bg-light row mb-5 py-3 '>
                <div class='col-12'>
                    <p class='font-weight-bold'>Recherche par Filtre</p>
                    <div class='row'>
                        <form class='col-12'  action=''>
                            <div class="form-group">
                                <label for="InputCountry">Localisations</label>
                                <select class="form-control" id="inputCountry">
                                <option value=''>-Choisir un pays-</option>
                                <option value=''>Benin</option>
                                <option value=''>Mali</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exSelect">Categorie</label>
                                <select class="form-control" id="exSelect">
                                <option value=''>-Choisir une categorie-</option>
                                <option value=''>EMPLOI</option>
                                <option value=''>SERVICES</option>
                                <option value=''>Cours & Formation</option>
                                <option value=''>MATÉRIEL PROFESSIONNEL</option>
                                <option value=''>ACHAT - VENTE</option>
                                <option value=''>Immobilier</option>
                                <option value=''>Véhicules</option>
                                <option value=''>Electronique-Média</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="SelectType">Type Annonceur</label>
                                <select class="form-control" id="SelectType">
                                <option value=''>-Aucun-</option>
                                <option value=''>Particulier</option>
                                <option value=''>Entreprise</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"  aria-hidden="true"></i> Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="list-group bg-light row">
                <p class='font-weight-bold p-3'>Recherche par Catégorie</p>
                <button type="button" class="list-group-item list-group-item-action">
                    <a class="nav-link" href="#">Emploi</a>
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                    <a class="nav-link" href="#">Services</a>
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                    <a class="nav-link" href="#">Cours & Formation</a>
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                    <a class="nav-link" href="#">MATÉRIEL PROFESSIONNEL</a>
                </button>
                <button type="button" class="list-group-item list-group-item-action"><a class="nav-link" href="#">ACHAT - VENTE</a></button>
                <button type="button" class="list-group-item list-group-item-action"><a class="nav-link" href="#">Immobilier</a></button>
                <button type="button" class="list-group-item list-group-item-action"><a class="nav-link" href="#">Véhicules</a></button>
                <button type="button" class="list-group-item list-group-item-action"><a class="nav-link" href="#">Electronique-Média</a></button>
            </div>
        </div>

        <div class='col-lg-6 px-4'>
            <div class='row'>
                <div class="card mb-4" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="https://via.placeholder.com/150" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class='mb-2'>
                                    <h5 class="card-title"><a href=''>Card title This is a wider card with supporting text below ...</a></h5>
                                    <span class="badge badge-primary">Primary</span>
                                    <span class='font-weight-bold'>Prix CFA</span>
                                </div>

                                <p class="card-text">DESCRIPTION This is a wider card with supporting text below as a natural lead-in to additional content. This content ...</p>

                                <div class='d-flex '>
                                    <p class='mr-4'><i class="fa fa-clock-o" aria-hidden="true"></i>  <span class="text-muted">Time</span></p>

                                    <p><i class="fa fa-eye" aria-hidden="true"></i> <span class="text-muted">Vues</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class='row'>
                        
                    <div class='d-flex'>
                        <p class="text-muted mr-4 ml-2"><i class="fa fa-folder-open" aria-hidden="true"></i> <small class="font-weight-bold"><a href=''>Categorie</a></small></p>

                        <p class="font-weight-bold text-muted"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="font-weight-bold"><a href='' class=''>Location</a></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class='col-lg-3 border'>
            <div class='row'>
                <p class='mx-auto'>Espace publicite</p>
            </div>
        </div>
    </div>
</div>