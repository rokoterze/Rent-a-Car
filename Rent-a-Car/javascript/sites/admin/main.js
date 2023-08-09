var nameupd = document.getElementById('name');
var namespan = document.getElementById('namespan');

var surname = document.getElementById('surname');
var surnamespan = document.getElementById('surnamespan');

var email = document.getElementById('email');
var emailspan = document.getElementById('emailspan');

function isNameEmpty(){
    if(nameupd.value=="" || nameupd.value.length <=2){
        namespan.innerHTML = "Please enter more than 2 characters";
        namespan.style.color = "#ff0000";
        nameupd.style.border = "1px solid #ff0000";
    }
    else{
        namespan.innerHTML = "";
        namespan.style.color = "#00ff00";
        nameupd.style.border = "1px solid #00ff00";
    }
    
}

function isSurnameEmpty(){
    if(surname.value=="" || surname.value.length <=2){
        surnamespan.innerHTML = "Please enter more than 2 characters";
        surnamespan.style.color = "#ff0000";
        surname.style.border = "1px solid #ff0000";
    }
    else{
        surnamespan.innerHTML = "";
        surnamespan.style.color = "#00ff00";
        surname.style.border = "1px solid #00ff00";
    }
}   

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