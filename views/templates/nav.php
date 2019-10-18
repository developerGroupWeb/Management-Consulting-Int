<div class='' style=''>
    <nav class="navbar navbar-expand-md w-100 py-sm-2" id="sidebar" style="z-index: 10000; background-color: rgba(0,0,0,0.7); position: fixed; top: 0;">
        <a class="navbar-brand font-weight-bold" href="../../index.php"><img src="/public/images/My-logo.png" alt="" class='img-fluid d-none d-sm-block'> <img src="/public/images/logo-mobile.png" alt="" class='img-fluid d-sm-none'></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><i class="fa fa-bars text-white" aria-hidden="true"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-uppercase font-weight-bold">
                <li class="nav-item px-3 active">
                    <a class="nav-link" href="../../index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="<?=(isset($path))? $path : ''?>=about">A propos</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="<?=(isset($path))? $path : ''?>=services" tabindex="-1" aria-disabled="true">Nos services</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="<?=(isset($path))? $path : ''?>=contact" >Contact</a>
                </li>
            </ul>

        </div>
    </nav>
</div>