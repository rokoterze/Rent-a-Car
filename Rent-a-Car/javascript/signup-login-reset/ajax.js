function checkUsername(){
   
    jQuery.ajax({
        url: "./include/signup-login-reset/signup/check-username.php",
        data: 'username='+$("#username").val(),
        type: "POST",
        success:function(data){
            $("#check-username").html(data);
        },
        error:function(){}
    });
}

function checkEmail(){
   
    jQuery.ajax({
        url: "./include/signup-login-reset/signup/check-email.php",
        data: 'email='+$("#email").val(),
        type: "POST",
        success:function(data){
            $("#check-email").html(data);
        },
        error:function(){}
    });
}
