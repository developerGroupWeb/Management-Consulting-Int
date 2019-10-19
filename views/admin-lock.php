<?php
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

    ?>


    <div class='container-fluid'>
        <div class="btn btn-success logout">Logout</div>
        <div class='row'>
            <div class='col-md-3 bg-light py-5 font-weight-bold'>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active btn-outline-primary" id="v-pills-home-tab" data-toggle="pill"
                       href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Creer une
                        annonce</a>

                    <a class="nav-link btn-outline-primary" id="v-pills-profile-tab" data-toggle="pill"
                       href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                       aria-selected="false">Profile</a>

                    <a class="nav-link btn-outline-primary" id="v-pills-messages-tab" data-toggle="pill"
                       href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages
                        <span class="badge badge-success">N</span></a>

                    <a class="nav-link btn-outline-primary" id="v-pills-settings-tab" data-toggle="pill"
                       href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Liste
                        des annonces <span class="badge badge-success">T</span></a>

                    <a class="nav-link btn-outline-primary" id="v-pills-messages-tab" data-toggle="pill"
                       href="#v-pills-categories" role="tab" aria-controls="v-pills-messages" aria-selected="false">Categories </a>
                </div>
            </div>

            <div class='col-md-9 my-5 px-5'>

                <div class="tab-content row" id="v-pills-tabContent">
                    <div class="tab-pane fade show active col-12" id="v-pills-home" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">
                        <div class='row'>
                            <div class='col-sm-10 offset-sm-1 col-md-8 offset-md-2'>
                                <h2 class='row py-5'>Creer une annonce</h2>
                                <div class='row'>

                                    <form method="post" class='col-12 mb-5' action=''>
                                        <p class='font-weight-bold'>Détails de l'annonce</p>
                                        <hr>

                                        <div class="form-group">
                                            <label for="inputAddress">Titre *</label>
                                            <input type="text" class="form-control" id="inputAddress"
                                                   placeholder="Titre de l'annonce">
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
                                            <input type="text" class="form-control" id="inputAddress"
                                                   placeholder="1234 Rue principal">
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
                                            <input type="text" class="form-control" id="inputPhone"
                                                   placeholder="Votre numero de telephone">
                                        </div>

                                        <p class='font-weight-bold'>Media</p>
                                        <hr>

                                        <div class="form-row" id='mediaFile'>
                                            <div class='form-group col-auto'>
                                                <input type="file" class="form-control-file" id="ControlFile1">
                                                <label for='ControlFile1'><i class="fa fa-plus" style='font-size: 70px;'
                                                                             aria-hidden="true"></i></label>
                                            </div>
                                            <div class='form-group col-auto'>
                                                <input type="file" class="form-control-file" id="ControlFile2">
                                                <label for='ControlFile2'><i class="fa fa-plus" style='font-size: 70px;'
                                                                             aria-hidden="true"></i></label>
                                            </div>
                                            <div class='form-group col-auto'>
                                                <input type="file" class="form-control-file" id="ControlFile3">
                                                <label for='ControlFile3'><i class="fa fa-plus" style='font-size: 70px;'
                                                                             aria-hidden="true"></i></label>
                                            </div>
                                            <div class='form-group col-auto'>
                                                <input type="file" class="form-control-file" id="ControlFile4">
                                                <label for='ControlFile4'><i class="fa fa-plus" style='font-size: 70px;'
                                                                             aria-hidden="true"></i></label>
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

                                        <button type="submit" class="btn btn-primary mb-5"><i class="fa fa-plus"
                                                                                              aria-hidden="true"></i>
                                            Publier l'annonce
                                        </button>
                                        <button type="reset" class="btn btn-danger mb-5">Annuler</button>
                                        <button type="submit" class="btn btn-dark mb-5">Enregister</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <?= $_SESSION['email'];?>
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                         aria-labelledby="v-pills-messages-tab">...
                    </div>

                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                         aria-labelledby="v-pills-settings-tab">
                        <div class="card ">
                            <h5 class="card-header">Categorie annonces</h5>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment (Titre)</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                                    aspernatur perspiciatis ipsam laudantium? Iste a illo quisquam ipsa assumenda quis
                                    tempora qui iure sapiente, ipsam cum minima, nihil, cumque nulla. (Description)</p>

                                <a href="#" class="btn btn-danger text-uppercase font-weight-bold">Supprimer</a>
                                <a href="#" class="btn btn-success text-uppercase font-weight-bold">Publier</a>
                                <a href="#" class="btn btn-secondary text-uppercase font-weight-bold">Editer</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-categories" role="tabpanel"
                         aria-labelledby="v-pills-messages-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                   role="tab" aria-controls="pills-home" aria-selected="true">AUDIT INTERNE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                   role="tab" aria-controls="pills-profile" aria-selected="false">ETUDE ECONOMIQUE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                   role="tab" aria-controls="pills-contact" aria-selected="false">FORMATION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                   aria-controls="pills-home" aria-selected="true">APPUI ET CONSEIL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                   role="tab" aria-controls="pills-profile" aria-selected="false">RECRUTEMENT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                   role="tab" aria-controls="pills-contact" aria-selected="false">CONCEPTION ET
                                    MONTAGE</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                 aria-labelledby="pills-home-tab">
                                <div class="card ">
                                    <h5 class="card-header">ID annonce</h5>
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment (Titre)</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Repellendus aspernatur perspiciatis ipsam laudantium? Iste a illo
                                            quisquam ipsa assumenda quis tempora qui iure sapiente, ipsam cum minima,
                                            nihil, cumque nulla. (Description)</p>

                                        <a href="#" class="btn btn-danger  font-weight-bold">Supprimer</a>
                                        <a href="#" class="btn btn-success  font-weight-bold">Publier</a>
                                        <a href="#" class="btn btn-secondary  font-weight-bold">Editer</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                 aria-labelledby="pills-profile-tab">
                                <div class="card ">
                                    <h5 class="card-header">ID annonce</h5>
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment (Titre)</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Repellendus aspernatur perspiciatis ipsam laudantium? Iste a illo
                                            quisquam ipsa assumenda quis tempora qui iure sapiente, ipsam cum minima,
                                            nihil, cumque nulla. (Description)</p>

                                        <a href="#" class="btn btn-danger  font-weight-bold">Supprimer</a>
                                        <a href="#" class="btn btn-success  font-weight-bold">Publier</a>
                                        <a href="#" class="btn btn-secondary  font-weight-bold">Editer</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                 aria-labelledby="pills-contact-tab">
                                <div class="card ">
                                    <h5 class="card-header">ID annonce</h5>
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment (Titre)</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Repellendus aspernatur perspiciatis ipsam laudantium? Iste a illo
                                            quisquam ipsa assumenda quis tempora qui iure sapiente, ipsam cum minima,
                                            nihil, cumque nulla. (Description)</p>

                                        <a href="#" class="btn btn-danger  font-weight-bold">Supprimer</a>
                                        <a href="#" class="btn btn-success  font-weight-bold">Publier</a>
                                        <a href="#" class="btn btn-secondary  font-weight-bold">Editer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {

            $('.logout').click(function (e) {
                e.preventDefault();
               window.location = '/logout';
            })
        })
    </script>
    <?php
}else{
    header('Location:/admin');
}
