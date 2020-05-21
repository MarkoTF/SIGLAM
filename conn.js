function iniciar(){  
  var errorCode=""
  var errorMessage = ""
var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  swal({
  title: "Intente de nuevo" ,
  text: "Correo o contraseña incorrectos" ,
  icon: "error",
  timer: 2000,
  button: false
});
}).then(function(resolve){
  if (resolve != null){

    window.location = "inicio.php"
  }
});
}

function iniciarroot(){  
  var errorCode=""
  var errorMessage = ""
var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
   //using custom CSS
 // .ajs-message.ajs-custom { color: #31708f;  background-color: #d9edf7;  border-color: #31708f; }
  swal({
  title: "Intente de nuevo" ,
  text: "Correo o contraseña incorrectos" ,
  icon: "error",
  timer: 2000,
  button: false
});
}).then(function(resolve){
  if (resolve != null){
    window.location = "../inicio.php"
  }
  else
  {
{}
  }
});
}

function cerrar(){  
firebase.auth().signOut().then(function() {
  window.location = "index.html"
}).catch(function(error) {
  // An error happened.
});
}

function reset(){

var emailAddress = document.getElementById("emailadress").value;

firebase.auth().sendPasswordResetEmail(emailAddress).then(function() {
  swal({
  title: "Correo enviado" ,
  text: "Ingrese al enlace para restablecer su contraseña" ,
  icon: "success",
  button: true
}).then((value) => {
  window.location = "/siglam/index.html"
});
}).catch(function(error) {
    swal({
  title: "Correo No enviado" ,
  text: "Su Correo podria no estar registrado" ,
  icon: "error",
  button: true
}).then((value) => {
  window.location = "/siglam/index.html"
});
});

}
function confirmar(){

  swal({
  title: "¿Esta Seguro?",
  icon: "warning",
  buttons: ["Cancelar", "Salir"],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    cerrar();
  } else {
  }
});

}
