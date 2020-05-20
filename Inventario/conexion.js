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
	})
	.catch(function(error) {
	    console.error("Error adding document: ", error);
	});

}

 