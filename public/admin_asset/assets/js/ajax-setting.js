$(document).ready(function (){
    $('form#post').on('submit', function (e){
        e.preventDefault()
        let router = $(this)[0].getAttribute('action')
        let data = new FormData(this)
        $('body').append(`<div class="button button-ts">
                                            <span class="loading loading-1"> </span>
                                        </div>`)
        $.ajax({
            type: 'post',
            url: router,
            data: data,
            dataType:"json",
            processData: false,
            contentType: false,
            success: function (res){
                setTimeout(function (){
                    $('.button-ts').remove()
                }, 500)
                $("span.error").remove();
                if (res.success == true){
                    toastr.success("", res.message, {
                        closeButton: !0,
                        tapToDismiss: !1
                    })
                }
                else if(res.success == false){
                    toastr.error("", res.message, {
                        closeButton: !0,
                        tapToDismiss: !1
                    })
                    $.each(res.messages, function (key, val){
                        if ($('input[name=' +key + ']')){
                            $('input[name=' +key + ']').parent().append(`<span class="error">${val[0]}</span>`)
                        }
                       if ($('select[name=' +key+']')){
                           $('select[name=' +key+']').parent().append(`<span class="error">${val[0]}</span>`)
                       }
                       if ($('select#' +key + '')){
                           $('select.' +key).parent().append(`<span class="error">${val[0]}</span>`)
                       }
                    })
                }
            }
        })
    })
})
