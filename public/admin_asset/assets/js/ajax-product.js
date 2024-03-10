$(document).ready(function () {
    let run = true;

    $("select.select2").each(function () {
        $(this).select2({
            placeholder: $(this).attr("placeholder"),
            dropdownParent: $(this).parent(),
        });
    });
    // check box
    $(document).on("click", "input[type=checkbox]#is_default", function () {
        $("input[type=checkbox]#is_default").prop("checked", false);
        $(this).prop("checked", true);
    });
    //
    $(document).on("change", ".attribute", function (e) {
        let that = $(this);
        that.parent().find(".error").remove();
        run = true;
        $("span.error.attr").remove();
        $.each($(".invoice").not(that.parents(".invoice")), function () {
            const t = [];
            const p = [];
            $.each($(this).find(".attribute"), function () {
                t.push($(this).val());
            });
            $.each(that.parents(".invoice").find(".attribute"), function () {
                p.push($(this).val());
            });

            if(t[0] == p[0] && t[1].some(r=> p[1].includes(r))){
                that.parent().append(
                    `<span class="error attr">${message_p}</span>`
                );
                run = false;
                return false;
            }
        });
    });
    $("form#products").on("submit", function (e) {
        e.preventDefault();
        if (run) {
            $("body").append(`<div class="button button-ts">
                            <span class="loading loading-1"> </span>
                        </div>`);
            let router = $(this)[0].getAttribute("action");
            let data = new FormData(this);
            $.ajax({
                url: router,
                type: "POST",
                data: data,
                processData: false,
                contentType: false,
                success: function (data) {
                    $("span.error").remove();
                    setTimeout(function () {
                        $(".button-ts").remove();
                    }, 500);
                    if (data.success === true) {
                        if (data.type === "insert") {
                            $("form#products")[0].reset();
                            $(".image-preview").attr(
                                "src",
                                "/admin_asset/app-assets/images/empty.png"
                            );
                        } else {
                            if (data.quantity) {
                                Object.entries(data.quantity).forEach((val) => {
                                    $("#" + val[0]).val(val[1]);
                                });
                            }
                        }
                        $('.button.button-ts').remove()
                        toastr.success("", data.message, {
                            closeButton: !0,
                            tapToDismiss: !1,
                        });
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    } else if (data.success === false) {
                        keys = Object.keys(data.messages);
                        toastr.error("", data.message, {
                            closeButton: !0,
                            tapToDismiss: !1,
                        });
                        keys.forEach((val) => {
                            if (val.search("invoice") !== -1) {
                                let num = val.slice(
                                    val.indexOf(".") + 1,
                                    val.lastIndexOf(".")
                                );
                                let name_ = val.slice(val.lastIndexOf(".") + 1);
                                $(
                                    'input[name="invoice[' +
                                        num +
                                        "][" +
                                        name_ +
                                        ']"'
                                )
                                    .parent()
                                    .append(
                                        `<span class="error">${data.messages[val][0]}</span>`
                                    );
                            } else {
                                $('input[name="' + val + '"]')
                                    .parent()
                                    .append(
                                        `<span class="error">${data.messages[val][0]}</span>`
                                    );
                            }
                            $("select#" + val)
                                .parent()
                                .append(
                                    `<span class="error">${data.messages[val][0]}</span>`
                                );
                        });
                    }
                },
            });
        }
    });
    $("#sku").focusout(function () {
        let nslug = slug($(this).val());
        $(this).val(nslug.toUpperCase());
    });
});
