
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0  >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,500">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <header class="section page-header"> 
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="170px" data-xl-stick-up-offset="170px" data-xxl-stick-up-offset="170px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/logo-default-672x102.png" alt="" width="336" height="51"/></a>
                  </div>
                </div>
                <div class="rd-navbar-info rd-navbar-collapse">
                  <article class="info-modern">
                    <div class="info-modern-icon fa-phone"></div><a class="info-modern-link" href="#">2644401032</a>
                  </article>
                  <p>Contacto</p>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                  <ul class="rd-navbar-nav">
                    <li ><a class="rd-nav-link" href="index.php">INICIO</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="acercade.php">EQUIPO</a>
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">IIEE</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">PGB</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">IVCC</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">IPC</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">EPH</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">OTROS EQUIPOS</a>
                          <ul class="rd-menu rd-navbar-dropdown">
                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Business Consulting</a>
                            </li>
                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Cash Management</a>
                            </li>
                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Tax Advisory</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="informacion.php">Informacion</a>
                    </li>
                    <li class="rd-nav-item active" class="rd-nav-item"><a class="rd-nav-link" href="contactos.php">Contactos</a>
                    </li>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="login.php">Iniciar Sesion</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="section section-md">
        <div class="container">
          <h3>Ingrese sus datos</h3>
          <!--RD Mailform-->

          
          <form action="insertar.php" method="POST">
            <div class="row row-30">
              <div class="col-md-4">
                <div class="form-wrap">
                  <label class="form-label" for="contact-name">Nombre:</label>
                  <input class="form-input" id="contact-name" type="text" name="nombre" data-constraints="@Required">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <label class="form-label" for="contact-phone">Telefono:</label>
                  <input class="form-input" id="contact-phone" type="text" name="telefono" data-constraints="@Required @PhoneNumber">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <label class="form-label" for="contact-email">Email:</label>
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message">Mensaje:</label>
                  <textarea class="form-input" id="contact-message" name="mensaje" data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-primary">
              <!-- <button class="button button-primary" type="submit">Enviar</button> -->
          </form>
        </div>
      </section> 
      <!--Google Map-->
      <section class="section">
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#76aee3&quot;},{&quot;saturation&quot;:38},{&quot;lightness&quot;:-11},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#8dc749&quot;},{&quot;saturation&quot;:-47},{&quot;lightness&quot;:-17},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#c6e3a4&quot;},{&quot;saturation&quot;:17},{&quot;lightness&quot;:-2},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#cccccc&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:13},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;administrative.land_parcel&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#5f5855&quot;},{&quot;saturation&quot;:6},{&quot;lightness&quot;:-31},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ffffff&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[]}]">
          <div class="google-map"></div>
          <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
          </ul>
        </div>
      </section>
      <!--Contacts-->
      <section class="section section-lg bg-gray-700">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-4">
              <div class="row row-30">
                <div class="col-sm-6 col-lg-12 wow fadeInRight">
                  <article class="info-classic align-items-center">
                    <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                      <div class="unit-left">
                        <div class="info-classic-icon fa-map-marker"></div>
                      </div>
                      <div class="unit-body"><a class="info-classic-link" href="#">4578 Marmora Road,Glasgow D04 89GR</a></div>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6 col-lg-12 wow fadeInRight" data-wow-delay=".05s">
                  <article class="info-classic align-items-center">
                    <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                      <div class="unit-left">
                        <div class="info-classic-icon fa-envelope"></div>
                      </div>
                      <div class="unit-body"><a class="info-classic-link" href="mailto:#">info@demolink.org</a></div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row row-30">
                <div class="col-sm-6 col-lg-12 wow fadeInRight" data-wow-delay=".1s">
                  <article class="info-classic align-items-center info-classic-2">
                    <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                      <div class="unit-left">
                        <div class="info-classic-icon fa-phone"></div>
                      </div>
                      <div class="unit-body"><a class="info-classic-link" href="tel:#">800-2345-6789</a></div>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6 col-lg-12 wow fadeInRight">
                  <article class="info-classic align-items-center info-classic-2">
                    <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                      <div class="unit-left">
                        <div class="info-classic-icon fa-fax"></div>
                      </div>
                      <div class="unit-body"><a class="info-classic-link" href="tel:#">800-2345-6790</a></div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row row-30">
                <div class="col-sm-6 col-lg-12 wow fadeInRight" data-wow-delay=".05s">
                  <article class="info-classic align-items-center">
                    <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                      <div class="unit-left">
                        <div class="info-classic-icon fa-facebook"></div>
                      </div>
                      <div class="unit-body"><a class="info-classic-link" href="#">Follow on Facebook</a></div>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6 col-lg-12 wow fadeInRight" data-wow-delay=".1s">
                  <article class="info-classic align-items-center">
                    <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                      <div class="unit-left">
                        <div class="info-classic-icon fa-twitter"></div>
                      </div>
                      <div class="unit-body"><a class="info-classic-link" href="#">Follow on Twitter</a></div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Mailform-->

      <footer class="section footer-classic">
        <div class="container">
     
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>