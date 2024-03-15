function StickerAndPrice(obj, target) {
  var domLoop = $(target);
  var viewed_frame = [0, 0, 0, 0, 0];
  //Kiểm tra icon
  var viewed_frame_size = prmt_icon.frame.tag.length;
  //Sticker Frame
  for (var i = 0; i < viewed_frame_size; i++) {
    if (prmt_icon.frame.tag[i] != "null") {
      if (obj.tags.includes(prmt_icon.frame.tag[i])) {
        viewed_frame[i] = 1;
      }
    }
  }
  $.each(viewed_frame, function (j, k) {
    if (k == 1) {
      domLoop
        .find(".proloop-image")
        .append(
          '<div class="sticker_frame"><a href="' +
            obj.url +
            '"><img class="lazyload" src="' +
            prmt_icon.frame.icon[j] +
            '" /></a></div>'
        );
      return false;
    }
  });
}
$(document).ready(function () {
  if (jQuery(".productDetail-recently-viewed").length > 0) {
    var d = new Date();
    var n = d.getTime();
    var last_viewed_pro_date = localStorage.getItem("products_viewed_date");
    if (last_viewed_pro_date < n) {
      localStorage.setItem("products_viewed_date", n + 30 * 86400000);
      localStorage.removeItem("products_viewed");
    }
    var product_handle = "chan-sofia";
    var last_viewed_pro = localStorage.getItem("products_viewed");
    var last_viewed_pro_new = "";
    if (last_viewed_pro == null) {
      last_viewed_pro_new = product_handle;
    } else {
      var list_array = last_viewed_pro.split("##"); //[]
      if (!list_array.includes(product_handle)) {
        last_viewed_pro_new = product_handle + "##" + last_viewed_pro;
      } else {
        last_viewed_pro_new = list_array.join("##");
      }
    }

    var last_viewd_pro_array = last_viewed_pro_new.split("##");
    var handle_error;

    var limitpro = last_viewd_pro_array.length;
    if (last_viewd_pro_array.length > 8) limitpro = 8;
    var recentview_promises = [];
    var countValid = 0;
    for (var i = 0; i < limitpro; i++) {
      if (countValid >= 8) return false;
      if (typeof last_viewd_pro_array[i] == "string") {
        countValid++;
        var promise = new Promise(function (resolve, reject) {
          $.ajax({
            url: "/products/" + last_viewd_pro_array[i] + "?view=viewed",
            success: function (product) {
              product = product.trim();
              resolve(product, countValid);
            },
            error: function (err) {
              resolve("", countValid);
            },
          });
        });
        recentview_promises.push(promise);
      }
    }

    Promise.all(recentview_promises).then(function (values, countValid) {
      var viewed_items = [];
      $.each(values, function (i, v) {
        if (v != "") {
          v = v.replace("viewed-loop-", "viewed-loop-" + (i + 1));
          $("#listViewed").append(v);
          viewed_items.push(viewed);
          countValid++;
        } else {
          viewed_items.push(null);
        }
      });
      $.each(viewed_items, function (i, v) {
        if (v != null) {
          StickerAndPrice(v, "#viewed-loop-" + (i + 1));
        }
      });
      HRT.Product.sliderProductRelated("#listViewed");
    });

    var filtered = last_viewd_pro_array.filter(function (el) {
      return el != "";
    });
    localStorage.setItem("products_viewed", filtered.join("##"));
  }
});
/* template */
var pro_template = "style_02";
var productImg_size = "6";
$(document).ready(function () {
  if (pro_template == "style_01" && productImg_size > 1) {
    var slider = $("#productCarousel-slider");
    var thumbnailSlider = $("#productCarousel-thumb");
    var duration = 500;

    slider.owlCarousel({
      items: 1,
      nav: true,
      dots: true,
      loop: false,
      smartSpeed: 1000,
    });
    slider.on("changed.owl.carousel", function (e) {
      thumbnailSlider.trigger("to.owl.carousel", [
        e.item.index,
        duration,
        true,
      ]);
      thumbnailSlider.find(".owl-item").removeClass("current");
      thumbnailSlider
        .find(".owl-item:nth-child(" + (e.item.index + 1) + ")")
        .addClass("current");
    });
    thumbnailSlider.on("initialized.owl.carousel", function () {
      thumbnailSlider.find(".owl-item").eq(0).addClass("current");
    });
    thumbnailSlider.owlCarousel({
      loop: false,
      nav: false,
      margin: 15,
      center: false,
      responsive: {
        0: {
          items: 4,
        },
        768: {
          items: 5,
        },
        992: {
          items: 5,
        },
        1200: {
          items: 5,
        },
      },
    });
    thumbnailSlider.on("changed.owl.carousel", function (e) {
      slider.trigger("to.owl.carousel", [e.item.index, duration, true]);
      slider.find(".owl-item").removeClass("current");
      slider
        .find(".owl-item:nth-child(" + (e.item.index + 1) + ")")
        .addClass("current");
    });
    thumbnailSlider.on("click", ".owl-item", function (e) {
      e.preventDefault();
      thumbnailSlider.find(".owl-item").removeClass("current");
      $(this).addClass("current");
      var number = $(this).index();
      slider.data("owl.carousel").to(number, duration, true);
    });
  } else if (pro_template == "style_02") {
    $("body").scrollspy({
      target: "#productScroll-spy",
      offset: $(".productDetail-information").offset().top,
    });
    $('#productScroll-spy a[href*="#"]').click(function (e) {
      e.preventDefault();
      $("#productScroll-spy .product-thumb").removeClass("active");
      $("html, body").animate(
        {
          scrollTop: $($.attr(this, "href")).offset().top + 20,
        },
        500
      );
    });
    var sliderMobile = $("#productCarousel-slider-mobile");
    sliderMobile.owlCarousel({
      items: 1,
      nav: true,
      dots: true,
      lazyLoad: true,
      loop: false,
      smartSpeed: 1000,
    });
  } else if (pro_template == "style_03") {
    if (productImg_size > 1) {
      var slickSlider = $("#productSlick-slider");
      var thumbnailSlider = $("#productSlick-thumb");
      slickSlider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        infinite: false,
        speed: 1000,
        asNavFor: "#productSlick-thumb",
        dots: false,
        prevArrow:
          '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"></button>',
        nextArrow:
          '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"></button>',
      });
      thumbnailSlider.slick({
        slidesToShow: 6,
        slidesToScroll: 6,
        asNavFor: "#productSlick-slider",
        dots: false,
        arrows: false,
        vertical: true,
        verticalSwiping: true,
        infinite: false,
        focusOnSelect: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 6,
              slidesToScroll: 6,
            },
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              vertical: false,
            },
          },
        ],
      });
      $(document).on(
        "click",
        "#productSlick-thumb .product-thumb__item",
        function (e) {
          e.preventDefault();
          $("#productSlick-thumb .product-thumb").removeClass("slick-current");
          $(this).parent().addClass("slick-current");
        }
      );
    }
  } else {
    if (productImg_size > 1) {
      var slider = $("#productCarousel-slider");
      var thumbnailSlider = $("#productCarousel-thumb");
      var duration = 500;

      slider.owlCarousel({
        items: 1,
        nav: true,
        dots: true,
        loop: false,
        smartSpeed: 1000,
      });
      slider.on("changed.owl.carousel", function (e) {
        thumbnailSlider.trigger("to.owl.carousel", [
          e.item.index,
          duration,
          true,
        ]);
        thumbnailSlider.find(".owl-item").removeClass("current");
        thumbnailSlider
          .find(".owl-item:nth-child(" + (e.item.index + 1) + ")")
          .addClass("current");
      });
      thumbnailSlider.on("initialized.owl.carousel", function () {
        thumbnailSlider.find(".owl-item").eq(0).addClass("current");
      });
      thumbnailSlider.owlCarousel({
        loop: false,
        nav: false,
        margin: 15,
        center: false,
        responsive: {
          0: {
            items: 4,
          },
          768: {
            items: 5,
          },
          992: {
            items: 6,
          },
          1200: {
            items: 6,
          },
        },
      });
      thumbnailSlider.on("changed.owl.carousel", function (e) {
        slider.trigger("to.owl.carousel", [e.item.index, duration, true]);
        slider.find(".owl-item").removeClass("current");
        slider
          .find(".owl-item:nth-child(" + (e.item.index + 1) + ")")
          .addClass("current");
      });
      thumbnailSlider.on("click", ".owl-item", function (e) {
        e.preventDefault();
        thumbnailSlider.find(".owl-item").removeClass("current");
        $(this).addClass("current");
        var number = $(this).index();
        slider.data("owl.carousel").to(number, duration, true);
      });
    }
  }
  $('.product-gallery__item[data-fancybox="gallery"]').fancybox({
    protect: true,
    hash: false,
    buttons: ["slideShow", "zoom", "thumbs", "close"],
    animationEffect: "zoom",
    infobar: false,
  });
});


