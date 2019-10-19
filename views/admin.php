
<?
//print_r($params);
?>


<div class="">

    <?php  require_once 'helpers/message_flash.php' ?>

<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 singin-content px-4">
    <div class="row" style='margin-top: 100px; margin-bottom: 150px;'>
        <div class="col-12 col-md-8 offset-md-2 btn border p-4">



            <div class="row py-4">
                <h4 class='mx-auto'>Administration </h4>
            </div>
            <div class="row">
                <p class='mx-auto'>Saisis tes identifiants de connexion.</p>
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

                    <div class="singin-btn-validate row">
                        <button type="submit" name="login"  class="btn font-weight-bold btn-primary mx-auto px-4" role="button">Se connecter</button>
                    </div>
                </form>
                
            </div>
        </div>

    </div>
</div>

</div>

<!--singin page on mobile-
<div class="mobile-bg d-block d-sm-none" style="height: 100vh;">
<div class="container py-5">

    <?php require 'helpers/message_flash.php' ?>

    <div class="row pl-4 mt-5">
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
                        <button type="submit" name="login" class="btn btn-primary px-4 font-weight-bold" role="button">Se connecter</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
</div>-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/public/js/admin.js"></script>