<?php

class Template
{
	public $ruta = '';
	public $url;

	/*
	*	Metodo constructor de la clase Template
	*/
	public function __construct($ruta)
	{
		$this->ruta = $ruta;
		$this->url = $_SERVER['REQUEST_URI'];
	}

	/*
	*	Metodo constructor del encabezado de la pagina, con las referencias a los archivos css
	*/
	public function getHead()
	{
		$head = '<!DOCTYPE html>
                <html>
                <head>
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
                        <a href="'.$this->ruta.'index.php" class="brand-link">
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
                              <a href="#" class="d-block">Alexander Pierce</a>
                            </div>
                          </div>

                          <!-- Sidebar Menu -->
                          <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                              <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-tachometer-alt"></i>
                                  <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                    <a href="index.php" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Dashboard v1</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Dashboard v2</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Dashboard v3</p>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-th"></i>
                                  <p>
                                    Widgets
                                    <span class="right badge badge-danger">New</span>
                                  </p>
                                </a>
                              </li>
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-copy"></i>
                                  <p>
                                    Layout Options
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">6</span>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Top Navigation</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Top Navigation + Sidebar</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Boxed</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Fixed Sidebar</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Fixed Navbar</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Fixed Footer</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Collapsed Sidebar</p>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-chart-pie"></i>
                                  <p>
                                    Charts
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>ChartJS</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Flot</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Inline</p>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link">
                                  <i class="fas fa-circle nav-icon"></i>
                                  <p>Level 1</p>
                                </a>
                              </li>
                              <li class="nav-header">LABELS</li>
                              <li class="nav-item">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon far fa-circle text-danger"></i>
                                  <p class="text">Important</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon far fa-circle text-warning"></i>
                                  <p>Warning</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon far fa-circle text-info"></i>
                                  <p>Informational</p>
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
                            <li class="nav-item d-none d-sm-inline-block">
                              <a href="index.php" class="nav-link">Home</a>
                            </li>
                          </ul>

                          <!-- SEARCH FORM -->
                          <form class="form-inline ml-3">
                            <div class="input-group input-group-sm">
                              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                              <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                  <i class="fas fa-search"></i>
                                </button>
                              </div>
                            </div>
                          </form>

                          <!-- Right navbar links -->
                          <ul class="navbar-nav ml-auto">
                            <!-- Messages Dropdown Menu -->
                            <li class="nav-item dropdown">
                              <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="far fa-comments"></i>
                                <span class="badge badge-danger navbar-badge">3</span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <a href="#" class="dropdown-item">
                                  <!-- Message Start -->
                                  <div class="media">
                                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                      <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                      </h3>
                                      <p class="text-sm">Call me whenever you can...</p>
                                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                  </div>
                                  <!-- Message End -->
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                  <!-- Message Start -->
                                  <div class="media">
                                    <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                      <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                      </h3>
                                      <p class="text-sm">I got your message bro</p>
                                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                  </div>
                                  <!-- Message End -->
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                  <!-- Message Start -->
                                  <div class="media">
                                    <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                      <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                      </h3>
                                      <p class="text-sm">The subject goes here</p>
                                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                  </div>
                                  <!-- Message End -->
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                              </div>
                            </li>
                            <!-- Notifications Dropdown Menu -->
                            <li class="nav-item dropdown">
                              <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="far fa-bell"></i>
                                <span class="badge badge-warning navbar-badge">15</span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <span class="dropdown-item dropdown-header">15 Notifications</span>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                  <i class="fas fa-envelope mr-2"></i> 4 new messages
                                  <span class="float-right text-muted text-sm">3 mins</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                  <i class="fas fa-users mr-2"></i> 8 friend requests
                                  <span class="float-right text-muted text-sm">12 hours</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                  <i class="fas fa-file mr-2"></i> 3 new reports
                                  <span class="float-right text-muted text-sm">2 days</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                              </div>
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
		$bodyTop = 	$this->getHead().'
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