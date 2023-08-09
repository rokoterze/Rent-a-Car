
$(document).ready(function(){
    $("#search").keypress(function(){
        $.ajax({
            type: 'POST',
            url: "../include/sites/admin/systracker_search.php",
            data:{
                name: $("#search").val(),
            },
            success: function(data){
                $("#output").html(data);
            }
        });
    });
});