var swatch_size = parseInt($("#add-item-form .select-swatch .swatch").length);
jQuery(document).on("click", "#add-item-form .swatch input", function (e) {
  e.preventDefault();
  var $this = $(this);
  var _available = "";
  $this.parent().siblings().find("label").removeClass("sd");
  $this.next().addClass("sd");
  var name = $this.attr("name");
  var value = $this.val();
  $("#add-item-form select[data-option=" + name + "]")
    .val(value)
    .trigger("change");
  if (swatch_size == 2) {
    if (name.indexOf("1") != -1) {
      $("#add-item-form #variant-swatch-1 .swatch-element")
        .find("input")
        .prop("disabled", false);
      $("#add-item-form #variant-swatch-2 .swatch-element")
        .find("input")
        .prop("disabled", false);
      $("#add-item-form #variant-swatch-1 .swatch-element label").removeClass(
        "sd"
      );
      $("#add-item-form #variant-swatch-1 .swatch-element").removeClass(
        "soldout"
      );
      $("#add-item-form .selector-wrapper .single-option-selector")
        .eq(1)
        .find("option")
        .each(function () {
          var _tam = $(this).val();
          $(this).parent().val(_tam).trigger("change");
          if (check_variant) {
            if (_available == "") {
              _available = _tam;
            }
          } else {
            $(
              '#add-item-form #variant-swatch-1 .swatch-element[data-value="' +
                _tam +
                '"]'
            ).addClass("soldout");
            $(
              '#add-item-form #variant-swatch-1 .swatch-element[data-value="' +
                _tam +
                '"]'
            )
              .find("input")
              .prop("disabled", true);
          }
        });
      $("#add-item-form .selector-wrapper .single-option-selector")
        .eq(1)
        .val(_available)
        .trigger("change");
      $(
        '#add-item-form #variant-swatch-1 .swatch-element[data-value="' +
          _available +
          '"] label'
      ).addClass("sd");
    }
  } else if (swatch_size == 3) {
    var _count_op2 = $(
      "#add-item-form #variant-swatch-1 .swatch-element"
    ).length;
    var _count_op3 = $(
      "#add-item-form #variant-swatch-2 .swatch-element"
    ).length;
    if (name.indexOf("1") != -1) {
      $("#add-item-form #variant-swatch-1 .swatch-element")
        .find("input")
        .prop("disabled", false);
      $("#add-item-form #variant-swatch-2 .swatch-element")
        .find("input")
        .prop("disabled", false);
      $("#add-item-form #variant-swatch-1 .swatch-element label").removeClass(
        "sd"
      );
      $("#add-item-form #variant-swatch-1 .swatch-element").removeClass(
        "soldout"
      );
      $("#add-item-form #variant-swatch-2 .swatch-element label").removeClass(
        "sd"
      );
      $("#add-item-form #variant-swatch-2 .swatch-element").removeClass(
        "soldout"
      );
      var _avi_op1 = "";
      var _avi_op2 = "";
      $("#add-item-form #variant-swatch-1 .swatch-element").each(function (
        ind,
        value
      ) {
        var _key = $(this).data("value");
        var _unavi = 0;
        $("#add-item-form .single-option-selector").eq(1).val(_key).change();
        $("#add-item-form #variant-swatch-2 .swatch-element label").removeClass(
          "sd"
        );
        $("#add-item-form #variant-swatch-2 .swatch-element").removeClass(
          "soldout"
        );
        $("#add-item-form #variant-swatch-2 .swatch-element")
          .find("input")
          .prop("disabled", false);
        $("#add-item-form #variant-swatch-2 .swatch-element").each(function (
          i,
          v
        ) {
          var _val = $(this).data("value");
          $("#add-item-form .single-option-selector").eq(2).val(_val).change();
          if (check_variant == true) {
            if (_avi_op1 == "") {
              _avi_op1 = _key;
            }
            if (_avi_op2 == "") {
              _avi_op2 = _val;
            }
            //console.log(_avi_op1 + ' -- ' + _avi_op2)
          } else {
            _unavi += 1;
          }
        });
        if (_unavi == _count_op3) {
          $(
            '#add-item-form #variant-swatch-1 .swatch-element[data-value = "' +
              _key +
              '"]'
          ).addClass("soldout");
          setTimeout(function () {
            $(
              '#add-item-form #variant-swatch-1 .swatch-element[data-value = "' +
                _key +
                '"] input'
            ).attr("disabled", "disabled");
          });
        }
      });
      $(
        '#add-item-form #variant-swatch-1 .swatch-element[data-value="' +
          _avi_op1 +
          '"] input'
      ).click();
    } else if (name.indexOf("2") != -1) {
      $("#add-item-form #variant-swatch-2 .swatch-element label").removeClass(
        "sd"
      );
      $("#add-item-form #variant-swatch-2 .swatch-element").removeClass(
        "soldout"
      );
      $("#add-item-form #variant-swatch-2 .swatch-element")
        .find("input")
        .prop("disabled", false);
      $("#add-item-form .selector-wrapper .single-option-selector")
        .eq(2)
        .find("option")
        .each(function () {
          var _tam = $(this).val();
          $(this).parent().val(_tam).trigger("change");
          if (check_variant) {
            if (_available == "") {
              _available = _tam;
            }
          } else {
            $(
              '#add-item-form #variant-swatch-2 .swatch-element[data-value="' +
                _tam +
                '"]'
            ).addClass("soldout");
            $(
              '#add-item-form #variant-swatch-2 .swatch-element[data-value="' +
                _tam +
                '"]'
            )
              .find("input")
              .prop("disabled", true);
          }
        });
      $("#add-item-form .selector-wrapper .single-option-selector")
        .eq(2)
        .val(_available)
        .trigger("change");
      $(
        '#add-item-form #variant-swatch-2 .swatch-element[data-value="' +
          _available +
          '"] label'
      ).addClass("sd");
    }
  } else {
  }
  if (pro_template == "style_02") {
    //check img style 2
    if (check_scrollstyle2 != "" && $(window).width() > 991 && fIndex == true) {
      var indeximg2 = $(
        "div.product-gallery[data-image='" + check_scrollstyle2 + "']"
      ).index();
      $("html, body").animate(
        {
          scrollTop:
            $(
              "#productScroll-slider div.product-gallery:eq(" + indeximg2 + ")"
            ).offset().top - 15,
        },
        800
      );
    }
  }
});
$(document).ready(function () {
  var _chage = "";
  $(
    '#add-item-form .swatch-element[data-value="' +
      $("#add-item-form .selector-wrapper .single-option-selector")
        .eq(0)
        .val() +
      '"]'
  )
    .find("input")
    .click();
  $(
    '#add-item-form .swatch-element[data-value="' +
      $("#add-item-form .selector-wrapper .single-option-selector")
        .eq(1)
        .val() +
      '"]'
  )
    .find("input")
    .click();
  if (swatch_size == 2) {
    var _avi_op1 = "";
    var _avi_op2 = "";
    var _count = $("#add-item-form #variant-swatch-1 .swatch-element").length;
    $("#add-item-form #variant-swatch-0 .swatch-element").each(function (
      ind,
      value
    ) {
      var _key = $(this).data("value");
      var _unavi = 0;
      $("#add-item-form .single-option-selector").eq(0).val(_key).change();
      $("#add-item-form #variant-swatch-1 .swatch-element").each(function (
        i,
        v
      ) {
        var _val = $(this).data("value");
        $("#add-item-form .single-option-selector").eq(1).val(_val).change();
        if (check_variant == true) {
          if (_avi_op1 == "") {
            _avi_op1 = _key;
          }
          if (_avi_op2 == "") {
            _avi_op2 = _val;
          }
        } else {
          _unavi += 1;
        }
      });
      if (_unavi == _count) {
        //$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');
        /*	$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').find('input').attr('disabled','disabled');*/
      }
    });
    $(
      '#add-item-form #variant-swatch-1 .swatch-element[data-value = "' +
        _avi_op2 +
        '"] input'
    ).click();
    $(
      '#add-item-form #variant-swatch-0 .swatch-element[data-value = "' +
        _avi_op1 +
        '"] input'
    ).click();
  } else if (swatch_size == 3) {
    var _avi_op1 = "";
    var _avi_op2 = "";
    var _avi_op3 = "";
    var _size_op2 = $(
      "#add-item-form #variant-swatch-1 .swatch-element"
    ).length;
    var _size_op3 = $(
      "#add-item-form #variant-swatch-2 .swatch-element"
    ).length;
    $("#add-item-form #variant-swatch-0 .swatch-element").each(function (
      ind,
      value
    ) {
      var _key_va1 = $(this).data("value");
      var _count_unavi = 0;
      $("#add-item-form .single-option-selector").eq(0).val(_key_va1).change();
      $("#add-item-form #variant-swatch-1 .swatch-element").each(function (
        i,
        v
      ) {
        var _key_va2 = $(this).data("value");
        var _unavi_2 = 0;
        $("#add-item-form .single-option-selector")
          .eq(1)
          .val(_key_va2)
          .change();
        $("#add-item-form #variant-swatch-2 .swatch-element").each(function (
          j,
          z
        ) {
          var _key_va3 = $(this).data("value");
          $("#add-item-form .single-option-selector")
            .eq(2)
            .val(_key_va3)
            .change();
          if (check_variant == true) {
            if (_avi_op1 == "") {
              _avi_op1 = _key_va1;
            }
            if (_avi_op2 == "") {
              _avi_op2 = _key_va2;
            }
            if (_avi_op3 == "") {
              _avi_op3 = _key_va3;
            }
          } else {
            _unavi_2 += 1;
          }
        });
        if (_unavi_2 == _size_op3) {
          _count_unavi += 1;
        }
      });
      if (_size_op2 == _count_unavi) {
        //$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').addClass('soldout');
        /*$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').find('input').attr('disabled','disabled');*/
      }
    });
    $(
      '#add-item-form #variant-swatch-0 .swatch-element[data-value = "' +
        _avi_op1 +
        '"] input'
    ).click();
  }
  if (pro_template == "style_02") {
    //stye 2
    fIndex = true;
    if (check_scrollstyle2 != "" && $(window).width() > 991) {
      var indeximg2 = $(
        "div.product-gallery[data-image='" + check_scrollstyle2 + "']"
      ).index();
      if (
        $(window).scrollTop() > $(".productDetail-information").offset().top
      ) {
        $("html, body").animate(
          {
            scrollTop:
              $(
                "#productScroll-slider div.product-gallery:eq(" +
                  indeximg2 +
                  ")"
              ).offset().top - 15,
          },
          800
        );
      }
    }
  }
});
$(document).ready(function () {
  var vl = $("#add-item-form .swatch .color input").val();
  $("#add-item-form .swatch .color input")
    .parents(".swatch")
    .find(".header strong")
    .html(vl);
  $("#add-item-form .select-swap .color").hover(
    function () {
      var value = $(this).data("value");
      $(this).parents(".swatch").find(".header strong").html(value);
    },
    function () {
      var value = $("#add-item-form .select-swap .color label.sd span").html();
      $(this).parents(".swatch").find(".header strong").html(value);
    }
  );
});

