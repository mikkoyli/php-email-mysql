$(document).ready(function(){
    $('#emailform').on('submit', function(e){
        e.preventDefault();

        var email = $('#email').val();

        $.ajax({
            type: "POST",
            url: 'process.php',
            data: {email: email},
            success: function(data){
                alert(data);
                $("#emailform")[0].reset();
            }
        });
    });
});