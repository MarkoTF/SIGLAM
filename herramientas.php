<?php
	require_once 'class/Template.php';
	$Template = new Template('');
	$Template->bodyTop();	
?>

    <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js"></script>


<br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">AGREGAR NUEVAS HERRAMIENTAS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" role="form">
                <div class="card-body row">
              		<div class="col-md-4">
						<div class="form-group">
							<label>Nombre de Herramienta:</label>
                			<input type="text" id = "n" name="nombre" placeholder="Nombre" class="form-control" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Modelo:</label>
	               			<input type="text" id = "m" name="modelo" placeholder="Modelo" class="form-control" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Descripción:</label>
	               		<input type="text" id = "d"  name="descripcion" placeholder="Descripcion" class="form-control" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Categoría:</label>
	               		<input type="text" id = "c" name="categoria" placeholder="Categoria" class="form-control" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Cantidad:</label>
	               		<input type="text" id = "t" name="cantidad" placeholder="Cantidad" class="form-control" required>
						</div>
					</div>
                </div>

                <div class="card-footer">
                 <button href="#" class="btn btn-info" id ="Bot" onclick="agregar()">Guardar</button>
                </div>
              </form>
            </div>


            <table class="table table-bordered">
                <thead style="background-color: #dc3545; color: white; font-weight: bold;">
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>

                <tbody id = "table">
                </tbody>
            </table>   
            <!-- /.card -->

            <!-- /.card -->

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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="inventario/conexion.js"></script>

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
