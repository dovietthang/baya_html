let color_id = null,
    size_id = null,
    quantity = 1,
    handle = null;
$(document).ready(function () {
    const popUp = `<div style="max-width: 500px" class="modal-inner-wrap" data-role="focusable-scope">
                    <header class="modal-header">
                        <h1 class="modal-title" data-role="title">${error}</h1>
                        <button class="action-close" data-role="closeBtn" type="button">
                            <span>Close</span>
                        </button>
                    </header>
                    <div class="modal-content" data-role="content">${qttError}<div></div></div>
                    <footer class="modal-footer">
                        <button class="action-primary action-accept" type="button" data-role="action"><span>OK</span></button>
                    </footer>
                    </div>`;
    document.addEventListener("keydown", (evt) => {
        if (evt.key === "Escape") {
            if ($(".modals-wrapper2 .modal-slide.popup-wheel._show").length > 0) {
                hide2();
            }
            if (
                $(".modal-popup.confirm._show").length > 0 ||
                $(".modal-popup._show.popup-register-coupon").length > 0
            ) {
                hidePopup();
            }
            if ($(".modal-slide._show").length > 0) {
                hide();
            }
        }
    });

    function show(el, classList) {
        if ($("#main-detail-page").length <= 0) {
            color_id = null;
            size_id = null;
            quantity = 1;
            handle = null;
        }

        $("body").addClass("_has-modal");
        $(".modals-wrapper").append(
            '<div class="modals-overlay"></div>'
        );
        $(".modal-slide").css({
            "z-index": 10001,
            left: "unset",
            "max-width": "900px",
        });
        setTimeout(() => {
            $(".modal-slide" + el).addClass(classList);
        }, 100);
    }
    function hide() {
        // $(".modal-slide").removeClass(
        //     "_inner-scroll modal-block-minicart _show"
        // );
        $(".modal-slide").removeClass(
            "_inner-scroll modal-block-minicart quickview-slider _inner-scroll-rm _show"
        );
        setTimeout(() => {
            $(".modals-wrapper .modals-overlay").remove();
            $(".modal-slide").removeAttr("style");
            $("body").removeClass("_has-modal");
        }, 250);
    }
    function hide2() {
        // $(".modal-slide").removeClass(
        //     "_inner-scroll modal-block-minicart _show"
        // );
        $(".modals-wrapper2 .modal-slide").removeClass(
            "_show"
        );
        setTimeout(() => {
            $(".modals-wrapper2 .modals-overlay").remove();
            $(".modals-wrapper2 .modal-slide").removeAttr("style");
            $("body").removeClass("_has-modal");
            $('.wheel-icon.acton-spin').show()
        }, 250);
    }
    function hidePopup() {
        // $(".modal-popup").removeClass("confirm _show");
        $(".modal-popup").removeClass(
            "add-to-cart-success-popup confirm _show"
        );
        setTimeout(() => {
            $(".modals-wrapper-popup .modals-overlay").remove();
            $(".modal-popup").removeAttr("style");
            $("body").removeClass("_has-modal");
        }, 250);
    }
    function skuDetail($that) {
        const product_id = $that.attr("data-product-id");
        const url = location.origin + "/sku-option";
        quantity = $("input.input-text.qty").val();
        $.ajax({
            type: "GET",
            url: url,
            data: {
                color_id: color_id,
                size_id: size_id,
                id: product_id,
                visible: handle,
            },
            success: function (res) {
                $("#main-cart-page").html(res.view);
                if (res.photo != null) {
                    $("#main-cart-page")
                        .next()
                        .find(".image-preview-item")
                        .attr("src", res.photo);
                }
                $("input.input-text.qty").val(quantity);
            },
        });
    }
    function skuDetailOnly($that) {
        const product_id = $that.attr("data-product-id");
        const url = location.origin + "/sku-detail";
        quantity = $("input.input-text.qty").val();
        $.ajax({
            type: "GET",
            url: url,
            data: {
                color_id: color_id,
                size_id: size_id,
                id: product_id,
                visible: handle,
            },
            success: function (res) {
                $("#main-detail-page").html(res);
                $("input.input-text qty").val(quantity);
            },
        });
    }
    function onlySkuColor($that) {
        const product_id = $that.attr("data-product-id");
        const url = location.origin + "/sku-color";
        $.ajax({
            type: "GET",
            url: url,
            data: {
                color_id: color_id,
                id: product_id,
            },
            success: function (res) {
                if (res.photo != null) {
                    $that.find(".product-image-photo").attr("src", res.photo);
                }
            },
        });
    }
    function pushCart(skuId) {
        const url = location.origin + "/cart-add";
        $.ajax({
            type: "GET",
            url: url,
            data: { skuId: skuId, size_id: size_id, quantity: quantity },
            success: function (res) {
                if (res && res.message) {
                    $(".counter.qty .counter-number").text(res.total);
                    $(".modals-wrapper-popup").append(
                        '<div class="modals-overlay"  style="z-index: 10001"></div>'
                    );
                    $(".modals-wrapper-popup .modal-popup").html(res.popup);
                    $(".modals-wrapper-popup .modal-popup").css({
                        "z-index": 10002,
                        "margin-left": "10px",
                        "margin-right": "10px",
                    });
                    setTimeout(() => {
                        $(".modals-wrapper-popup .modal-popup").addClass(
                            "add-to-cart-success-popup confirm _show"
                        );
                    }, 200);
                }
            },
        });
    }
    function updateCart(skuId, quantity, item_id) {
        const url = location.origin + "/cart-update";
        $.ajax({
            type: "GET",
            url: url,
            data: {
                skuId: skuId,
                quantity: quantity,
                item_id: item_id.split("-"),
            },
            success: function (res) {
                if (res && res.message) {
                    $("td.amount .price-wrapper").text(res.price_sum);
                }
            },
        });
    }
    $(document).on("click", "button.action-accept", function () {
        hidePopup();
    });
    $("a.quickview").click(function () {
        const product_id = $(this).attr("data-product_id");
        const url = location.origin + "/cart-product";
        $.ajax({
            url: url,
            type: "get",
            data: { id: product_id },
            success: function (res) {
                if (res) {
                    $(".modals-wrapper .modal-slide").html(res);
                    show(
                        ".modal-cart",
                        "quickview-slider _inner-scroll-rm _show"
                    );
                }
            },
        });
    });
    $(document).on(
        "click",
        ".modals-wrapper-popup .modal-popup .action-dismiss",
        function () {
            hidePopup();
        }
    );
    $(document).on(
        "click",
        ".modals-wrapper .modal-header .action-close",
        function () {
            hide();
        }
    );
    $(document).on(
        "click",
        ".modals-wrapper2 .modal-header .action-close",
        function () {
            hide2();
        }
    );
    $(document).on(
        "click",
        ".modals-wrapper-popup .modal-header .action-close",
        function () {
            hidePopup();
        }
    );
    $(document).on("click", ".modals-wrapper .modals-overlay", function () {
        hide();
    });
    $(document).on(
        "click",
        ".product.attribute.description .title",
        function () {
            $(".product.attribute.description").toggleClass("active");
        }
    );

    if (
        navigator.userAgent.indexOf("Mobile") == -1 &&
        navigator.userAgent.indexOf("Tablet") == -1
    ) {
        $(document)
            .on("mouseover", ".fotorama__stage__frame", function () {
                $(this)
                    .children(".fotorama__img")
                    .css({
                        transform: "scale(" + $(this).attr("data-scale") + ")",
                    });
            })
            .on("mouseout", ".fotorama__stage__frame", function () {
                $(this)
                    .children(".fotorama__img")
                    .css({ transform: "scale(1)" });
            })
            .on("mousemove", ".fotorama__stage__frame", function (e) {
                $(this)
                    .children(".fotorama__img")
                    .css({
                        "transform-origin":
                            ((e.pageX - $(this).offset().left) /
                                $(this).width()) *
                                100 +
                            "% " +
                            ((e.pageY - $(this).offset().top) /
                                $(this).height()) *
                                100 +
                            "%",
                    });
            });
    }

    $(document).on("click", ".main-idx .swatch-option.image", function () {
        $that = $(this).parents("#product-data");
        $("#super_color-error").text("");
        $(".swatch-option.image.selected").not($(this)).removeClass("selected");
        $(this).toggleClass("selected");
        color_id = $(this).hasClass("selected")
            ? $(this).attr("data-color-id")
            : null;
        handle = "1";
        if ($(this).attr("only-color")) {
            onlySkuColor($that);
        } else {
            skuDetail($that);
        }
    });
    $(document).on("click", ".main-idx .swatch-option.size", function () {
        $that = $(this).parents("#product-data");
        $("#super_size-error").text("");
        $(".swatch-option.size.selected").not($(this)).removeClass("selected");
        $(this).toggleClass("selected");
        size_id = $(this).hasClass("selected")
            ? $(this).attr("data-size-id")
            : null;
        handle = "2";
        skuDetail($that);
    });
    $(document).on("click", ".main-detail .swatch-option.image", function () {
        $that = $(this).parents("#product-data");
        $("#super_color-error").text("");
        $(".swatch-option.image.selected").not($(this)).removeClass("selected");
        $(this).toggleClass("selected");
        color_id = $(this).hasClass("selected")
            ? $(this).attr("data-color-id")
            : null;
        handle = "1";
        if ($(this).attr("only-color")) {
            onlySkuColor($that);
        } else {
            skuDetailOnly($that);
        }
    });
    $(document).on("click", ".main-detail .swatch-option.size", function () {
        $that = $(this).parents("#product-data");
        $("#super_size-error").text("");
        $(".swatch-option.size.selected").not($(this)).removeClass("selected");
        $(this).toggleClass("selected");
        size_id = $(this).hasClass("selected")
            ? $(this).attr("data-size-id")
            : null;
        handle = "2";
        skuDetailOnly($that);
    });

    $(document).on("blur", "input.input-text.qty", function () {
        $("#super_quantity-error").text("");
        const max = $(this).attr("data-quantity");
        quantity = $(this).val();
        if (parseInt($(this).val()) > parseInt(max)) {
            $("#super_quantity-error").text(qttError);
            if(max >= 0){
                quantity = max;
            }
            else{
                quantity = 0
            }
            $(this).val(max);
        }
    });
    $(document).on("click", ".field.qty .qty-decrease", function () {
        const input = $("input#qty");
        quantity = parseInt(input.val()) - 1;
        if (quantity <= 0) {
            quantity = 1;
        }
        input.val(quantity);
    });
    $(document).on("click", ".field.qty .qty-increase", function () {
        $("#super_quantity-error").text("");
        const input = $("input#qty");
        const max = input.attr("data-quantity");
        quantity = parseInt(input.val()) + 1;
        if (quantity > max) {
            $("#super_quantity-error").text(qttError);
            if(max >= 0){
                quantity = max;
            }
            else{
                quantity = 0
            }
        }
        input.val(quantity);
    });
    $(document).on("blur", ".qty-cart input.cart-item-qty", function () {
        const max = $(this).attr("data-quantity");
        let quantity = $(this).val();
        if (parseInt($(this).val()) > parseInt(max)) {
            if(max >= 0){
                quantity = max;
            }
            else{
                quantity = 0
            }
            $(this).val(max);
            $(".modals-wrapper-popup").append(
                '<div class="modals-overlay"></div>'
            );
            $(".modals-wrapper-popup .modal-popup").html(popUp);
            $(".modal-popup").css({
                "z-index": 10002,
                "margin-left": "45px",
            });
            setTimeout(() => {
                $(".modal-popup").addClass("confirm _show");
            }, 100);
        }
        const skuId = $(this)
            .parents(".product-item-details")
            .attr("data-cart-item");
        const item_id = $(this).attr("data-check");
        updateCart(skuId, quantity, item_id);
    });
    $(document).on("click", ".qty-cart .qty-decrease", function () {
        const parent = $(this).parents(".product-item-details");
        const input = parent.find("input.cart-item-qty");
        let quantity = parseInt(input.val()) - 1;
        if (quantity <= 0) {
            quantity = 1;
        }
        input.val(quantity);
        const skuId = parent.attr("data-cart-item");
        const item_id = input.attr("data-check");
        updateCart(skuId, quantity, item_id);
    });
    $(document).on("click", ".qty-cart .qty-increase", function () {
        const parent = $(this).parents(".product-item-details");
        const input = parent.find("input.cart-item-qty");
        const max = input.attr("data-quantity");
        let quantity = parseInt(input.val()) + 1;
        if (quantity > max) {
            if(max >= 0){
                quantity = max;
            }
            else{
                quantity = 0
            }
            $(".modals-wrapper-popup").append(
                '<div class="modals-overlay"></div>'
            );
            $(".modals-wrapper-popup .modal-popup").html(popUp);
            $(".modal-popup").css({
                "z-index": 10002,
                "margin-left": "10px",
                "margin-right": "10px",
            });
            setTimeout(() => {
                $(".modal-popup").addClass("confirm _show");
            }, 100);
        }
        input.val(quantity);
        const skuId = parent.attr("data-cart-item");
        const item_id = input.attr("data-check");
        updateCart(skuId, quantity, item_id);
    });
    $(document).on("click", "button#product-addtocart-button", function () {
        if (!color_id) {
            $("#super_color-error").text(fError);
        }
        if (!size_id) {
            $("#super_size-error").text(fError);
        }
        if (!color_id || !size_id) {
            return;
        }
        const skuId = $(this).attr("data-product-sku");
        pushCart(skuId);
    });
    $(document).on("click", ".action.delete", function (evt) {
        evt.preventDefault();
        const parent = $(this).parents(".product-item");
        const cartId = $(this).attr("data-cart-item");
        const item_id = $(this).attr("data-check");
        const url = location.origin + "/cart-delete";
        $.ajax({
            url: url,
            type: "get",
            data: { cartId: cartId, item_id: item_id.split("-") },
            success: function (res) {
                if (res && res.message) {
                    $(".counter.qty .counter-number").text(res.total);
                    $("td.amount .price-wrapper").text(res.price_sum);
                    parent.hide(200);
                    setTimeout(() => {
                        parent.remove();
                    }, 250);
                    if (res.total <= 0 && res.alert) {
                        $("#minicart-content-wrapper .block-content").html(
                            `<strong class="subtitle empty">${res.alert}</strong>`
                        );
                    }
                }
            },
        });
    });
    $(document).on("click", ".action.showcart", function (evt) {
        evt.preventDefault();
        const url = location.origin + "/cart";
        $.ajax({
            url: url,
            type: "get",
            success: function (res) {
                if (res) {
                    $(".modals-wrapper .modal-slide").html(res);
                    show(
                        ".modal-cart",
                        "_inner-scroll modal-block-minicart _show"
                    );
                }
            },
        });
    });
    $(document).on(
        "click",
        ".filter-options-item .filter-options-title",
        function () {
            const $parent = $(this).parents(".filter-options-item");
            const elm = $parent.find(".filter-options-content");
            $(".filter-options-content").not(elm).css("display", "none");
            if (elm.css("display") == "none") {
                elm.css("display", "block");
            } else {
                elm.css("display", "none");
            }
        }
    );
    $(document).on(
        "click",
        ".filter-current .filter-current-subtitle",
        function () {
            const $parent = $(this).parents(".filter-current");
            const elm = $parent.find(".items");
            if (elm.css("display") == "none") {
                elm.css("display", "block");
            } else {
                elm.css("display", "none");
            }
        }
    );
    $("li.dropdown").hover(
        function () {
            $("body").addClass("overlay");
        },
        function () {
            $("body").removeClass("overlay");
        }
    );
    $("#search").keyup(function (evt) {
        const val = $(this).val();
        const url = location.origin + "/search-a";
        if (val.length > 2) {
            $(".actions .action.search").attr("disabled", false);
        } else {
            $(".actions .action.search").attr("disabled", true);
        }
        if (val.length > 1 || evt.keyCode == 8) {
            $.ajax({
                url: url,
                data: { search: val },
                success: function (res) {
                    $("#search_autocomplete").html(res);
                    $("#search_autocomplete").css({
                        display: "block",
                        width: "250px",
                    });
                },
            });
        }
    });
    $(document).on("click", ".check-size", function () {
        const url = $(this).attr("url-image");
        const sizeDiv = `
        <div class="modal-inner-wrap" data-role="focusable-scope">
            <header class="modal-header">
                <h1 id="modal-title-size" class="modal-title" data-role="title">
                        Hướng dẫn chọn size
                </h1>
                <button class="action-close" data-role="closeBtn" type="button">
                    <span>Close</span>
                </button>
            </header>
                <div id="modal-content-size" class="modal-content" data-role="content"><div class="sizechart" style="">
                    <img class="size-mobile" src="${url}">
                    <img class="size-desktop" src="${url}">
                </div>
            </div>
        </div>`;
        $(".modals-wrapper .modal-slide").html(sizeDiv);
        show(".popup-sizechart", "_show");
    });

    $(document).ready(function(){
        $(document).on('click', '.note a.popup-note', function(){
            const url = '/page-load'
            const slug = $(this).attr('data-slug')
            $.ajax({
                type: "GET",
                url: url,
                data: {
                    slug: slug,
                },
                success: function (res) {
                    console.log(res);
                    $(".modals-wrapper .modal-slide").html(res);
                    show(".popup-sizechart", "_show");
                },
            });
        })
    })

    document.addEventListener("click", function handleClickOutsideBox(event) {
        const box = document.getElementById("search_autocomplete");
        if (!box.contains(event.target)) {
            box.style.display = "none";
        }
    });
});
