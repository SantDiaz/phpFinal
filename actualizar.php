<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM form WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
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
                    <div class="info-modern-icon fa-phone"></div><a class="info-modern-link" href="#">0800-888</a>
                  </article>
                  <p>Contactos</p>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="inicio.php">INICIO</a>
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
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contactos.php">Contactos</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
     
      <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="email" placeholder="Email" value="<?php echo $row['email']  ?>">
                                <input type="text" class="form-control mb-3" name="mensaje" placeholder="Mensaje" value="<?php echo $row['mensaje']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>