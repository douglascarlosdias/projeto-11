<?php

require_once __DIR__ . '/../../src/dao/categoriadao.php';
require_once __DIR__ . '/../../src/dao/produtodao.php';

const UPLOAD_DIR = "imagens/";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['file'])) {
        $tmp = $_FILES['file']['tmp_name'];
        $type = explode('.', $_FILES['file']['name'])[1];
        $filename = uniqid("", true) . '.'. $type;
        $filenamewithpath = UPLOAD_DIR . $filename;
        $success = move_uploaded_file($tmp, $filenamewithpath);
        if ($success) {
            $image = UPLOAD_DIR. $filename;
        }
    }
}
$categoriaDAO = new CategoriaDAO();
$categorias = $categoriaDAO->getAll();

# cria um objeto da classe PerfilDAO e chama método para realizar ação.
$dao = new ProdutoDAO();
$produtos = $dao->getAll();
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
                            <h1>Novo produto</h1>
                        </div><!-- /.col -->

                        <div class="col-sm-12">
                            <form action="save.php" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome"
                                        placeholder="Informe o nome" required autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="descricao" class="form-label">Descrição</label>
                                    <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="valor" class="form-label">Valor</label>
                                    <input type="text" class="form-control" id="valor" name="valor"
                                        placeholder="Informe o valor" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <label for="categoria" class="form-label">Categoria</label>
                                    <select name="categoria">
                                        <?php foreach($categorias as $categoria): ?>
                                            <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
                                        <?php endforeach?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="imagem" class="form-label">Imagem</label>
                                    <input type="file" accept="imagem/png,imagem/jpeg"class="form-control" id="imagem" name="imagem" placeholder="Selecione a imagem" required autofocus>
                                    <?php if (isset($image)) : ?>
                               <img src="<?= $image ?>" alt="" width="50px">
                                <?php endif ?>
                                  <hr>

                                </div>
                            

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </form>
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