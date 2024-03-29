<?php session_start();
require 'includes/nav.php';
require 'validacionLogin.php';

if (count($_POST)) {
//validacion
  $email = trim($_POST ['email']);
  $password = trim($_POST ['password']);

//esto guarda el array que retorna la funcion validarRegistro
$erroresRegistro = validarRegistrologin();


//redirigir

header("Location: home.php"); exit;
}

 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles-login.css">
  <title>HOME</title>
</head>
<body class="login">
  <?php
  if ( isset ($erroresRegistro) && count($erroresRegistro) > 0) : ?>
  <ul>
    <?php foreach($erroresRegistro as $unError) : ?>
      <p class="alerta"><li> <?= $unError; ?> </li></p>
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>
<div class="row justify-content-center login-container">
<section id="login">
<h3 class="text-center titleLogin">LOGIN</h3>
 <div class="col-12 col pb-0">
  <div class="form-login-container">
    <form method="post" enctype="multipart/form-data" action="login.php">
    <!-- FOMULARIO EMAIL -->
    <p class="form-row form-row-wide"> <label for="log_email">Email<span class="required">*</span></label> <input type="email"
      class="input-text" name="email" id="log_email" autocomplete="email" value=""></p>
    <p class="alerta"></p>
      <!-- FOMULARIO CONTRASEÑA -->
    <p class="form-row form-row-wide">
      <label for="log_password">Contraseña<span class="required">*</span>
      </label>
    <input type="password"class="input-text" name="password" id="log_password" autocomplete="new-password"></p>
    <p class="alerta"> </p>
    <div class="privacy-policy-text"></div>
    <p class="form-row buttons"><button type="submit" class="btnSubmit" name="login" value="Login">Ingresar</button>
    <a class="btn btnRegister" href="register.php" role="button" name="login">Registrarse</a></p>
    </form>
      </h3>
      </div>
       </div>
         </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
