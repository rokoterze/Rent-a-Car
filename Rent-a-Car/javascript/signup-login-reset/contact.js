var senderEmail = document.getElementById('senderEmail');
var emailspan = document.getElementById('emailspan');

var subject = document.getElementById('subject');

var message = document.getElementById('message');

function contactEmailValidation(){
  var pattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        
  if(senderEmail.value.match(pattern)){
    emailspan.innerHTML = "";
    senderEmail.style.border = "1px solid #00ff00";
  }
  else{
    emailspan.innerHTML = "Please enter a valid email address";
    emailspan.style.color = "#ff0000";
    senderEmail.style.border = "1px solid #ff0000";
  }
}

function isSubjectEmpty(){
    if(subject.value==""){
        subject.style.border = "1px solid #ff0000";
    }
    else{
        subject.style.border = "";
    }
}
function isMessageEmpty(){
    if(message.value==""){
        message.style.border = "1px solid #ff0000";
    }
    else{
        message.style.border = "";
    }
}