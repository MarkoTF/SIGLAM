<?php
	require_once 'class/Template.php';
	$Template = new Template('');
	$Template->bodyTop();	
?>

  <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js"></script>

<br>

<section class="content">
  <div class="container-fluid container">

    <section class="content-header"> <!--  Contendeor del header -->
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
              <li class="breadcrumb-item active">Alumnos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">     <!-- Contenido de la tabla -->
    <div class="row">
      <div class="col-12">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Alumnos dados de alta en el sistema.</h3>
          </div>

          <div class="nuevo-al">
            <button id="btnNuevo" id="btnn" class="btn btn-success mx-4 mt-4 float-left" onclick="nuevo()">Agregar alumno</button>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <table id="tabla_alumnos" class="table table-bordered table-hover mt-2 mb-3">
              <thead>
                <tr>  <!-- Encabezado -->
                 <!-- <th>ID</th> -->
                  <th>Nombre</th>
                  <th>Matrícula</th>
                  <th>Carrera</th>
                  <th>Semestre</th>
                  <th>Eliminar</th>
                  <th>Editar</th>
                </tr>
              </thead>
              <tbody id="tabla_al">   <!-- Valores  -->
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- empieza ventana modal para EDITAR-->

<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModallabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div id="header1" class="modal-header" class="btn btn-primary">
        <h5 id="title1" class="modal-title" id="exampleModallabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <!-- acá va el contenido del form -->
      <div id="formAlumno"> <!-- BODY -->
        <div class="modal-body"> <!-- FORMULARIO -->
          <div class="form-group">
            <label for="nombre" class="col-form-label">Nombre</label>
            <input type="text" id="inombre" placeholder="Ingrese su nombre" class="form-control my-1">  
          </div>
          <div class="form-group">
            <label for="nombre" class="col-form-label">Matrícula</label>
            <input type="text" id="imatricula" placeholder="Ingrese su matrícula" class="form-control my-1">
          </div>
          <div class="form-group">
            <label for="nombre" class="col-form-label">Carrrera</label>
            <input type="text" id="icarrera" placeholder="Carrera" class="form-control my-1">
          </div>
          <div class="form-group">
            <label for="nombre" class="col-form-label">Semestre</label>
            <input type="text" id="isemestre" placeholder="Semestre" class="form-control my-1">
          </div>
        </div>
        <div class="modal-footer"> <!-- FOOTER -->
          <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button id="boton" class="btn btn-success mx-3 my-3" onclick="guardar()">Editar</button>
        </div>
      </div>
    </div>
  </div>
</div><!-- Fin de la ventana modal -->



<!-- empieza ventana modal 2 para GUARDAR-->
<div class="modal fade" id="modalCRUD2" tabindex="-1" role="dialog" aria-labelledby="exampleModallabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div id="header2" class="modal-header" class="btn btn-primary">
        <h5 id="title2" class="modal-title" id="exampleModallabel">Añadir nuevo Alumno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <!-- acá va el contenido del form -->
      <div id="formAlumno"> <!-- BODY -->
        <div class="modal-body"> <!-- FORMULARIO -->
          <div class="form-group">
            <label for="nombre" class="col-form-label">Nombre</label>
            <input type="text" id="iinombre" placeholder="Ingrese su nombre" class="form-control my-1" required>  
          </div>
          <div class="form-group">
            <label for="nombre" class="col-form-label">Matrícula</label>
            <input type="text" id="iimatricula" placeholder="Ingrese su matrícula" class="form-control my-1" required>
          </div>
          <div class="form-group">
            <label for="nombre" class="col-form-label">Carrrera</label>
            <input type="text" id="iicarrera" placeholder="Carrera" class="form-control my-1" required>
          </div>
          <div class="form-group">
            <label for="nombre" class="col-form-label">Semestre</label>
            <input type="text" id="iisemestre" placeholder="Semestre" class="form-control my-1" required>
          </div>
        </div>
        <div class="modal-footer"> <!-- FOOTER -->
          <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button id="boton2" class="btn btn-success mx-3 my-3" onclick="guardar()">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</div><!-- Fin de la ventana modal -->

  </div>
</section>

<style type="text/css">
  #Encabezado{
    background-color: #dc3545; 
    color: white; 
    font-weight: bold;

  }
  #table{
    background-color: white;
  }
  
</style>

<?php
	$Template->bodyButton();
?>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){ 
  $('.solo-numero').numeric();
   });
</script>

<script type="text/javascript">
  window.onload = function observador(){
    
firebase.auth().onAuthStateChanged(function(user) {
  if (user) 
  {
        
  } 
  else 
  {
    window.location = "index.html"
  }
});
</script>

<script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>

<script src="alumnos/consultas.js"></script>
