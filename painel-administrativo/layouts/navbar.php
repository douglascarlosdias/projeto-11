<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="../index.php" class="nav-link <?php $item1ativo ?>">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="../produtos/index.php" class="nav-link <?php $item2ativo ?>">Produtos</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="../categorias/index.php" class="nav-link <?php $item3ativo ?>">Categorias</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-sign-out-alt"></i>

            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="../../images/no-user-1.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">

                                <!-- identificação do usuário -->
                                <?php echo $_SESSION['nome_usuario'] ?? '' ?>

                                <span class="float-right text-sm text-danger"><i class="fas fa-star text-success"></i></span>
                            </h3>


                            <p class="text-sm"></p>

                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="../../index.php" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="../../images/logout.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Sair do painel Administrativo
                                <span class="float-right text-sm text-muted"><i class="fas fa-star text-danger"></i></span>
                            </h3>
                            <p class="text-sm">Voltar para a página inicial</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
        </li>
    </ul>
</nav>