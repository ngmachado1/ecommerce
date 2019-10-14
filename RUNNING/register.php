
<?php
require_once 'src/Validators/validacion.php';

$email = "";
$nombre = "";
$apellido = "";
$usuario = "";
$sexo = "";
$avatar = "";
$password = "";
$passwordConfirm = "";

if ($_POST) {

  $email = trim($_POST ['email']);
  $nombre = trim($_POST ['nombre']);
  $apellido = trim($_POST ['apellido']);
  $usuario = trim($_POST ['usuario']);
  $pais = trim($_POST ['pais']);
  $sexo = ($_POST ['sexo']);
  $avatar = ($_FILES ['avatar']);
  $password = trim($_POST ['password']);
  $passwordConfirm = trim($_POST ['passwordConfirm']);


//HASHEO

$hash = password_hash (($_POST ['password']), PASSWORD_DEFAULT);

$resultado = password_verify (($_POST ['password']), $hash);

$hash1 = password_hash (($_POST ['passwordConfirm']), PASSWORD_DEFAULT);

//esto guarda el array que retorna la funcion validarRegistro
$erroresRegistro = validarRegistro();

}
$paises= [
" " =>  "Seleccione Pais",
"Arg" => "Argentina",
"Bra" => "Brasil",
"Col" => "Colombia",
"Chi" => "Chile"
]


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
<body>
   <?php require 'includes/nav.php'; ?>
<?php
echo "<br><br><br><br>";
if ( isset ($erroresRegistro) && count($erroresRegistro) > 0) : ?>
<ul>
  <?php foreach($erroresRegistro as $unError) : ?>
    <li> <p class="alerta"> <?= $unError; ?> </p> </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
<div class="row justify-content-center register-container">
<section id="register">
<h3 class="text-center titleLogin">REGISTRO</h3>
<div class="col-12 col pb-0">
<div class="form-register-container">
<form method="post" enctype="multipart/form-data" action="register.php">
    <!-- FOMULARIO EMAIL -->
    <p class="form-row form-row-wide">
      <label for="reg_email">
        Email
        <span class="required">*</span>
      </label>
      <input type="email" class="input-text" name="email" id="reg_email" autocomplete="email" value="<?= $email ?>" required>
    </p>
    <p class="alerta">
    </p>
    <!-- FOMULARIO NOMBRE -->
    <p class="form-row form-row-wide">
      <label for="reg_nombre">Nombre<span class="required">*</span>
      </label>
      <input type="text" class="input-text" name="nombre" id="reg_nombre" required autocomplete="nombre" value="<?= $nombre ?>">
    </p>
    <p class="alerta"></p>
    <!-- FOMULARIO APELLIDO -->
    <p class="form-row form-row-wide">
      <label for="reg_apellido">Apellido<span class="required">*</span>
      </label>
      <input type="text"class="input-text" name="apellido" id="reg_apellido" autocomplete="apellido" value="<?= $apellido ?>"required>
    </p>
    <p class="alerta"></p>
    <!-- FOMULARIO USUARIO -->
    <p class="form-row form-row-wide">
      <label for="reg_usuario">Usuario<span class="required">*</span>
      </label>
      <input type="text"class="input-text" name="usuario" id="reg_usuario" autocomplete="usuario" value="<?= $usuario ?>"required>
    </p>
    <p class="alerta"></p>
    <!-- FOMULARIO PAIS DE NACIMIENTO -->
    <p class="form-row form-row-wide">
    <label for="reg_pais">País de nacimiento<span class="required">*</span>
    </label>
    <select class="form-control"  name="pais" id="reg_pais">
    <?php foreach ($paises as $valor =>$pais) : ?>
    <?php if ($_POST ["$pais"] == $valor) : ?>
      <option value="<?=$valor?>" selected>
        <?=$pais?>
      </option>
    <?php else : ?>
      <option value="<?=$valor?>">
        <?=$pais?>
      </option>
    <?php endif; ?>
    <?php endforeach ?>
    </select>
    </p>
    <!-- FOMULARIO AVATAR -->
    <p class="form-row form-row-wide">
       <label for="reg_avatar">Seleccionar imagen<span class="required">*</span>
       </label>
    <input type="file" class="form-control-file" name="avatar" id="reg_avatar" required>
  </p>
      <!-- FOMULARIO SEXO -->
    <p class="form-row form-row-wide"> <label for="reg_sexo">Sexo<span class="required">*</span></label> <div class="custom-control custom-radio">
    <input type="radio" id="masculino" name="sexo" class="custom-control-input" value="ms" required>
    <label class="custom-control-label" for="masculino">Masculino</label>
     </div>
    <div class="custom-control custom-radio">
    <input type="radio" id="femenino" name="sexo" class="custom-control-input" value="fm" required>
    <label class="custom-control-label" for="femenino">Femenino</label>
              </div></p>
              <p class="alerta"></p>
      <!-- FOMULARIO CONTRASEÑA -->
    <p class="form-row form-row-wide">
      <label for="reg_password">Contraseña<span class="required">*</span>
      </label>
      <input type="password"class="input-text" name="password" id="reg_password" autocomplete="new-password" required>
      </p>
      <p class="alerta"></p>

            <!-- FOMULARIO CONFIRMAR CONTRASEÑA -->
      <p class="form-row form-row-wide"><label for="reg_passwordConfirm">Confirmar Contraseña&nbsp;<span class="required">*</span>
      </label>
      <input type="password" class="input-text" name="passwordConfirm" id="reg_passwordConfirm" autocomplete="passwordConfirm" required></p>
          <p class="alerta"></p>

          <!-- FOMULARIO ACEPTO TERMINOS -->
          <label class="">
            <input class="" name="terminos" type="checkbox" id="reg_terminos" value="forever" required><span>Acepto términos y condiciones</span><br>
            <a href="terminos-condiciones.php" target="_new"
             > Ver términos y condiciones</a>
          </label>
          <p class="alerta"></p>


          <div class="privacy-policy-text"></div>
          <p class="form-row"><button type="submit" class="btnSubmit" name="register" value="Register">Registrarme</button></p>
          </form>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
