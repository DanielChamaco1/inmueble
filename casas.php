<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Property | Properties</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">


  <!-- Font awesome -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- slick slider -->
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <!-- price picker slider -->
  <link rel="stylesheet" type="text/css" href="css/nouislider.css">
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
  <!-- Theme color -->
  <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">

  <!-- Main style sheet -->
  <link href="css/style.css" rel="stylesheet">


  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body class="aa-price-range">
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    79153911
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> terrabella@gmail.com
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
                  <a href="register.html" class="aa-register">Registro</a>
                  <a href="signin.html" class="aa-login">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <!-- Text based logo -->
          <a class="navbar-brand aa-logo" href="index.html"> Terra<span>Bella</span></a>
          <!-- Image based logo -->
          <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li class="active"><a href="index.html">HOGAR</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPIEDADES <span
                  class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="casas.html">CASAS</a></li>
                <li><a href="departamentos.html">DEPARTAMENTOS</a></li>
                <li><a href="terrenos.html">TERRENOS</a></li>
                <!-- <li><a href="properties-detail.html">PROPERTIES DETAIL</a></li>    -->
              </ul>
            </li>
            <li><a href="gallery.html">GALLERÍA</a></li>
            <!-- <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">BLOG <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">                
              <li><a href="blog-archive.html">BLOG</a></li>
              <li><a href="blog-single.html">BLOG DETAILS</a></li>                                            
            </ul>
          </li> -->
            <li><a href="contact.html">CONTÁCTANOS</a></li>
            <!-- <li><a href="404.html">404 PAGE</a></li> -->
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
  </section>
  <!-- End menu section -->

  <!-- Start Proerty header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>casas</h2>
            <ol class="breadcrumb">
              <!--  <li><a href="#">HOME</a></li>            
            <li class="active">PROPERTIES</li> -->
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Proerty header  -->

  <!-- Start Properties  -->
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="aa-properties-content">
            <!-- start properties content head -->
            <div class="aa-properties-content-head">
              <div class="aa-properties-content-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Ordenar por</label>
                  <select name="">
                    <option value="1" selected="Default">Nombre</option>
                    <option value="2">Nombre</option>
                    <option value="3">Precio</option>
                    <option value="4">Dia</option>
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Vista</label>
                  <select name="">
                    <option value="1" selected="4">4</option>
                    <option value="2">12</option>
                    <option value="3">24</option>
                  </select>
                </form>
              </div>
              <div class="aa-properties-content-head-right">
                <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <!-- Start properties content body -->
            <div class="aa-properties-content-body">
              <ul class="aa-properties-nav">
                <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="#">
                      <img alt="img" src="img/casas/casa1.1.jpg">
                    </a>
                    <div class="aa-tag for-sale">
                      En venta
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>4 Dormitorios</span>
                        <span>3 Baños</span>
                        <span>2 Garajes</span>
                        <span>370.00 m<sup>2</sup></span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Casa en venta, Urbanización San Alberto</a></h3>
                        <p>Linda casa en venta, en barrio privado, hermosa vista, soleada y con todas las comodidades</p>
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $415000
                        </span>
                        <a class="aa-secondary-btn" href="#">Ver detalles</a>
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="#">
                      <img alt="img" src="img/casas/casas1.2.jpg">
                    </a>
                    <div class="aa-tag for-sale">
                      En venta
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>4 Dormitorios</span>
                        <span>3 Baños</span>
                        <span>3 Garajes</span>
                        <span>525.00 m<sup>2</sup></span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Casa en venta Jardines del Sur</a></h3>
                        <p>Hermosa casa en cuatro plantas en venta, con todas las comunidades y servicios, soleada y segura. Dentro de condominio cerrado. </p>
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $760000
                        </span>
                        <a class="aa-secondary-btn" href="#">Ver detalles</a>
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="#">
                      <img alt="img" src="img/casas/casa1.3.jpg">
                    </a>
                    <div class="aa-tag for-sale">
                      En Venta
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>4 Dormitorios</span>
                        <span>3 Baños</span>
                        <span>3 Garajes</span>
                        <span>485.00 m<sup>2</sup></span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Casa en Venta, calle 45 de Achumani</a></h3>
                        <p>Casa en venta con todas las comodidaes y servicios, soleada y segura, papeles al día.</p>
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $435000
                        </span>
                        <a class="aa-secondary-btn" href="#">Ver detalles</a>
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="#">
                      <img alt="img" src="img/casas/casa1.4.jpg">
                    </a>
                    <div class="aa-tag for-rent">
                      En Alquiler
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>3 Dormitorios</span>
                        <span>3 Baños</span>
                        <span>1 Garaje</span>
                        <span>390.00 m<sup>2</sup></span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Elegante y soleada casa en alquiler, La Florida</a></h3>
                        <p>Casa bien soleada y con la mejor vista de la zona sur de La Paz. Cuenta con servicio de seguridad que se encuentra dentro de la urbanización de La Escondida. </p>
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $2500 mensuales
                        </span>
                        <a class="aa-secondary-btn" href="#">Ver detalles</a>
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="#">
                      <img alt="img" src="img/casas/casa1.5.jpg">
                    </a>
                    <div class="aa-tag for-rent">
                      En Alquiler
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>4 Dormitorios</span>
                        <span>3 Baños</span>
                        <span>2 Garajes</span>
                        <span>472.00 m<sup>2</sup></span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Casa en Alquiler, Valle de Aranjuez</a></h3>
                        <p>Casa de lujo en alquiler, estilo clásico, jardín perimetras, ubicado en plena esquina. </p>
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $2400 mensuales
                        </span>
                        <a class="aa-secondary-btn" href="#">Ver detalles</a>
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="#">
                      <img alt="img" src="img/casas/casa1.6.jpg">
                    </a>
                    <div class="aa-tag for-rent">
                      En Alquiler
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>3 Dormitorios</span>
                        <span>3 Baños</span>
                        <span>3 Garajes</span>
                        <span>350.00 m<sup>2</sup></span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Casa en alquiler, Achumani</a></h3>
                        <p>Excelente ubicación, cuenta con 7 ambientes. </p>
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $2200 mensuales
                        </span>
                        <a class="aa-secondary-btn" href="#">Ver detalles</a>
                      </div>
                    </div>
                  </article>
                </li>
              </ul>
            </div>
            <!-- Start properties content bottom -->
            <div class="aa-properties-content-bottom">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <!-- Start properties sidebar -->
        <div class="col-md-4">
          <aside class="aa-properties-sidebar">
            <!-- Start Single properties sidebar -->
            <div class="aa-properties-single-sidebar">
              <h3>Propiedades de busqueda</h3>
              <form action="">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location">
                </div>
                <div class="aa-single-advance-search">
                  <select id="" name="">
                    <option selected="" value="0">Categoria</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
                <div class="aa-single-advance-search">
                  <select id="" name="">
                    <option selected="" value="0">Tipo</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
                <div class="aa-single-advance-search">
                  <select id="" name="">
                    <option selected="" value="0">Tipo</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
                <div class="aa-single-filter-search">
                  <span>AREA (SQ)</span>
                  <span>FROM</span>
                  <span id="skip-value-lower" class="example-val">30.00</span>
                  <span>TO</span>
                  <span id="skip-value-upper" class="example-val">100.00</span>
                  <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>
                </div>
                <div class="aa-single-filter-search">
                  <span>PRICE ($)</span>
                  <span>FROM</span>
                  <span id="skip-value-lower2" class="example-val">30.00</span>
                  <span>TO</span>
                  <span id="skip-value-upper2" class="example-val">100.00</span>
                  <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>
                </div>
                <div class="aa-single-advance-search">
                  <input type="submit" value="Search" class="aa-search-btn">
                </div>
              </form>
            </div>
            <!-- Start Single properties sidebar -->
            
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- / Properties  -->

  <!-- Footer -->
  <footer id="aa-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-area">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="aa-footer-left">
                  <p>Designed by <a rel="nofollow" href="http://www.markups.io/">MarkUps.io</a></p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="aa-footer-middle">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="aa-footer-right">
                  <a href="#">Hogar</a>
                <a href="#">Apoyo</a>
                <a href="#">Licencia</a>
                <a href="#">Preguntas Frecuentes</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / Footer -->



  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script>

</body>

</html>