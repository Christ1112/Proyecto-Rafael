<?php require_once "config/conexion.php";
require_once "config/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./">Proyecto Erick & Chris</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Facturacion</h1>
                <p class="lead fw-normal text-white-50 mb-0">Tu Factura.</p>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <br><h2><center>Facturación</center></h2><br><br>
            <?php
echo            "<div class='row'>";
echo              "<div class='col-8 col-sm-6' style='background-color: rgb(204, 204, 204);'>";
echo                "Proveedor:<br>";
echo                "<br>";
echo                "<br>E&C S.a. de C.v.";
echo                "<br>C/ Mallorca, 88";
echo                "<br>08004";
echo                "<br>Madrid";
echo                "<br>NIF M12345678";
echo                "<br>España";
echo                "<br>123 456 7890";
echo                "<br>facturas@grupoec.com";
echo                "<br>www.e&c.com";
echo                "<br>";
echo                "<br><b>Factura No. &nbsp;&nbsp;A2022-36</b>";
$date_now = date('d-m-Y g:ia');
$date_future = strtotime('+30 day', strtotime($date_now));
$date_future = date('d-m-Y g:ia', $date_future);
echo                "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Emitida: ".$date_now;
echo                "<br>Vencimiento: ".$date_future;
echo              "</div>";
echo              "<div class='col-4 col-sm-6' style='background-color: rgb(204, 204, 204);'>";
echo                "Cliente:<br>
                <br>
                <br>Nombre:
                <br>Calle:
                <br>Ciudad:
                <br>Pais:
                <br>
                <br>NIF 94244892T
              </div>";
echo              "<div class='col-4 col-sm-4' style='background-color: rgb(204, 204, 204);'>";
echo                "<br><br>Concepto:";
echo              "</div>";
echo              "<div class='col-4 col-sm-2' style='background-color: rgb(204, 204, 204);'>";
echo                "<br><br>Base Imponible:";
echo              "</div>";
echo              "<div class='col-4 col-sm-2' style='background-color: rgb(204, 204, 204);'>";
echo                "<br><br>IVA";
echo              "</div>";
echo              "<div class='col-4 col-sm-2' style='background-color: rgb(204, 204, 204);'>";
echo                "<br><br>IRPF
              </div>";
echo              "<div class='col-4 col-sm-2' style='background-color: rgb(204, 204, 204);'>";
echo                "<br><br>Total
              </div>";
echo              "<div class='col-4 col-sm-7' style='background-color: rgb(204, 204, 204);'>";
echo              "<br><br>
              </div>";
echo              "<div class='col-4 col-sm-5' style='background-color: rgb(204, 204, 204);'>";
echo              "<br><br><br>Base Imponible:
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;IVA:
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;IRPF:
              <br><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;Total:
              </div>";
echo              "<div class='col-4 col-sm-12' style='background-color: rgb(204, 204, 204);''>";
echo              "Notas:
              <br>¡Gracias por confiar en nuestra empresa!
              <br>Metodo de pago:
              <br>Cuenta Bancaria:
            </div>
          </div>
        </div>
      </div>";
      ?><br><br>
      <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; E&C 2022</p>
        </div>
    </footer>
</body>
</html>