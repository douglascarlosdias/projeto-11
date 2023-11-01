<?php

require_once __DIR__ . '/../../src/dao/categoriadao.php';


# cria um objeto da classe PerfilDAO e chama método para realizar ação.
$dao = new CategoriaDAO();
$categorias = $dao->getAll();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Painel Administrativo</title>
    <link rel="icon" href="../../images/logo.jpg" type="image/x-icon">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="../dist/css/painel.css">
    <link rel="stylesheet" href="../dist/css/style-categorias2.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once __DIR__ . "/../layouts/navbar.php";?>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <div align="center">
                    <span class="brand-text font-weight-light">Painel Administrativo</span>
                </div>
            </a>

            <!-- Sidebar -->
            <?php include_once __DIR__ . "/../layouts/sidebar.php";?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-12">
                            <h1>Categorias</h1>
                        </div><!-- /.col -->

                        <div class="col-sm-12">
                            <a href="create.php" class="btn btn-success">Novo</a>
                            <p></p>
                        </div>
                        <div class="col-sm-12">
                            <table class="table table-stripped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php if (count($categorias) == "0"): ?>
                                        <tr>
                                            <td colspan="4">Não existem dados cadastrados.</td>
                                        </tr>
                                    <?php else: ?>
                                        <?php foreach ($categorias as $categoria): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $categoria['id']; ?>
                                                </td>
                                                <td>
                                                    <?= htmlspecialchars($categoria['nome']); ?>
                                                </td>
                                                <td>
                                                    <?= htmlspecialchars($categoria['descricao']); ?>
                                                </td>
                                                <td class="btn">
                                                    <a class="btnalterar" href="edit.php?id=<?= $categoria['id']; ?>">Alterar</a>
                                                    <a class="btnexcluir" href="delete.php?id=<?= $categoria['id']; ?>"
                                                        onclick="return confirm('Deseja confirmar a operação?');">Excluir</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

        </div>
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.js"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src="dist/js/demo.js"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="../plugins/raphael/raphael.min.js"></script>
        <script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
        <!-- ChartJS -->
        <script src="../plugins/chart.js/Chart.min.js"></script>

        <!-- PAGE SCRIPTS -->
        <script src="../dist/js/pages/dashboard2.js"></script>
</body>

</html>