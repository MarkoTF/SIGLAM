<?php

class Template
{
  public $ruta = '';
  public $url;

  /*
  * Metodo constructor de la clase Template
  */
  public function __construct($ruta)
  {
    $this->ruta = $ruta;
    $this->url = $_SERVER['REQUEST_URI'];
  }

  /*
  * Metodo constructor del encabezado de la pagina, con las referencias a los archivos css
  */
  public function getHead()
  {
    $head = '<!DOCTYPE html>
                <html>
                <head>
                <link  rel="icon"   href="dist/img/logo.png" type="image/png" />
                  <meta charset="utf-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=edge">
                  <title>SIGLAM</title>
                  <!-- Tell the browser to be responsive to screen width -->
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <!-- Font Awesome -->
                  <link rel="stylesheet" href="'.$this->ruta.'plugins/fontawesome-free/css/all.min.css">
                  <!-- Ionicons -->
                  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
                  <!-- overlayScrollbars -->
                  <link rel="stylesheet" href="'.$this->ruta.'dist/css/adminlte.min.css">
                  <!-- Google Font: Source Sans Pro -->
                  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
                </head>';
    return $head;
  }

  /*
  * Metodo constructor del menu lateral
  */
  public function menuLateral()
  {

    $menuLateral = '  <aside class="main-sidebar sidebar-dark-primary elevation-4">
                        <!-- Brand Logo -->
                        <a href="'.$this->ruta.'inicio.php" class="brand-link">
                          <img src="'.$this->ruta.'dist/img/logo.png"
                               alt="AdminLTE Logo"
                               class="brand-image elevation"
                               style="opacity: 1">
                          <span class="brand-text font-weight-light">SIGLAM</span>
                        </a>
                        <!-- Sidebar -->
                        <div class="sidebar">
                          <!-- Sidebar user (optional) -->
                          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                              <img src="'.$this->ruta.'dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                            </div>
                            <div class="info">
                              <a href="#" class="d-block">Administrador</a>
                            </div>
                          </div>
                          <!-- Sidebar Menu -->
                          <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                              <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
 
                              <li class="nav-item">
                                <a href="inicio.php" class="nav-link">
                                  <i class="nav-icon fas fa-th"></i>
                                  <p>
                                    Incio
                                    <span class="right badge badge-danger">New</span>
                                  </p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="alumnos.php" class="nav-link">
                                  <i class="far fa-user nav-icon"></i>
                                  <p>Gestionar alumnos</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="herramientas.php" class="nav-link">
                                  <i class="fas fa-tools nav-icon"></i>
                                  <p>Gestionar Herramientas</p>
                                </a>
                              </li>
                            </ul>
                          </nav>
                          <!-- /.sidebar-menu -->
                        </div>
                        <!-- /.sidebar -->
                      </aside>';
    return $menuLateral;
  }

  /*
  * Metodo constructor del menu usuario
  */
  public function menuUsuario()
  {
    $menuUsuario = '  <!-- Navbar -->
                        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                          <!-- Left navbar links -->
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                            </li>
                          </ul>
                          <!-- SEARCH FORM -->
                       <!--   <form class="form-inline ml-3">
                            <div class="input-group input-group-sm">
                              <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
                              <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                  <i class="fas fa-search"></i>
                                </button>
                              </div>
                            </div>
                          </form> -->
                          <!-- Right navbar links -->
                          <ul class="navbar-nav ml-auto">
                            <!-- Messages Dropdown Menu -->
                            <li class="nav-item dropdown"> 
                                  <button onclick="confirmar()" class="btn btn-danger btn-block" >Cerrar sesión</button>
                            </li>
                            <!-- Notifications Dropdown Menu -->
                            <li class="nav-item dropdown">
                            </li>
                          </ul>
                        </nav>';
            return $menuUsuario;
  }

  /*
  * Metodo constructor de la parte superior de la pagina
  */
  public function bodyTop()
  {
    $bodyTop =  $this->getHead().'
            <body class="hold-transition sidebar-mini">
              <!-- Site wrapper -->
              <div class="wrapper">
                '.$this->menuUsuario().'
                      '.$this->menuLateral().'
                        <div class="content-wrapper">';
    echo $bodyTop;
  }

  /*
  * Metodo constructor de la parte inferior de la pagina
  */
  public function bodyButton()
  {
    $bodyButton = '</div>
                    <footer class="main-footer">
                        <div class="float-right d-none d-sm-block">
                          <small>Ingeniería en Sistemas Computacionales</small>
                        </div>
                      <small><a href="http://www.itsmotul.edu.mx/" target="_black"><b>TecNM - Campus Motul</b></a>.</small>
                    </footer>
                    <!-- Control Sidebar -->
                      <aside class="control-sidebar control-sidebar-dark">
                          <!-- Control sidebar content goes here -->
                        </aside>
                  </div>
                  '.$this->getFooter();
    echo $bodyButton;
  }

  /*
  * Metodo constructor del pie de la pagina, con las referencias a los archivos javascript
  */
  public function getFooter()
  {
    $footer = '<script src="'.$this->ruta.'plugins/jquery/jquery.min.js"></script>
                <!-- Bootstrap 4 -->
                <script src="'.$this->ruta.'plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- AdminLTE App -->
                <script src="'.$this->ruta.'dist/js/adminlte.min.js"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="'.$this->ruta.'dist/js/demo.js"></script>
              </body>
            </html>';
    return $footer;
  }

  /*
  * Metodo destructor de la clase Template
  */
  public function __destruct()
  {
    unset($this->ruta);
    unset($this->url);
  }
}


?>
  
<script src="conn.js"></script>
<link rel="stylesheet" type="text/css" href="./plugins/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="./plugins/alertifyjs/css/themes/default.css">  
  <script src="plugins/alertifyjs/alertify.js"></script>
