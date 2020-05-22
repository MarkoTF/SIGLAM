// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
  apiKey: "AIzaSyBSJKpoQLymKGq5jogxcRBXmdje2O37qy4",
  authDomain: "siglam-98442.firebaseapp.com",
  projectId: "siglam-98442"
});

//creamos objetos
var db = firebase.firestore();

//mostrar ventana al pulsar 'Nuevo'
function nuevo(){
	$('#modalCRUD2').modal({backdrop: 'static', keyboard: false})
	$('#modalCRUD2').modal('show');
	$('#header2').css("background-color", "#28a745");
	$('#header2').css("color", "#fff");
}

//agregar elementos
function guardar(){

	var nom = document.getElementById("iinombre").value;
	var mat = document.getElementById("iimatricula").value;
	var car = document.getElementById("iicarrera").value;
	var sem = document.getElementById("iisemestre").value;

	db.collection("alumnos").add({
		nombre: nom,
		matricula: mat,
		carrera: car,
		semestre: sem
	})
	.then(function(docRef) {
		console.log("Se ha escrito un nuevo ID: ", docRef.id);
		document.getElementById("iinombre").value = '';
		document.getElementById("iimatricula").value = '';
		document.getElementById("iicarrera").value = '';
		document.getElementById("iisemestre").value = '';
		$('#modalCRUD2').modal('hide')
	})
	.catch(function(error) {
		console.error("Error al añadir elemento: ", error);
	});
}

//Mostrar registros en la tabla
var tabla = document.getElementById('tabla_al')

db.collection("alumnos").onSnapshot((querySnapshot) => {	//onSnapshot es para leer datos en tiempo real
	tabla.innerHTML = '';	//Limpiar datos de la tabla
    querySnapshot.forEach((doc) => {
        console.log(`${doc.id} => ${doc.data().nombre}`);
        tabla.innerHTML += `
        	<tr>
            	<td></td>
                <td>${doc.data().nombre}</td>
                <td>${doc.data().matricula}</td>
                <td>${doc.data().carrera}</td>
                <td>${doc.data().semestre}</td>
                <td><button class="btn btn-warning" onclick="editar('${doc.id}','${doc.data().nombre}','${doc.data().matricula}','${doc.data().carrera}','${doc.data().semestre}')">Editar</button></td>
                <td><button class="btn btn-danger" onclick="eliminar('${doc.id}')">Eliminar</button></td>
            </tr>`
    });
});
 
//Borrar elementos
function eliminar(id){

	var respuesta = confirm("Se eliminará un elemento. ¿Desea continuar?");

	if (respuesta) {
		db.collection("alumnos").doc(id).delete().then(function() {
			console.log("Se ha eliminado una documento");
		}).catch(function(error) {
			console.error("Error al intentar eliminar el documento: ", error);
		});
	}
}


//Editar datos
function editar(id, nombre, matricula, carrera, semestre){

	/* Mostrar ventana modal */
	$('#modalCRUD').modal({backdrop: 'static', keyboard: false})
	$('.modal-header').css("background-color", "#F1D41E");
	$('#header1').css("color", "#fff");
	$('#title1').text('Editar información de ' + nombre)
	$('#modalCRUD').modal('show')

	//iniciamos las varialbles
	document.getElementById('inombre').value = nombre;
	document.getElementById('imatricula').value = matricula;
	document.getElementById('icarrera').value = carrera;
	document.getElementById('isemestre').value = semestre;

	var btnE = document.getElementById('boton');
	/*btnE.innerHTML = 'Editar';
*/
	btnE.onclick = function(){
		var washingtonRef = db.collection("alumnos").doc(id);

		var Nombre = document.getElementById('inombre').value;
		var Matricula = document.getElementById("imatricula").value;
		var Carrera = document.getElementById("icarrera").value;
		var Semestre = document.getElementById("isemestre").value;

		// Especificamos los campos que queremos editar
		return washingtonRef.update({
			nombre: Nombre,
			matricula: Matricula,
			carrera: Carrera,
			semestre: Semestre
	})
	.then(function() {
		console.log("Document successfully updated!");
		document.getElementById("inombre").value = '';
		document.getElementById("imatricula").value = '';
		document.getElementById("icarrera").value = '';
		document.getElementById("isemestre").value = '';
		$('#modalCRUD').modal('hide')
	})
	.catch(function(error) {
    	// The document probably doesn't exist.
    	console.error("Error updating document: ", error);
});
}

}

