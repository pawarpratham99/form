$(document).ready(function(){
    $("#contactForm").submit(function(e){
        e.preventDefault();

        $.ajax({
            url: "process.php",  // PHP file that processes the form
            type: "POST",
            data: $(this).serialize(),  // Serialize the form data to send to the PHP script
            success: function(response) {
                alert(response);  // Show success/error message
                $("#contactForm")[0].reset();  // Reset the form after submission
            }
        });
    });
});
