function iniciar(){  
  var errorCode=""
  var errorMessage = ""
var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // ...
}).then(function(resolve){
  if (resolve != null){
    window.location = "inicio.php"
  }
});
}