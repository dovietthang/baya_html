$(document).ready(function (){
    $("select.select2").each(function () {
        $(this).select2({
            placeholder: $(this).attr("placeholder"),
            dropdownParent: $(this).parent(),
            selectOnClose: false
        });
    });
    $('form').on('submit', function (e){
        e.preventDefault()
        let router = $(this)[0].getAttribute('action')
        let data = new FormData(this)
        $.ajax({
            url: router,
            type: 'POST',
            data: data,
            processData: false,
            contentType: false,
            success: function (data){
                $("span.error").remove();
                if (data.success === true){
                    if (data.type === 'insert'){
                        $('form')[0].reset()
                        if($(".img-preview")){
                            $(".img-preview").attr("src", "/admin_asset/app-assets/images/empty.png");
                        }
                        $('.type-cate').select2()
                    }
                    if (data.cate){
                        $('#parent_id').html(data.cate)
                    }
                    toastr.success("", data.message, {
                        closeButton: !0,
                        tapToDismiss: !1
                    })
                }
                else if (data.success === false) {
                    keys = Object.keys(data.messages)
                    toastr.error("", data.message, {
                        closeButton: !0,
                        tapToDismiss: !1
                    })
                    keys.forEach((val) => {
                        $('input[name=' +val).parent().append(`<span class="error">${data.messages[val][0]}</span>`)
                        $('select#' +val).parent().append(`<span class="error">${data.messages[val][0]}</span>`)
                    })
                }
            }
        })
    })
})

