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

    <div class="card card-info">
        <div class="card-header">
          <b>AGREGAR NUEVAS HERRAMIENTAS</b> 
        </div>
        <div class="card-body">

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Nombre de Herramienta:</label>
                <input type="text" id="n" name="nombre" placeholder="Nombre" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Modelo:</label>
                <input type="text" id="m" name="modelo" placeholder="Modelo" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Descripción:</label>
                <input type="text" id="d"  name="descripcion" placeholder="Descripcion" class="form-control" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Anaquel:</label>
               <!-- <input type="text" id = "c" name="categoria" placeholder="Categoria" class="form-control" required> -->
                <select id="c" name="categoria" class="form-control input-sm" name="dato[estudiosPadre]" id="estudiosPadre" required>
                    <option value="" disabled selected>Seleccionar</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Cantidad:</label>
                <input type="number" id = "t" name="cantidad" placeholder="Cantidad" class="form-control solo-numero" min="1" pattern="^[0-9]+" required >
              </div>
            </div>
          </div>

            <br>
            
            <button type="submit" class="btn btn-info" id="Bot" onclick="agregar()">Guardar</button>

        </div>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered my-3">
        <thead id="Encabezado">
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
    </div>


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

  <script type="text/javascript" src="conexion.js"></script>

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
