$(document).ready(function(){
    $("form").submit(function(event) {
        event.preventDefault();

        const arrayInputElement = $(this).find("input, select, textarea");
        const _url = $(this).attr('action');
        const _method = $(this).attr('method') ?? 'GET';
        const _redirectUrl = $(this).attr('redirect-url') != null && $(this).attr('redirect-url') != undefined && $(this).attr('redirect-url') != "" ? $(this).attr('redirect-url') : window.location.href;
        const withLoadingButton = {
            loading : $(this).find('button[type="submit"]').attr('with-loading') == 'true' ? true : false,
            button : $(this).find('button[type="submit"]'),
            text : $(this).find('button[type="submit"]').text(),
        }
        let _requestData = {}

        // Loop Whole Input Element and save it to JSON request data
        $(arrayInputElement).each(function(i){
            const key = $(this).attr('name');
            let value = "";

            if($(this).attr('type') == 'checkbox' || $(this).attr('type') == 'radio'){
                if($(this).is(':checked')){
                    value = $(this).val();
                }
            }else{
                value = $(this).val();
            }

            _requestData[key] = value;
        });

        // Send Request Data to Endpoint API using AJAX
        ajaxSendFormData(_url, _method, _requestData, _redirectUrl, withLoadingButton);

    });
});

function ajaxSendFormData(url, method, requestData, redirectUrl = window.location.href, withLoading, duration = 2000){
    if(withLoading.loading){
        showLoadingButton(withLoading.button)
    }

    $.ajax({
        url,
        method,
        data: requestData,
        success: function(response){
            const { message, data } = response;
            console.log("success: ", response);

            iziToast.success({
                title: 'OK',
                message: message,
                position: 'topRight',
                timeout: duration,
            });

            if(data.token != undefined && data.token != null && data.token != ""){
                setCookie("api_token", data.token, new Date());
            }

            setTimeout(() => {
                window.location.href = redirectUrl;
            }, duration);
        },
        error: function(error){
            const { message, errors } = error.responseJSON;
            console.error("Error: ", message)

            iziToast.error({
                title: 'Error',
                message: message,
                position: 'topRight',
                timeout: duration,
            });

            setTimeout(() => {
                window.location.href = window.location.href;
            }, duration);
        }
    }).then(() => {
        hideLoadingButton(withLoading.button, withLoading.text);
    })
}

function showLoadingButton(button){
    $(button).empty();
    const circleLoading = "<div class='circle-loading'></div>";

    $(button).append(circleLoading);
}

function hideLoadingButton(button, text){
    $(button).empty();
    $(button).append(text);
}

