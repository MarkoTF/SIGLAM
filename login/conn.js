function iniciar(){  
var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
 
});
window.location="inicio.php"; 
}

function iniciarroot(){  
var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
 
});
window.location="/Siglam/inicio.php"; 
}