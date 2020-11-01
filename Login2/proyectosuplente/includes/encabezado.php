<nav class="navbar shadow-sm navbar-expand-md navbar-dark bg-orangened">
    <a class="navbar-brand" href="./images/iconolog.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-pills align-items-center">
            <li class="nav-brand px-4 py-2">
                <a href="index.php" class="logomenu"> <img src="./images/logo_cabecera.png" width="70" height="60"
                        alt="Logo">
                </a>
            </li>
            <li <?php echo ($page == 'index') ? "class='nav-item active px-3 py-2'" : ""; ?> class="nav-item px-3 py-2">
                <a class="nav-link borde" href="index.php">Inicio</a>
            </li>
            <li <?php echo ($page == 'catalogo') ? "class='nav-item active px-3 py-2'" : ""; ?>
                class="nav-item px-3 py-2">
                <a class="nav-link borde" href="catalogo.php">Catálogo</a>
            </li>
            <li <?php echo ($page == 'paquetes') ? "class='nav-item active px-3 py-2'" : ""; ?>
                class="nav-item px-3 py-2">
                <a class="nav-link borde" href="paquetes.php">Paquetes</a>
            </li>
            <li <?php echo ($page == 'contacto') ? "class='nav-item active px-3 py-2'" : ""; ?>
                class="nav-item px-3 py-2">
                <a class="nav-link borde" href="contacto.php">Contacto</a>
            </li>
        </ul>
        <ul class="navbar-nav align-items-center ml-auto social_links">
            <li class="nav-item px-3 py-2"><a class="nav-link" href="#"> <i class="icon-fa fa fa-instagram"></i></a>
            </li>
            <li class="nav-item px-3 py-2"><a class="nav-link" href="#"> <i class="icon-fa fa fa-facebook"></i></a></li>
            <li class="nav-item px-3 py-2"><a class="nav-link" href="#"> <i class="icon-fa fa fa-google"></i></a></li>
            <li class="nav-item px-3 py-2"><a class="nav-link" href="#"> <i class="icon-fa fa fa-linkedin"></i></a></li>
            <li class="nav-item px-3 py-2"><a class="nav-link" href="Login/login.php"> <svg width="1.5em" height="1.5em"
                        viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                         d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z" />
                        <path d="M13.784 14c-.497-1.27-1.988-3-5.784-3s-5.287 1.73-5.784 3h11.568z" />
                        <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg></a></li>
        </ul>
    </div>


</nav>