$(document).ready(function () {
  var vl = $("#add-item-form .swatch .color input").val();
  $("#add-item-form .swatch .color input")
    .parents(".swatch")
    .find(".header span")
    .html(vl);
  $("#add-item-form .select-swap .color").hover(
    function () {
      var value = $(this).data("value");
      $(this).parents(".swatch").find(".header span").html(value);
    },
    function () {
      var value = $("#add-item-form .select-swap .color label.sd span").html();
      $(this).parents(".swatch").find(".header span").html(value);
    }
  );
});

$(document).ready(function () {
  var expandable_content_height = $(
    ".expandable-toggle .description-productdetail"
  ).height();
  if (expandable_content_height > 220) {
    $(".expandable-toggle .description-productdetail").css({
      height: "220px",
      overflow: "hidden",
    });
  } else {
    $(".expandable-content_toggle").addClass("d-none");
  }
  $("body").on("click", ".js_expandable_content", function (e) {
    if (!$(".expandable-toggle").hasClass("opened")) {
      $(".expandable-content_toggle")
        .removeClass("btn-closemore")
        .addClass("btn-viewmore")
        .find(".expandable-content_toggle-text")
        .html("Xem thêm nội dung");
      var curHeight = $(
        ".expandable-toggle .description-productdetail"
      ).height();
      expandable_content_height = 220;
      $(".expandable-toggle .description-productdetail")
        .height(curHeight)
        .animate(
          {
            height: expandable_content_height,
          },
          300,
          function () {
            $(this).parent().addClass("opened");
          }
        );
      var x = $(".product-description").offset().top;
      HRT.All.smoothScroll(x - 90, 250);
    } else {
      $(".expandable-toggle .description-productdetail").css("height", "auto");
      $(".expandable-toggle").removeClass("opened");
      $(".expandable-content_toggle")
        .removeClass("btn-viewmore")
        .addClass("btn-closemore")
        .find(".expandable-content_toggle-text")
        .html("Rút gọn nội dung");
    }
  });
});

$(document).ready(function () {
  $("#add-to-cart").click(function (e) {
    e.preventDefault();
    var variant_id = $("#product-select").val(),
      quantity = $("#quantity").val(),
      title = $(".productDetail--content .product-heading h1").html();
    buyXgetY.addCartBuyXGetY_detail(
      false,
      variant_id,
      currentId,
      quantity,
      title,
      "normal",
      function () {
        HRT.All.getCartModal(true);
        //console.log(1)
        if ($(window).width() < 992) {
          $("body").removeClass("locked-scroll").addClass("body-showcart");
          $(".siteCart-mobile").addClass("show-cart");
        }
      }
    );
  });
  $("#buy-now").click(function (e) {
    e.preventDefault();
    var variant_id = $("#product-select").val(),
      quantity = $("#quantity").val(),
      title = $(".productDetail--content .product-heading h1").html();
    buyXgetY.addCartBuyXGetY_detail(
      false,
      variant_id,
      currentId,
      quantity,
      title,
      "normal buynow",
      function () {
        window.location = "../cart.html";
      }
    );
  });
});
