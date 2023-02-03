$(document).ready(function(){

    const notifTimeout = 2500;
    
    // Sign In Function
    $("#sign-in-form").submit(function(e){
        e.preventDefault();
        
        const requestData = {
            email : $(this).find("input[name='email']").val(),
            password : $(this).find("input[name='password']").val()
        }

        // AJAX Sign In
        $.ajax({
            url : '/api/login',
            method: 'POST',
            data: requestData,
            success: function(response){
                console.log("Response: ", response);

                iziToast.success({
                    title: 'OK',
                    message: 'Sign In Successfully!',
                    position: 'topRight',
                    timeout: notifTimeout,
                });

                setTimeout(() => {
                    window.location.href = "/welcome";
                }, notifTimeout);
            },
            error: function(error){
                console.log("Error: ", error);

                iziToast.error({
                    title: 'Error',
                    message: 'Failed to Sign In!',
                    position: 'topRight',
                    timeout: notifTimeout,
                });

                setTimeout(() => {
                    window.location.href = "/";
                }, notifTimeout);
            }
        })
    });
    
    // Sign Up Function
    $("#sign-up-form").submit(function(e){
        e.preventDefault();

        const requestData = {
            name : $(this).find("input[name='name']").val(),
            email : $(this).find("input[name='email']").val(),
            password : $(this).find("input[name='password']").val()
        }
        
        // AJAX Sign Up
        $.ajax({
            url : '/api/register',
            method: 'POST',
            data: requestData,
            success: function(response){
                console.log("Response: ", response);

                iziToast.success({
                    title: 'OK',
                    message: 'Account Successfully Registered!',
                    position: 'topRight',
                    timeout: notifTimeout,
                });

                setTimeout(() => {
                    window.location.href = "/";
                }, notifTimeout);

            },
            error: function(error){
                console.log("Error: ", error);

                iziToast.error({
                    title: 'Error',
                    message: 'Failed to Create Account!',
                    position: 'topRight',
                    timeout: notifTimeout,
                });

                setTimeout(() => {
                    window.location.href = "/";
                }, notifTimeout);
            }
        })
    });
})