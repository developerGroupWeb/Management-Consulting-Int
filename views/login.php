
<div class="d-none d-sm-block">

    <?php include 'includes/message_flash.php'?>

    <div class="col-lg-6 offset-lg-3 col-sm-8 offset-sm-2 singin-content pb-5">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="row">
                    <h4>Administraction </h4>
                </div>
                <div class="row mr-5">
                    <p>Saisis tes identifiants de connexion.</p>
                </div>
                <div class="row">
                    <form method="post" action="" class="col-sm-12" id="form-login">
                        <div class="form-group row mb-4">
                            <label for="email" class="mr-4">Identifiant</label>
                            <div class="col-md-8 col-sm-12">
                                <input type="text" name="email_or_phone" class="form-control" id="email" value="<?= $validate->post('email_or_phone')?>" placeholder="E-mail ou numéro de téléphone">
                                <span class="text-danger error-email font-italic"><?= $validate->error("email_or_phone")?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="">Mot de passe</label>
                            <div class="col-md-8 col-sm-12">
                                <div class='input-group' id="desk">
                                    <input type="password" name="password" class="form-control" id="password" value="<?= $validate->post('password')?>" placeholder="Mot de passe">

                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-eye" aria-hidden="true" style="cursor:pointer;" onclick="showHidePassword('#desk #password')"></i><i class="fa fa-eye-slash d-none" aria-hidden="true" style="cursor:pointer;" onclick="showHidePassword('#desk #password')"></i></div>
                                    </div>
                                </div>

                                <span class="text-danger error-password font-italic"><?= $validate->error("password")?></span>
                            </div>
                        </div>

                        <div class="singin-btn-validate" style="margin-left: 100px;">
                            <button type="submit" name="login"  class="btn font-weight-bold btn-primary" role="button">Se connecter</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

<!--singin page on mobile-->
<div class="mobile-bg d-block d-sm-none" style="height: 100vh;">
    <div class="container wow fadeInLeft">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="mx-auto mt-4 d-inline-flex">
                        <a href="index.php"><img src="images/Logo45.png" style="width: 150px; height: 30px; margin-bottom: 80px;"></a>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/message_flash.php'?>

        <div class="row pl-4">
            <form method="post" action="" class="col-12" id="form-login">
                <div class="form-group row mb-4">
                    <div class="col-12">
                        <input type="text" name="email_or_phone" class="row form-control" id="email" value="<?= $validate->post('email_or_phone')?>" placeholder="E-mail ou numéro de téléphone">
                        <span class="text-danger error-email font-italic"><?= $validate->error("email_or_phone")?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <div class='input-group row' id="mobil">
                            <input type="password" name="password" class="form-control" id="password" value="<?= $validate->post('password')?>" placeholder="Mot de passe"/>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-eye" aria-hidden="true" style="cursor:pointer;" onclick="showHidePassword('#mobil #password')"></i><i class="fa fa-eye-slash d-none" aria-hidden="true" style="cursor:pointer;" onclick="showHidePassword('#mobil #password')"></i></div>
                            </div>
                        </div>
                        <span class="text-danger error-password font-italic"><?= $validate->error("password")?></span>
                    </div>
                </div>

                <div class="col-10">
                    <div class="row">
                        <div class='mx-auto'>
                            <button type="submit" name="login" class="btn btn-primary px-5 font-weight-bold" role="button">Se connecter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/login.js"></script>