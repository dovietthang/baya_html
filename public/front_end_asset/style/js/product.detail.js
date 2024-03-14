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

var check_variant = true;
var fIndex = false;
var check_scrollstyle2 = "";
var selectCallback = function (variant, selector) {
  if (variant) {
    if (variant.inventory_management == null) {
      jQuery(".product-available").find(".txt-inventory").html("");
    } else {
      var inventoryQty = variant.inventory_quantity;
      if (inventoryQty == 0) {
        jQuery(".product-available").find(".txt-inventory").html("Đã bán hết");
      } else {
        if (inventoryQty > 10) {
          jQuery(".product-available").find(".txt-inventory").html("");
        } else {
          jQuery(".product-available")
            .find(".txt-inventory")
            .html("Đã bán gần hết");
        }
      }
    }
    if (variant.featured_image != null) {
      //style 01
      if (pro_template == "style_01" || pro_template == "style_04") {
        var indeximg = $(
          "li.product-gallery[data-image='" +
            Haravan.resizeImage(variant.featured_image.src, "master").replace(
              "chan-sofia.html",
              ""
            ) +
            "']"
        )
          .parent()
          .index();
        $("#productCarousel-slider").trigger("to.owl.carousel", [
          indeximg,
          500,
        ]);
        $("#productCarousel-thumb").find(".owl-item").removeClass("current");
        $("#productCarousel-thumb")
          .find(".owl-item:nth-child(" + (indeximg + 1) + ")")
          .addClass("current");
      }
      //style 02
      if (pro_template == "style_02") {
        check_scrollstyle2 = Haravan.resizeImage(
          variant.featured_image.src,
          "master"
        ).replace("chan-sofia.html", "");
        if ($(window).width() < 992) {
          var indeximg_mb = $(
            "#productCarousel-slider-mobile li.product-gallery[data-image='" +
              Haravan.resizeImage(variant.featured_image.src, "master").replace(
                "chan-sofia.html",
                ""
              ) +
              "']"
          )
            .parent()
            .index();
          $("#productCarousel-slider-mobile").trigger("to.owl.carousel", [
            indeximg_mb,
            500,
          ]);
        }
      }
      //style 03
      if (pro_template == "style_03") {
        var indeximg = $(
          "li.product-gallery[data-image='" +
            Haravan.resizeImage(variant.featured_image.src, "master").replace(
              "chan-sofia.html",
              ""
            ) +
            "']"
        ).index();
        $("#productSlick-slider").slick("slickGoTo", indeximg);
        $("#productSlick-thumb")
          .find(".slick-slide")
          .removeClass("slick-current");
        $("#productSlick-thumb")
          .find(".slick-slide:nth-child(" + (indeximg + 1) + ")")
          .addClass("slick-current");
      }
    }
    if (variant.sku != null) {
      jQuery("#pro_sku").html(
        "Mã sản phẩm: " + "<strong>" + variant.sku + "</strong> "
      );
    }
    if (variant.price < variant.compare_at_price) {
      var pro_sold = variant.price;
      var pro_comp = variant.compare_at_price / 100;
      var sale = 100 - pro_sold / pro_comp;
      var kq_sale = Math.round(sale);
      jQuery(".product-percent").html(
        '<span class="pro-sale">-' + kq_sale + "%<br> OFF </span>"
      );
      var html =
        '<span class="pro-title">Giá: </span>' +
        '<span class="pro-price">' +
        Haravan.formatMoney(pro_sold, "{{amount}}₫") +
        "</span>" +
        "<del>" +
        Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫") +
        "</del>" +
        '<span class="pro-percent">-' +
        kq_sale +
        "%</span>";
      jQuery("#price-preview").html(html);
    } else {
      jQuery(".product-percent").html("");
      jQuery("#price-preview").html(
        "<span class='pro-title'>Giá: </span>" +
          "<span class='pro-price'>" +
          Haravan.formatMoney(variant.price, "{{amount}}₫" + "</span>")
      );
    }
    if (variant.available) {
      jQuery(".productToolbar-addcart .add-to-cartProduct")
        .removeAttr("disabled")
        .removeClass("disabled")
        .html("<span>Thêm vào giỏ</span>");
      jQuery(".addcart-area .add-to-cartProduct")
        .removeAttr("disabled")
        .removeClass("disabled")
        .html("<span>Thêm vào giỏ</span>");
      jQuery("#detail-product #buy-now")
        .removeAttr("disabled")
        .removeClass("disabled")
        .html("<span>Mua ngay</span>")
        .show();
      jQuery("#detail-product .pro-soldold strong").text("Còn hàng");
      check_variant = true;
    } else {
      jQuery(".productToolbar-addcart .add-to-cartProduct")
        .addClass("disabled")
        .attr("disabled", "disabled")
        .html("<span>Hết hàng</span>");
      jQuery(".addcart-area .add-to-cartProduct")
        .addClass("disabled")
        .attr("disabled", "disabled")
        .html("<span>Hết hàng</span>");

      jQuery("#detail-product #buy-now")
        .addClass("disabled")
        .attr("disabled", "disabled")
        .html("<span>Hết hàng</span>")
        .hide();
      var message = variant ? "Hết hàng" : "Không có hàng";
      jQuery("#detail-product .pro-soldold strong").text(message);
      check_variant = false;
    }
  } else {
    jQuery(".productToolbar-addcart .add-to-cartProduct")
      .addClass("disabled")
      .attr("disabled", "disabled")
      .html("<span>Hết hàng</span>");
    jQuery(".addcart-area	 .add-to-cartProduct")
      .addClass("disabled")
      .attr("disabled", "disabled")
      .html("<span>Hết hàng</span>");
    jQuery("#detail-product #buy-now")
      .addClass("disabled")
      .attr("disabled", "disabled")
      .html("<span>Hết hàng</span>")
      .hide();
    var message = "Hết hàng";
    jQuery("#detail-product .pro-soldold strong").text(message);
    check_variant = false;
  }
  return check_variant;
};
jQuery(document).ready(function ($) {
  new Haravan.OptionSelectors("product-select", {
    product: {
      available: true,
      compare_at_price_max: 59900000.0,
      compare_at_price_min: 29900000.0,
      compare_at_price_varies: true,
      compare_at_price: 59900000.0,
      content: null,
      description:
        '<ul><li>Chăn được làm từ100% polyester dạng lông mềm mại, nỉ có độ bền cao, bền màu, nhẹ, giữ nhiệt và giữa ấm tốt, không phai màu, không bị rụng lông trong quá trình sử dụng</li><li>Bề mặt chăn mềm mại, mịn màng như nhung , trọng lượng nhẹ, tạo cảm giác dễ chịu, thoải mái, giúp mang lại giấc ngủ ngon và ấm áp cho bạn, an toàn với làn da trẻ em, nhạy cảm đem lại trải nghiệm tuyệt vời.</li><li>Chăn với các sợi lông siêu nhỏ kết hợp cùng đặc điểm của len lông đó là nhẹ và có tính cách nhiệt rất tốt, nên khi đắp ngay lập tức sẽ mang lại cảm giác ấm áp và luôn tạo sự thoải mái dễ chịu cho người dùng. Ngoài ra, với kỹ thuật dệt may tiên tiến còn giúp cho chăn không chỉ ấm mà còn tạo sự thông thoáng, không bị ẩm hay bí khí. Chất liệu chất lượng cao, không phai màu khi giặt, không bị rụng lông trong suốt quá trình sử dụng.</li><li>Họa tiết màu sắc tươi sáng tạo cảm giác ấm cúng.</li><li>Sản phẩm có thể sử dụng với nhiều công dụng khác nhau như làm chăn văn phòng, chăn đắp khi ngủ, chăn thư giãn sofa, chăn đắp trên ô tô, khi đi du lịch… với mục đích nào thì cũng khiến bạn cảm thấy dễ chịu, vừa thoáng khí và vô cùng ấm áp.</li><li>Xuất xứ: Thái Lan</li></ul><p>----------</p><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Chăn</td></tr><tr><th scope="row">Bộ sưu tập</th><td>SOFIA</td></tr><tr><th scope="row">Kích cỡ</th><td>L200xW150</td></tr><tr><th scope="row">Màu sắc</th><td>Hồng</td></tr><tr><th scope="row">Chất liệu</th><td>Vải tổng hợp</td></tr><tr><th scope="row">Xuất xứ</th><td>Thái Lan</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------<div><ul><li>Có thể giặt được bằng máy giặt và bằng tay.</li><li>Giặt bằng máy ở chế độ nhẹ nhàng, nhiệt độ tối đa là 40 độ C</li><li>Không giặt với đồ tối màu</li><li>Không sử dụng chất tẩy</li><li>Sấy ở nhiệt độ thấp</li><li>Không giặt khô</li><li>Không được là</li></ul><p>&nbsp;</p></div>',
      featured_image:
        "https://product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203.jpg",
      handle: "chan-sofia",
      id: 1051064712,
      images: [
        "https://product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203.jpg",
        "../../product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_1_07473a4c913e44d18a33f0cccdd020dd.jpg",
        "../../product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_2_3303da2e6a3442dbb7124eea57bc5a4a.jpg",
        "../../product.hstatic.net/200000796751/product/sofia_comforter_baya_2000576_ad9a2a22607b4f8ca084944ed33adbbf.jpg",
        "../../product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_1_4ee4805e62514375ab101749d3baee6c.jpg",
        "https://product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_2_12a1217fa0a84c8e86a26db0d174d6bd.jpg",
      ],
      options: ["Màu sắc", "Kích thước"],
      price: 20900000.0,
      price_max: 41900000.0,
      price_min: 20900000.0,
      price_varies: true,
      tags: [
        "Chăn ga gối",
        "bán chạy",
        "Phòng khách",
        "Nội thất phòng khách",
        "sale outlet",
        "outlet",
        "Biggest Sale",
        "Chăn",
        "Sale30",
        "Dailysale T3",
      ],
      template_suffix: null,
      title: "Chăn Sofa Vải Tổng Hợp Nhiều Màu SOFIA",
      type: "Chăn",
      url: "/products/chan-sofia",
      pagetitle: "Chăn Sofa Vải Tổng Hợp SOFIA",
      metadescription:
        "Chăn được làm từ100% polyester dạng lông mềm mại, nỉ có độ bền cao, bền màu, nhẹ, giữ nhiệt và giữa ấm tốt, không phai màu, không bị rụng lông trong quá trình sử dụngBề mặt chăn mềm mại, mịn màng như nhung , trọng lượng nhẹ, tạo cảm giác dễ chịu, thoải mái, giúp mang lại giấc ngủ ngon và ấm áp cho bạn, an toàn với làn",
      variants: [
        {
          id: 1114835500,
          barcode: "2000574",
          available: true,
          price: 41900000.0,
          sku: "2000574",
          option1: "Hồng 1",
          option2: "D200xR150",
          option3: "",
          options: ["Hồng 1", "D200xR150"],
          inventory_quantity: 49.0,
          old_inventory_quantity: 49.0,
          title: "Hồng 1 / D200xR150",
          weight: 600.0,
          compare_at_price: 59900000.0,
          inventory_management: "haravan",
          inventory_policy: "deny",
          selected: false,
          url: null,
          featured_image: {
            id: 1354693645,
            created_at: "0001-01-01T00:00:00",
            position: 1,
            product_id: 1051064712,
            updated_at: "0001-01-01T00:00:00",
            src: "https://product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203.jpg",
            variant_ids: [1114835500],
          },
        },
        {
          id: 1114835501,
          barcode: "2000575",
          available: true,
          price: 27900000.0,
          sku: "2000575",
          option1: "Hồng 2",
          option2: "D200xR150",
          option3: "",
          options: ["Hồng 2", "D200xR150"],
          inventory_quantity: 5.0,
          old_inventory_quantity: 5.0,
          title: "Hồng 2 / D200xR150",
          weight: 600.0,
          compare_at_price: 39900000.0,
          inventory_management: "haravan",
          inventory_policy: "deny",
          selected: false,
          url: null,
          featured_image: {
            id: 1354693675,
            created_at: "0001-01-01T00:00:00",
            position: 2,
            product_id: 1051064712,
            updated_at: "0001-01-01T00:00:00",
            src: "https://product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_1_07473a4c913e44d18a33f0cccdd020dd.jpg",
            variant_ids: [1114835501],
          },
        },
        {
          id: 1114835502,
          barcode: "2000576",
          available: true,
          price: 41900000.0,
          sku: "2000576",
          option1: "Hồng / đỏ",
          option2: "D203xR152",
          option3: "",
          options: ["Hồng / đỏ", "D203xR152"],
          inventory_quantity: 16.0,
          old_inventory_quantity: 16.0,
          title: "Hồng / đỏ / D203xR152",
          weight: 600.0,
          compare_at_price: 59900000.0,
          inventory_management: "haravan",
          inventory_policy: "deny",
          selected: false,
          url: null,
          featured_image: {
            id: 1354693683,
            created_at: "0001-01-01T00:00:00",
            position: 4,
            product_id: 1051064712,
            updated_at: "0001-01-01T00:00:00",
            src: "https://product.hstatic.net/200000796751/product/sofia_comforter_baya_2000576_ad9a2a22607b4f8ca084944ed33adbbf.jpg",
            variant_ids: [1114835502],
          },
        },
        {
          id: 1114835503,
          barcode: "2000587",
          available: true,
          price: 20900000.0,
          sku: "2000587",
          option1: "Hồng 2",
          option2: "D152xR127",
          option3: "",
          options: ["Hồng 2", "D152xR127"],
          inventory_quantity: 43.0,
          old_inventory_quantity: 43.0,
          title: "Hồng 2 / D152xR127",
          weight: 600.0,
          compare_at_price: 29900000.0,
          inventory_management: "haravan",
          inventory_policy: "deny",
          selected: false,
          url: null,
          featured_image: {
            id: 1354693690,
            created_at: "0001-01-01T00:00:00",
            position: 5,
            product_id: 1051064712,
            updated_at: "0001-01-01T00:00:00",
            src: "https://product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_1_4ee4805e62514375ab101749d3baee6c.jpg",
            variant_ids: [1114835503],
          },
        },
      ],
      vendor: "SOFIA",
      published_at: "2023-11-01T13:25:54.615Z",
      created_at: "2023-10-31T18:16:51.091Z",
      not_allow_promotion: false,
    },
    onVariantSelected: selectCallback,
  });
  // Add label if only one product option and it isn't 'Title'.

  // Auto-select first available variant on page load.

  $("#detail-product .single-option-selector:eq(0)")
    .val("Hồng 1")
    .trigger("change");

  $("#detail-product .single-option-selector:eq(1)")
    .val("D200xR150")
    .trigger("change");

  $("#detail-product .selector-wrapper select").each(function () {
    $(this).wrap(
      '<span class="custom-dropdown custom-dropdown--white"></span>'
    );
    $(this).addClass("custom-dropdown__select custom-dropdown__select--white");
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
