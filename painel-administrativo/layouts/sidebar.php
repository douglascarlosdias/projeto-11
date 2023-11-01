<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="../../images/no-user-2.webp" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">
                <?php echo $_SESSION['nome_usuario'] ?? 'Anonimo' ?>
            </a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
                <a href="../index.php" class="nav-link >
                <i class=" nav-icon fas fa-home"></i>
                    <p>
                        Home

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../produtos/index.php" class="nav-link ">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                    <p>
                        Produtos

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../categorias/index.php" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>
                        Categorias

                    </p>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>