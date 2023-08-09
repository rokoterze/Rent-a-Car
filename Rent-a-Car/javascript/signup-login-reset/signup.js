var iname = document.getElementById('name');
var inamespan = document.getElementById('namespan');

var isurname = document.getElementById('surname');
var isurnamespan = document.getElementById('surnamespan');

var email = document.getElementById('email');
var emailspan = document.getElementById('emailspan');

var pwd = document.getElementById('pwd');
var pwdspan = document.getElementById('pwdspan');

var pwdrepeat = document.getElementById('pwdrepeat');
var pwdrepeatspan = document.getElementById('pwdrepeatspan');

var adminpwd = document.getElementById('adminpwd');
var adminpwdspan = document.getElementById('adminpwdspan');

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


function passwordMatch(){
  
  if(pwd.value!=="" && pwdrepeat!==""){
    if(pwd.value==pwdrepeat.value){
      pwdspan.innerHTML = "";
      pwdrepeatspan.innerHTML = "";
      
      pwd.style.border = "1px solid #00ff00";
      pwdrepeat.style.border = "1px solid #00ff00";
    }
    else {
      pwdspan.innerHTML = "";
      pwdrepeatspan.innerHTML = "Passwords do not match";
      
      pwdrepeatspan.style.color = "#ff0000";
      pwd.style.border = "transparent";
      pwdrepeat.style.border = "1px solid #ff0000";
    }
  }
  else{
    pwdspan.innerHTML = "Please enter a password";
    pwdrepeatspan.innerHTML = "";
    
    pwdspan.style.color = "#ff0000";
    pwd.style.border = "1px solid #ff0000";
    pwdrepeat.style.border = "transparent";
  }
}

function isNameEmpty(){
  if(iname.value=="" || iname.value.length <=2){
    inamespan.innerHTML = "Please enter more than 2 characters";
    inamespan.style.color = "#ff0000";
    iname.style.border = "1px solid #ff0000";
  }
  else{
    inamespan.innerHTML = "";
    inamespan.style.color = "#00ff00";
    iname.style.border = "1px solid #00ff00";
  }
}
function isSurnameEmpty(){
  if(isurname.value=="" || isurname.value.length <=2){
    isurnamespan.innerHTML = "Please enter more than 2 characters";
    isurnamespan.style.color = "#ff0000";
    isurname.style.border = "1px solid #ff0000";
  }
  else{
    isurnamespan.innerHTML = "";
    isurnamespan.style.color = "#00ff00";
    isurname.style.border = "1px solid #00ff00";
  }
}

function adminKeywordSpan(){
    adminpwdspan.style.visibility="visible";
    adminpwdspan.style.transition ="1s ease-in-out";
    adminpwdspan.innerHTML = "<br>Admin keyword is mandatory only if user is applying for Administration mode account type!";
  }

function adminKeywordSpan2(){
    adminpwdspan.style.visibility="hidden";
    adminpwdspan.innerHTML = "";
}







