<?php
	require_once 'class/Template.php';
	$Template = new Template('');
	$Template->bodyTop();	
?>
<br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Bienvenido/a al Sistema de Gestión de Laboratorio Multidisciplinario.</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" role="form">
                <div class="card-body">
                </div>
                <div class="card-footer">
                </div>
              </form>
            </div>

          </div>
          <!--/.col (left) -->
          <!-- right column -->

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

    </section>

<?php
	$Template->bodyButton();
?>





















<!--jQuery -->
<script
		src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous">
</script>



<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>
<script src="conn.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBSJKpoQLymKGq5jogxcRBXmdje2O37qy4",
    authDomain: "siglam-98442.firebaseapp.com",
    databaseURL: "https://siglam-98442.firebaseio.com",
    projectId: "siglam-98442",
    storageBucket: "siglam-98442.appspot.com",
    messagingSenderId: "96295527901",
    appId: "1:96295527901:web:78ef350751292db0198234",
    measurementId: "G-HJNKDL5BH3"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

<script type="text/javascript" src="funciones.js"></script>

<script src=""></script>

  <script type="text/javascript">
  window.onload = function observador(){
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    alertify.success("Sesion iniciada");
  } else {
  	window.location = "index.html"
  }
});
}</script>
<link rel="stylesheet" type="text/css" href="plugins/alertifyjs/css/alertify.css">
 <link rel="stylesheet" type="text/css" href="plugins/alertifyjs/css/themes/default.css">  
 <script src="plugins/alertifyjs/alertify.js"></script>
