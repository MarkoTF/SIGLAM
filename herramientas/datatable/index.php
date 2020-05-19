 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<?php require_once "scripts.php"; ?>
 </head>
 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-12">
 				<div class="card text-center">
 					<div class="card-header">
 						<h1>Inventario SIGLAM </h1>
 					</div>
 					<div class="card-body">
 						<h5 class="card-title">Lista de herramientas</h5>
 						<span class = "btn btn-primary"> Agregar nuevo</span>
 						<hr>
 						<div id = "tablaDatabase"></div>
 					</div>
 					<div class="card-footer text-muted">
 						 TECN CAMPUS MOTUL
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </body>
 </html>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$('#tablaDatabase').load('table.php');
 	})
 </script>