<div class='container-fluid'>
    <div class='row'>
        <div class='col-md-3 bg-secondary'>
            <div class='row'>
                <div class="accordion col-12" id="accordionExample">
                    <div class="card row">
                        <div class="card-header" id="headingThree">
                            <button class="btn collapsed font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Categories
                            </button>
                            
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <nav class="nav flex-column">
                                    <a class="nav-link" href="#">Emploi</a>
                                    <a class="nav-link" href="#">Services</a>
                                    <a class="nav-link" href="#">Cours & Formation</a>
                                    <a class="nav-link" href="#">MATÉRIEL PROFESSIONNEL</a>
                                    <a class="nav-link" href="#">ACHAT - VENTE</a>
                                    <a class="nav-link" href="#">Immobilier</a>
                                    <a class="nav-link" href="#">Véhicules</a>
                                    <a class="nav-link" href="#">Electronique-Média</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='col-md-9 mb-5'>
            <div class='row'>
                <div class='col-sm-10 offset-sm-1 col-md-8 offset-md-2'>
                <h2 class='row py-5'>Soumettez votre annonce</h2>
                    <div class='row'>

                        <form class='col-12 mb-5'  action=''>
                            <p class='font-weight-bold'>Détails de l'annonce</p>
                            <hr>

                            <div class="form-group">
                                <label for="inputAddress">Titre *</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Titre de l'annonce">
                            </div>
                            <div class="form-group">
                                <label for="exSelect">Categorie *</label>
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
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                <label for="inputPrice">Prix</label>
                                <input type="text" class="form-control" id="inputPrice">
                                </div>
                                <div class="form-group col-md-4">
                                <label for="inputDevise">Devise</label>
                                <select id="inputDevise" class="form-control">
                                    <option value='' selected>CFA</option>
                                    <option>...</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ControlTextarea">Description</label>
                                <textarea class="form-control" id="ControlTextarea" rows="3"></textarea>
                            </div>

                            <p class='font-weight-bold'>Details Contact</p>
                            <hr>

                            <div class="form-group">
                                <label for="inputAddress">Addresse</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Rue principal">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="InputCountry">Pays</label>
                                    <select class="form-control" id="inputCountry">
                                    <option value=''>-Choisir un pays-</option>
                                    <option value=''>Benin</option>
                                    <option value=''>Mali</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">Ville</label>
                                    <select id="inputState" class="form-control">
                                        <option>-Choisir une vile-</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPhone">Numero de telephone *</label>
                                <input type="text" class="form-control" id="inputPhone" placeholder="Votre numero de telephone">
                            </div>

                            <p class='font-weight-bold'>Media</p>
                            <hr>
                            
                            <div class="form-row" id='mediaFile'>
                                <div class='form-group col-auto'>
                                    <input type="file" class="form-control-file" id="ControlFile1">
                                    <label for='ControlFile1' ><i class="fa fa-plus" style='font-size: 70px;' aria-hidden="true"></i></label>
                                </div>
                                <div class='form-group col-auto'>
                                    <input type="file" class="form-control-file" id="ControlFile2">
                                    <label for='ControlFile2'><i class="fa fa-plus" style='font-size: 70px;' aria-hidden="true"></i></label>
                                </div>
                                <div class='form-group col-auto'>
                                    <input type="file" class="form-control-file" id="ControlFile3">
                                    <label for='ControlFile3'><i class="fa fa-plus" style='font-size: 70px;' aria-hidden="true"></i></label>
                                </div>
                                <div class='form-group col-auto'>
                                    <input type="file" class="form-control-file" id="ControlFile4">
                                    <label for='ControlFile4'><i class="fa fa-plus" style='font-size: 70px;' aria-hidden="true"></i></label>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" checked id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                J'accepte les termes and conditions
                                </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mb-5"><i class="fa fa-plus"  aria-hidden="true"></i> Poster l'annonce</button>
                            <button type="reset" class="btn btn-danger mb-5">Annuler</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>