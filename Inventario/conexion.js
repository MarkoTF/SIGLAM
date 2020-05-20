// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
	apiKey:'AIzaSyBSJKpoQLymKGq5jogxcRBXmdje2O37qy4',
	authDomain: 'siglam-98442.firebaseapp.com' ,
	projectId: 'siglam-98442'
});


//Agregar documentos.
var db = firebase.firestore();
function agregar(){
	

	var name = document.getElementById('n').value;
	var model= document.getElementById('m').value;
	var description = document.getElementById('d').value;
	var category = document.getElementById('c').value;
	var total = document.getElementById('t').value;

	db.collection("Inventario").add({ 
		Nombre: name,
		Modelo: model,
		Descripcion: description,
		Categoria:category,
		Cantidad:total
	})
	.then(function(docRef) {
		console.log("Document written with ID: ", docRef.id);
		document.getElementById('n').value = '';
		document.getElementById('m').value = '';
		document.getElementById('d').value = '';
		document.getElementById('c').value = '';
		document.getElementById('t').value = '';
	})
	.catch(function(error) {
		console.error("Error adding document: ", error);
	});

}

//Leer datos.
var tabla = document.getElementById("table")
db.collection("Inventario").onSnapshot((querySnapshot) => {
	tabla.innerHTML = '';
	querySnapshot.forEach((doc) => {
		console.log(`${doc.id} => ${doc.data().Cantidad}`);
		tabla.innerHTML +=`
		<tr>
		<td>${doc.data().Nombre}</td>
		<td>${doc.data().Modelo}</td>
		<td>${doc.data().Descripcion}</td>
		<td>${doc.data().Categoria}</td>
		<td>${doc.data().Cantidad}</td>
		<td><button class = "btn btn-warning" onclick = "modificar('${doc.id}','${doc.data().Nombre}','${doc.data().Modelo}','${doc.data().Descripcion}','${doc.data().Categoria}','${doc.data().Cantidad}')">Editar</button></td>
		<td><button class = "btn btn-danger" onclick = "borrar('${doc.id}')">Eliminar</button></td>
		</tr>
		`
	});
});
//Borrar documentos.
function borrar(id){
	db.collection("Inventario").doc(id).delete().then(function() {
		console.log("Document successfully deleted!");
	}).catch(function(error) {
		console.error("Error removing document: ", error);
	});

}
 

//Actualizar documento.
function modificar(id,Nombre,Modelo,Descripcion,Categoria,Cantidad){

	document.getElementById('n').value = Nombre;
	document.getElementById('m').value = Modelo;
	document.getElementById('d').value = Descripcion;
	document.getElementById('c').value = Categoria;
	document.getElementById('t').value = Cantidad;
	var Boton = document.getElementById('Bot')
	Boton.innerHTML = 'Actualizar';

	Boton.onclick = function(){

		var washingtonRef = db.collection("Inventario").doc(id);

		var name = document.getElementById('n').value;
		var model = document.getElementById('m').value;
		var description = document.getElementById('d').value;
		var category = document.getElementById('c').value;
		var total =document.getElementById('t').value;
		return washingtonRef.update({
			Nombre: name,
			Modelo: model,
			Descripcion: description,
			Categoria:category,
			Cantidad:total
		})
		.then(function() {
			console.log("Document successfully updated!");
			Boton.innerHTML = 'Guardar';
			document.getElementById('n').value = '';
			document.getElementById('m').value = '';
			document.getElementById('d').value = '';
			document.getElementById('c').value = '';
			document.getElementById('t').value = '';
		})
		.catch(function(error) {
	    // The document probably doesn't exist.
	    console.error("Error updating document: ", error);
		});
	}
}
 