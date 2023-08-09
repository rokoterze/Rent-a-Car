var email = document.getElementById('email');
var emailspan = document.getElementById('emailspan');

function emailValidation() {
  var pattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        
  if(email.value.match(pattern)){
    emailspan.innerHTML = "";
    email.style.border = "1px solid #00ff00";
  }
  else{
    emailspan.innerHTML = "Please enter a valid email address";
    emailspan.style.color = "#ff0000";
    email.style.border = "1px solid #ff0000";
  }
}