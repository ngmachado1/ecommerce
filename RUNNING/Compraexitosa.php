<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Kanit|Lacquer|Lexend+Deca|Monoton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e3174186bf.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/fullscreen.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>HOME</title>
</head>
<body>
  <?php

   require 'includes/nav.php'; ?>
<div class="compra">
  
<div class="container">
<section class="Compraexitosa fondo-parrafo">
    <div class="row">
      <div class="col-12 col-md-6">
        <article>
          <h2>Felicitaciones!!!</h2>
        <p>
          Su compra se realizo exitosamente!
        </p>
        <p class="form-row"><button type="submit" class="btnSubmit" name="comprar" value="home"><a href="home.php">HOME</a></button></p>
        </article>
      </div>
      <div class="col-12 col-md-6">
  <div class="img-container">
    <img class="logotipo-banner" src="imgs/logotipo4.png" alt="logotipo">
  </div>
      </div>
    </div>
</section>
  </div>
</div>

  <?php require 'includes/footer.php'; ?>

</body>
</html>
