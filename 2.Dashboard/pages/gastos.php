<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <title>
    FNA - Controle Finceiro
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
</head>

<body class="g-sidenav-show  bg-gray-100">
  <?php include "navbar.php"; ?>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Página</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Despesas</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Despesas</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none">Sair</span>
                </a>
              </li>
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="col-lg-8">
        <div class="col-xl-6">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                    <i class="bi bi-cash-coin"></i>
                  </div>
                </div>
                <?php
                require('conexao.php');
                $soma = "SELECT SUM(valor) AS VALOR FROM entrada";
                $resultado = mysqli_query($conexao, $soma);
                $entrada = mysqli_fetch_assoc($resultado);
                ?>
                <div class="card-body pt-0 p-3 text-center">
                  <h6 class="text-center mb-0">Total Entrada</h6>
                  <hr class="horizontal dark my-3">
                  <h5 class="mb-0">R$<?php echo number_format((float)$entrada['VALOR'], 2, ',', '.'); ?></h5>
                </div>
              </div>
            </div>

            <div class="col-md-6 ">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                    <i class="bi bi-graph-down-arrow"></i>
                  </div>
                </div>
                <?php
                require('conexao.php');
                $soma = "SELECT SUM(valor) AS VALOR FROM gastos";
                $resultado = mysqli_query($conexao, $soma);
                $gastos = mysqli_fetch_assoc($resultado);
                ?>
                <div class="card-body pt-0 p-3 text-center">
                  <h6 class="text-center mb-0">Total Despesas</h6>
                  <hr class="horizontal dark my-3">
                  <h5 class="mb-0">R$<?php echo number_format((float)$gastos['VALOR'], 2, ',', '.'); ?></h5>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-6 mt-4">
          <div class="card h-100 mb-4">
            <div class="card-header pb-0 px-3">
              <div class="row">
                <div class="col-md-6">
                  <h6 class="mb-0">Entrada</h6>
                </div>
                <div class="col-md-3">
                  <a class="btn" href="cad_entrada.php">Cadastrar</a>
                </div>
              </div>
            </div>
            <div class="card-body pt-4 p-3">
              <?php
              require('conexao.php');

              $query = "SELECT * FROM entrada";
              $busca = mysqli_query($conexao, $query);

              while ($dados = mysqli_fetch_array($busca)) {
                $id = $dados['id'];

              ?>
                <ul class="list-group">
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm"><?php echo $dados['descricao']; ?></h6>
                      </div>
                    </div>
                    <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                      +R$<?php echo number_format((float)$dados['valor'], 2, ',', '.'); ?>
                    </div>
                  </li>
                </ul>
              <?php } ?>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4">
          <div class="card h-100 mb-4">
            <div class="card-header pb-0 px-3">
              <div class="row">
                <div class="col-md-6">
                  <h6 class="mb-0">Saida</h6>
                </div>
                <div class="col-md-3">
                  <a class="btn" href="cad_despesa.php">Cadastrar</a>
                </div>
              </div>
            </div>

            <div class="card-body pt-4 p-3">
              <?php
              require('conexao.php');

              $query = "SELECT * FROM gastos";
              $busca = mysqli_query($conexao, $query);

              while ($dados = mysqli_fetch_array($busca)) {
                $id = $dados['id'];

              ?>
                <ul class="list-group">
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></button>
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm"><?php echo $dados['descricao']; ?></h6>
                      </div>
                    </div>
                    <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                      -R$<?php echo number_format((float)$dados['valor'], 2, ',', '.'); ?>
                    </div>
                  </li>
                </ul>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  <footer class="footer pt-3  ">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script>,
            FiqueNoAzul Designed And Developed <i class="fa fa-heart"></i> by
            <a href="" class="font-weight-bold" target="_blank">Unastech</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>