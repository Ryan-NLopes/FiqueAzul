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
<?php

if (isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) {
  require("acoes/conexao2.php");
  $nome = $_SESSION["usuario"][0];
} else {
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <title>
    FNA - Dashboard
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pagina</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Inicial</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1"></i>
                  <a class="d-sm-inline d-none" href="index.php">Sair</a>
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
      <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <?php
                    require('conexao.php');
                    $soma = "SELECT SUM(valor) AS VALOR FROM entrada";
                    $resultado = mysqli_query($conexao, $soma);
                    $entrada = mysqli_fetch_assoc($resultado);
                    ?>
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"><a href="gastos.php">Receita</a></p>
                    <h5 class="text-success font-weight-bolder mb-0">R$<?php echo number_format((float)$entrada['VALOR'], 2, ',', ''); ?></h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <?php
                  require('conexao.php');
                  $soma = "SELECT SUM(valor) AS VALOR FROM gastos";
                  $resultado = mysqli_query($conexao, $soma);
                  $gastos = mysqli_fetch_assoc($resultado);
                  ?>
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"><a href="gastos.php">Gastos</a></p>
                    <h5 class=" text-danger font-weight-bolder mb-0">- R$<?php echo number_format((float)$gastos['VALOR'], 2, ',', ''); ?></h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="bi bi-graph-down-arrow"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <?php

                  require('conexao.php');
                  $soma = "SELECT SUM(valor) AS VALORSAIDA FROM gastos";
                  $resultado = mysqli_query($conexao, $soma);
                  $gastos = mysqli_fetch_assoc($resultado);

                  $soma = "SELECT SUM(valor) AS VALOR FROM entrada";
                  $resultado = mysqli_query($conexao, $soma);
                  $entrada = mysqli_fetch_assoc($resultado);

                  $resultado = $entrada['VALOR'] - $gastos['VALORSAIDA'];
                  ?>

                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"><a href="gastos.php">Saldo Dispinível</a></p>
                    <h5 class=" text-primary font-weight-bolder mb-0">R$<?php echo number_format((float)$resultado, 2, ',', ''); ?></h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="bi bi-graph-down-arrow"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <!-- Adicionando Grafico -->
        <div id="donutchart" style="width: 900px; height: 500px;"></div>

      </div>
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
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <html>

  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
      google.charts.load("current", {
        packages: ["corechart"]
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Conta (Água, luz e Internet).', <?php
                                            require('conexao.php');
                                            $soma = "SELECT SUM(valor) AS VALOR FROM gastos WHERE tipo=1";
                                            $resultado = mysqli_query($conexao, $soma);
                                            $gastos = mysqli_fetch_assoc($resultado);
                                            echo number_format((float)$gastos['VALOR'], 2, '.', ''); ?>],
          ['Alimenticio.', <?php
                            require('conexao.php');
                            $soma = "SELECT SUM(valor) AS VALOR FROM gastos WHERE tipo=2";
                            $resultado = mysqli_query($conexao, $soma);
                            $gastos = mysqli_fetch_assoc($resultado);
                            echo number_format((float)$gastos['VALOR'], 2, '.', ''); ?>],
          ['Compra na Internet.', <?php
                                  require('conexao.php');
                                  $soma = "SELECT SUM(valor) AS VALOR FROM gastos WHERE tipo=3";
                                  $resultado = mysqli_query($conexao, $soma);
                                  $gastos = mysqli_fetch_assoc($resultado);
                                  echo number_format((float)$gastos['VALOR'], 2, '.', ''); ?>],
          ['Farmácia.', <?php
                        require('conexao.php');
                        $soma = "SELECT SUM(valor) AS VALOR FROM gastos WHERE tipo=4";
                        $resultado = mysqli_query($conexao, $soma);
                        $gastos = mysqli_fetch_assoc($resultado);
                        echo number_format((float)$gastos['VALOR'], 2, '.', ''); ?>],
          ['Eletrônico.', <?php
                        require('conexao.php');
                        $soma = "SELECT SUM(valor) AS VALOR FROM gastos WHERE tipo=5";
                        $resultado = mysqli_query($conexao, $soma);
                        $gastos = mysqli_fetch_assoc($resultado);
                        echo number_format((float)$gastos['VALOR'], 2, '.', ''); ?>],
          ['Outros.', <?php
                        require('conexao.php');
                        $soma = "SELECT SUM(valor) AS VALOR FROM gastos WHERE tipo=6";
                        $resultado = mysqli_query($conexao, $soma);
                        $gastos = mysqli_fetch_assoc($resultado);
                        echo number_format((float)$gastos['VALOR'], 2, '.', ''); ?>],
        ]);

        var options = {
          title: 'Controle de Gastos',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>



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