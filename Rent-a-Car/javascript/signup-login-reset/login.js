var username = document.getElementById('username');
var usernamespan = document.getElementById('usernamespan');

var pwd = document.getElementById('pwd');
var pwdspan = document.getElementById('pwdspan');


function isUsernameEmpty(){
  if(username.value==""){
    usernamespan.innerHTML = "Please enter a username";
    usernamespan.style.color = "#ff0000";
    username.style.border = "1px solid #ff0000";
    }
  else{
    usernamespan.innerHTML = "";
    username.style.border = "";
    }
}

function isPasswordEmpty(){
    if(pwd.value==""){
    pwdspan.innerHTML = "Please enter a password";
    pwdspan.style.color = "#ff0000";
    pwd.style.border = "1px solid #ff0000";
    }
    else{
    pwdspan.innerHTML = "";
    pwd.style.border = "";
    }
}