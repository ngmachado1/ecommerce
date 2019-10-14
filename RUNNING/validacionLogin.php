<?php

function validarRegistrologin(){
  $errores = [];


  $email = trim($_POST ['email']);
  $password = trim($_POST ['password']);



  if (empty($email)){
    $errores ['errorEmail'] = 'El email es obligatorio';
  }

  if (empty($password)){
    $errores ['errorPassword'] = 'El Password es obligatorio';
  }


  return $errores;
}

 ?>
