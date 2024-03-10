$(document).ready(function (){
    $('form#index').on('submit', function (e){
        e.preventDefault()
        let router = $(this)[0].getAttribute('action')
        let data = new FormData(this)
        $.ajax({
            type: 'post',
            url: router,
            data: data,
            dataType:"json",
            processData: false,
            contentType: false,
            success: function (res){
                $("span.error").remove();
                if (res.success == true){
                    if (res.type == 'insert'){
                        $('form#index')[0].reset()
                        $('#blog-feature-image').attr('src', '/admin_asset/app-assets/images/empty.png')
                    }
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
                        $('input[name=' +key + ']').parent().append(`<span class="error">${val[0]}</span>`)
                        $('select[name=' +key+']').parent().append(`<span class="error">${val[0]}</span>`)
                    })
                }
            }
        })
    })
    $(document).on("change", '.blog_CustomFile', function (e) {
        var t = new FileReader, o = e.target.files;
        let getElment = $(this).parents('.featured-info').prev().children('img')
        t.onload = function () {
            getElment.attr("src", t.result)
        }, t.readAsDataURL(o[0])
    })
})
