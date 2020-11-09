 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Delfos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li <?php echo ($page == 'index') ? "class='nav-item active px-3 py-2'" : ""; ?>
                    class="nav-item px-3 py-2">
                    <a class="nav-link" href="../index.php">Home </span></a>
                </li>
                <li <?php echo ($page == 'usuarios') ? "class='nav-item active px-3 py-2'" : ""; ?>
                    class="nav-item px-3 py-2">
                    <a class="nav-link" href="../crud_usuarios/usuarios.php">Usuarios</a>
                </li>
                <li <?php echo ($page == 'productos') ? "class='nav-item active px-3 py-2'" : ""; ?>
                    class="nav-item px-3 py-2">
                    <a class="nav-link" href="../crud_productos/productos.php">Catalogo de productos</a>
                </li>
                <form name="cerrar-sesion" class="form-inline my-2 my-lg-0">
                    <button onclick="window.location.href='../login.php'" type="button"
                        class="btn btn-dark my-2 my-sm-0" type="submit" value="cerrar_sesion">Logout</button>
                        <input type="submit" value="cerrar_sesion"/>
                </form>
            </ul>
        </div>
    </nav>