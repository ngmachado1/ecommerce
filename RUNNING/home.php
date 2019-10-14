
<?php session_start();


?>
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

   require 'includes/nav.php';
   require 'includes/banner.php'
  ?>
  <section class="carrousel-productos">
    <div class="carousel" data-flickity='{ "fullscreen": true, "lazyLoad": 2, "wrapAround": true, "autoPlay": 2500  }'>
        <img class="carousel-image"
          data-flickity-lazyload="imgs/eCommerce/hombre/eCommerce8.png" />
        <img class="carousel-image"
          data-flickity-lazyload="imgs/eCommerce/hombre/eCommerce9.png" />
        <img class="carousel-image"
          data-flickity-lazyload="imgs/eCommerce/hombre/eCommerce11.png" />
        <img class="carousel-image"
          data-flickity-lazyload="imgs/eCommerce/hombre/eCommerce13.png" />
        <img class="carousel-image"
          data-flickity-lazyload="imgs/eCommerce/hombre/eCommerce15.png" />
        <img class="carousel-image"
          data-flickity-lazyload="imgs/eCommerce/hombre/eCommerce17.png" />
        <img class="carousel-image"
          data-flickity-lazyload="imgs/eCommerce/hombre/eCommerce18.png" />
        <img class="carousel-image"
          data-flickity-lazyload="imgs/eCommerce/mujer/eCommerce1.png" />
        <img class="carousel-image"
          data-flickity-lazyload="imgs/eCommerce/mujer/eCommerce9.png" />
        <img class="carousel-image"
          data-flickity-lazyload="imgs/eCommerce/mujer/eCommerce21.png" />
        <img class="carousel-image"
          data-flickity-lazyload="imgs/eCommerce/mujer/eCommerce16.png" />
        <img class="carousel-image"
          data-flickity-lazyload="imgs/eCommerce/mujer/eCommerce18.png" />
    </div>
  </section>

<div class="container">
<section class="about-us fondo-parrafo">
    <div class="row">
      <div class="col-12 col-md-6">
        <article>
          <h2>Nosotros</h2>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
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

  <section class="categorias" id="categorias">
  <div class="row">
    <div class="col-12 col-md-4">
      <article class="producto">
        <a title="Mujer" href="mujer.php">
          <div class="imagen-container relative">
          <div class="collection-title">
            <h2>Mujer</h2>
            <h5>Ver más</h5>
          </div>
          <div class="div-img">
          <img src="imgs/eCommerce/mujer/eCommerce50.png" alt=""  class="w-100"/>
          </div>
        </div>
        </a>
      </article>
          </div>
          <div class="col-12 col-md-4">
            <article class="producto">
                <a title="Hombre" href="hombre.php">
              <div class="imagen-container relative">
                <div class="collection-title">
                  <h2>Hombre</h2>
                  <h5>Ver más</h5>
                </div>
                <img src="imgs/eCommerce/hombre/eCommerce50.png" alt=""  class="w-100 " /></a>
              </div>
            </article>
          </div>
          <div class="col-12 col-md-4">
            <article class="producto">
              <a title="Niños" href="ninio.php">
              <div class="imagen-container relative">
                <div class="collection-title">
                  <h2>Niños</h2>
                  <h5>Ver más</h5>
                </div>
                  <img src="imgs/eCommerce/ninios/eCommerce35.png" alt=""   class="w-100"/></a>
              </div>
            </article>
          </div>
        </div>
      </section>

<div class="container">
      <section class="sucursales fondo-parrafo">
        <div class="row">
          <div class="col-12 col-md-6">
            <article class="google-maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.4384290784933!2d-65.21029088476287!3d-26.826004183165026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94225c169be3c74b%3A0x2e64244ce4ed7940!2sC%C3%B3rdoba%20797%2C%20T4000DGO%20San%20Miguel%20de%20Tucum%C3%A1n%2C%20Tucum%C3%A1n!5e0!3m2!1ses-419!2sar!4v1569429426753!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </article>
          </div>
          <div class="col-12 col-md-6">
            <article class="">
              <h2>Sucursales</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            </article>
          </div>
        </div>
        </section>
        </div>

        <!-- Esto lo que copie de otra pagina-->
      <section class="newsletter">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
      <div class="fondo-parrafo">
       <form action="home.php" method="post" id="subscribe-blog">
         <p>¡Suscribite y obtené $300 para tu primera compra!
          Recibí nuestras promociones exclusivas y enterate de todas las novedades del mundo RUNNING
         </P>
         <p>Suscribite a nuestro newsletter</p>
         <p>
           <input class="input-text" type="text" name="email" style="width: 95%; padding: 1px 2px" placeholder="Ingresá tu e-mail" value="" id="subscribe-field">
         </p>
         <p>
           <input type="submit" value="Suscribir" class="btnSubmit">
         </p>
       </form>
      </div>
    </div>
  </div>
</section>


<?php require 'includes/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>
<script src="js/fullscreen.js"></script>
</body>

</html>
