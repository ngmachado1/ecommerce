<?php
$talles= [
" " =>  "Seleccione su talle",
"37" => "37",
"38" => "38",
"39" => "39",
"40" => "40",
"41" => "41",
"42" => "42",
"43" => "43"
];

$Colores= [
" " =>  "Seleccione su color",
"red" => "rojo",
"blue" => "azul",
"black" => "negro",
"white" => "blanco",
"green" => "verde"
];

 ?>






<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Kanit|Lacquer|Lexend+Deca|Monoton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles-colections.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>DETALLE</title>
  </head>
  <body>
    <?php
     require 'includes/nav.php';
    ?>
    <div class="infoProducto">

    <div class="container">
          <section class="infoProducto fondo-parrafo">
            <div class="row">
              <div class="col-12 col-md-6">
                <article class="imagenInfo">
                  <img src="imgs/eCommerce/mujer/eCommerce1.png" alt="" class="info-producto">
                </article>
              </div>
              <div class="col-12 col-md-6">
                <article class="">
                  <h2>RUNNING</h2>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <form class="" action="index.html" method="post">
                  <p>
                  <label for="talle">TALLE<span class="required"></span>
                  </label>
                  <select class="form-control"  name="talle" id="reg_pais">
                  <?php foreach ($talles as $valor =>$talle) : ?>
                  <?php if ($_POST ["$talle"] == $valor) : ?>
                    <option value="<?=$valor?>" selected>
                      <?=$talle?>
                    </option>
                  <?php else : ?>
                    <option value="<?=$valor?>">
                      <?=$talle?>
                    </option>
                  <?php endif; ?>
                  <?php endforeach ?>
                  </select>
                  </p>
                  <p>
                  <label for="talle">COLOR<span class="required"></span>
                  </label>
                  <select class="form-control"  name="talle" id="reg_pais">
                  <?php foreach ($Colores as $valor =>$color) : ?>
                  <?php if ($_POST ["$talle"] == $valor) : ?>
                    <option value="<?=$valor?>" selected>
                      <?=$color?>
                    </option>
                  <?php else : ?>
                    <option value="<?=$valor?>">
                      <?=$color?>
                    </option>
                  <?php endif; ?>
                  <?php endforeach ?>
                  </select>
                  </p>
                  <p class="form-row"><button type="submit" class="btnSubmit" name="comprar" value="comprar"><a href="Compraexitosa.php">Comprar</a></button></p>
                </form>
                </article>
              </div>
            </div>
            </section>
      </div>
    </div>

      <?php require 'includes/footer.php'; ?>

  </body>
</html>
