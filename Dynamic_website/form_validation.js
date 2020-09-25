$(document).ready(function() {


    $('#submit').click(function(e){
        e.preventDefault();


        var name = $("#name").val();
        var email = $("#email").val();
        var feedback = $("#feedback").val();


        $.ajax({
            type: "POST",
            url: "form_validation.php",
            dataType: "json",
            data: {name:name, email:email, feedback:feedback},
            success : function(data){
                if (data.code == "200"){
                    $(".success").html('Thank you. Your Feedback Matters.');
                    $(".success").css("display","block");
                    $.ajax({
                        type: "POST",
                        url: "db.php",
                        dataType: "json",
                        data: {name:name, email:email, feedback:feedback},
                    });
                } else {
                    $(".display-error").html(data.msg);
                    $(".display-error").css("display","block");
                }
            }
        });
    });
});