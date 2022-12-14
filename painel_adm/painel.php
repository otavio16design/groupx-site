<!DOCTYPE html>
<html lang="en">


<?php include('includes/head.html') ?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="dist/img/logo_groupx_responsivo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <?php include('includes/navbar.html') ?>

    <?php include('includes/sidebar.html') ?>

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Painel Administrativo</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Principal</a></li>
                <li class="breadcrumb-item active">Painel Administrativo</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Seja bem vindo ao seu painel administrativo!</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>



    <footer class="main-footer">
      <strong>Copyright &copy; 2022 <a href="https://www.instagram.com//">Otávio Montalvão</a>.</strong>
      Direitos reservados.
      <div class="float-right d-none d-sm-inline-block">
        <b>Versão</b> 1.0.0
      </div>
    </footer>
  </div>

  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="dist/js/adminlte.js"></script>
  <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="plugins/raphael/raphael.min.js"></script>
  <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <script src="plugins/chart.js/Chart.min.js"></script>
  <script src="dist/js/demo.js"></script>
  <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>
