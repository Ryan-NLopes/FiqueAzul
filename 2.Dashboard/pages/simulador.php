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
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <title>
    FNA - Simuludor
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
</head>

<body class="g-sidenav-show  bg-gray-100">
  <!-- End Navbar -->
  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">SIMULADOR</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-5 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>SIMULADOR</h5>
            </div>
            <div class="card-body">
              <form method="POST" action="">
                <div class="mb-3">
                  <label>Tipo de Juros</label>
                  <select name="tipo" class="form-control">
                    <option value=1>Juros Simples</option>
                    <option value=2>Juros Compostos</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label>Qual o valor você quer investir? </label>
                  <input type="text" name="valor" class="form-control" placeholder="R$" aria-label="Email" aria-describedby="email-addon">
                </div>
                <div class="mb-3">
                  <label>Por quanto tempo você quer investir (meses)?</label>
                  <input type="text" name="tempo" class="form-control" placeholder="Mês" aria-label="Password" aria-describedby="password-addon">
                </div>
                <div class="mb-3">
                  <label>Qual a taxa (%)?</label>
                  <input type="number" name="porcentagemJuros" class="form-control" placeholder="1% a.m" aria-label="Password" aria-describedby="password-addon">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">Simular</button>
                </div>
                <div class="text-center">
                  <a href="dashboard.php" class="btn bg-gradient-dark w-100 my-4 mb-2">Voltar</a>
                </div>
              </form>

              <?php
              if (isset($_POST['tipo']) == NULL || $_POST['valor'] == NULL || $_POST['tempo'] == NULL || $_POST['porcentagemJuros'] == NULL) {
                echo "Campos precisam ser preenchidos.";
              } else {
                $tipo = $_POST['tipo'];
                $valor = $_POST['valor'];
                $tempo = $_POST['tempo'];
                $porcentagemJuros = $_POST['porcentagemJuros'];

                if ($tipo == 1) {
                  $tipo == "Juros Simples";
                  $valorJuros = $valor * $tempo * ($porcentagemJuros / 100);
                  $valorMontante = $valorJuros + $valor;
                  echo "<p><h3>O tipo do Juros é: Simples</h3></p>";
                  echo "<p><h3>O Valor investido foi R$ " . $valor . ".</h3></p>";
                  echo "<p><h3>Meses Investidos " . $tempo . ".</h3></p>";
                  echo "<p><h3>Juros de R$ " . $valorJuros . ".</h3></p>";
                  echo "<p><h3>Montante de R$ " . $valorMontante . ".</h3></p>";
                } else if ($tipo == 2) {
                  $taxaValor = 1 + ($porcentagemJuros / 100);
                  $valorElevadoTempo = pow($taxaValor, $tempo);
                  $valorMontante = $valor * $valorElevadoTempo;
                  echo "<p><h3>O tipo do Juros é: Compostos</h3></p>";
                  echo "<p><h3>O Valor investido foi R$ " . $valor . ".</h3></p>";
                  echo "<p><h3>Meses Investidos  " . $tempo . ".</h3></p>";
                  echo "<p><h3>Juros de R$ " . $valorMontante - $valor . ".</h3></p>";
                  echo "<p><h3>Montante de R$ " . number_format((float)$valorMontante, 2, ',', '.') . ".</h3></p>";
                }
              }
              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Soft by Unastech.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
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