function iniciar(){  
  var errorCode=""
  var errorMessage = ""
var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  alertify.error("Correo o contraseña incorrectos");
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
  alertify.error("Correo o contraseña incorrectos");
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
  
}).catch(function(error) {
  // An error happened.
});

}
function confirmar(){

  alertify.confirm('Salir', '¿Seguro que deseas salir?', function(){ 
    cerrar();}
  , function(){});

}
