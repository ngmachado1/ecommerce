<?php


function validarRegistro(){
  $errores = [];


  $email = trim($_POST ['email']);
  $nombre = trim($_POST ['nombre']);
  $apellido = trim($_POST ['apellido']);
  $usuario = trim($_POST ['usuario']);
  $pais = trim($_POST ['pais']);
  $sexo = trim($_POST ['sexo']);
  $avatar = ($_FILES ['avatar']);
  $password = trim($_POST ['password']);
  $passwordConfirm = trim($_POST ['passwordConfirm']);


  if (empty($email)){
    $errores ['errorEmail'] = 'El email es obligatorio';
  }

  if (empty($nombre)){
    $errores ['errorNombre'] = 'El nombre es obligatorio';
  }
  if (empty($apellido)){
    $errores ['errorApellido'] = 'El apellido es obligatorio';
  }
  if (empty($usuario)){
    $errores ['errorUsuario'] = 'El usuario es obligatorio';
  }
  if (empty($pais)){
    $errores ['errorPais'] = 'El pais es obligatorio';
  }
  if (empty($sexo)){
    $errores ['errorSexo'] = 'El sexo es obligatorio';
  }
  //VALIDACION DE AVATAR
  if (empty($avatar)){
    $errores ['errorAvatar'] = 'La imagen es obligatoria';
  }
  //FILES
  if ($_FILES['avatar'] ["error"] != 0) {
    $errores ['errorAvatar'] = 'Error al cargar imagen';
  }
  else{
    $ext = pathinfo($_FILES ['avatar'] ["name"], PATHINFO_EXTENSION);
    if ($ext != "jpeg" && $ext != "jpg" && $ext != "png"){
      $errores ["avatar"] = "La imagen debe ser .jpg, .jpeg o .png";
    }
    else {
      move_uploaded_file ($_FILES ['avatar'] ['tmp_name'], "D:/xampp/htdocs/RUNNING/archivo/" . trim($_POST ['usuario']) . "." . $ext);
    }
  }
  // var_dump ($_FILES);

  if (empty($password)){
    $errores ['errorPassword'] = 'El Password es obligatorio';
  }

  if ($_POST['password'] != $_POST['passwordConfirm']) {
    $errores ['errorPasswordConfirm'] = 'La contraseña de verificación no coincide.';
}
  return $errores;

//---------------------------------------------------------------------------------//

//validacion Exitosa
  if (!count($errores)){

  $hash = password_hash (($_POST ['password']), PASSWORD_DEFAULT);

  $resultado = password_verify (($_POST ['password']), $hash);

  $hash1 = password_hash (($_POST ['passwordConfirm']), PASSWORD_DEFAULT);
}
}


  //agregar $_POST a Array

$agregarUsuario = [];

$agregarUsuario [] = $_POST;


//convertir Array a Json

$json = json_encode ($agregarUsuario);

file_put_contents("D:/xampp/htdocs/RUNNING/src/Validators/archivo.json", $json);

//recuperar archivo Json

$archivo = file_get_contents ("D:/xampp/htdocs/RUNNING/src/Validators/archivo.json");

$agregarUsuario = json_decode ($archivo, true);

//---------------------------------------------------------//

// Redirigir pagina si esta todo bien //
//validacion Exitosa


// if ($_POST && (!count($errores)) {
//   header ("Location: home.php");
// }
 ?>
