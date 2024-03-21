$(document).ready(function () {
  var count = 0;
  var slider = null;
  var modal = $("#quick-view-modal");
  modal.on("shown.bs.modal", function (event) {
    var button = $(event.relatedTarget);
    var data_whatever = button.data("whatever");
    var projectDetail = data_whatever.data ?? "";
    var cate = data_whatever.cate ?? "";
    var salePrice = data_whatever.salePrice ?? "";
    var textSell = data_whatever.textsell ?? "";
    var sizes = data_whatever.sizes ?? [];
    var colors = data_whatever.colors ?? [];
    var priceProductDef = projectDetail.product_sku.find(function (product) {
      return product.is_default === 1;
    });
    // console.log(sizes);
    // console.log(colors);

    var modal = $(this);
    var img = projectDetail.photo ? projectDetail.photo.split(",") : [];
    modal.find(".product-heading h2").text(projectDetail.title);

    // Thay đổi HTML của .productDetail--gallery
    var productGalleryHtml = `
                <div class="productDetail--gallery">
                        <div class="wrapbox-image">
                            <ul class="owl-carousel owl-loaded owl-drag" id="image-gallery-product">`;

    img.forEach(function (imageSrc) {
      productGalleryHtml += `
                    <li class="product-thumb" data-thumb="${imageSrc}">
                        <img src="${imageSrc}" alt="${projectDetail.title}">
                    </li>`;
    });

    productGalleryHtml += `</ul></div>`;
    if (salePrice > 0 && salePrice < priceProductDef.price) {
      productGalleryHtml +=
        '<div class="product-percent"><span class="pro-sale">- ' +
        textSell +
        " <br> OFF</span></div>";
    } else {
      productGalleryHtml += '<div class="product-percent"></div>';
    }

    productGalleryHtml += `</div>`;

    modal.find(".productDetail--gallery").replaceWith(productGalleryHtml);

    // Thêm HTML mới vào .productDetail--content
    var productContentHtml = '<div class="productDetail--content">';
    productContentHtml += '<div class="wrapbox-detail">';
    productContentHtml += '<div class="product-heading">';
    productContentHtml += "<h2>" + projectDetail.title + "</h2>";
    productContentHtml +=
      '<span class="pro_sku">Mã sản phẩm: <strong>' +
      projectDetail.sku +
      "</strong></span>";
    productContentHtml +=
      '<span class="pro-soldold">Đã bán: <strong>' +
      projectDetail.status +
      "</strong></span>";
    productContentHtml +=
      '<span class="pro-vendor">Thể loại: <strong><a title="Show vendor" href="' +
      "#" +
      '">' +
      cate.title +
      "</a></strong></span>";
    productContentHtml += "</div>";

    if (salePrice > 0 && salePrice < priceProductDef.price) {
      productContentHtml +=
        '<div class="product-price" id="price-preview-quickview"><span class="pro-title">Giá: </span><span class="pro-price">' +
        salePrice.toLocaleString() +
        "₫</span><del>" +
        priceProductDef.price.toLocaleString() +
        '₫</del><span class="pro-percent">-' +
        textSell +
        "</span></div>";
    } else {
      productContentHtml +=
        '<div class="product-price" id="price-preview-quickview"><span class="pro-title">Giá: </span><span class="pro-price">' +
        priceProductDef.price.toLocaleString() +
        "₫</span></div>";
    }
    productContentHtml += '<div class="product-variants">';
    productContentHtml +=
      '<form id="add-item-form-quickview" action="/cart/add" method="post" class="variants clearfix">';
    productContentHtml += `<div class="select clearfix">
                                        <div class="selector-wrapper"><label for="product-select-quickview-option-0">Màu sắc</label><select class="single-option-selector" data-option="option1" id="product-select-quickview-option-0">
                                                <option value="Hồng">Hồng</option>
                                                <option value="Tím">Tím</option>
                                                <option value="Xanh lá cây">Xanh lá cây</option>
                                            </select></div>
                                        <div class="selector-wrapper"><label for="product-select-quickview-option-1">Kích thước</label><select class="single-option-selector" data-option="option2" id="product-select-quickview-option-1">
                                            <option value="D152xR102">D152xR102</option>
                                            </select></div><select id="product-select-quickview" name="id" style="display:none;">
                                            <option value="1114835122">Hồng / D152xR102 - 139,000₫</option>
                                            <option value="1114835123">Tím / D152xR102 - 139,000₫</option>
                                            <option value="1114835124">Xanh lá cây / D152xR102 - 139,000₫</option>
                                        </select>
                                    </div>`;
    productContentHtml += `<div class="select-swatch clearfix">
                                        <div id="variant-swatch-0-quickview" class="swatch clearfix" data-option="option1" data-option-index="0">
                                            <div class="title-swap header">Màu sắc: <strong>Hồng</strong></div>
                                            <div class="select-swap">`;
    colors.forEach(function (color) {
      productContentHtml += `<div data-value="${color.title}" class="n-sd swatch-element color ${color.code}  ">
                                            <input class="variant-${color.id}" id="swatch-0-${color.code}-quickview" type="radio" name="option1" value="${color.title}" data-vhandle="${color.code}" checked="">
                                            <label class="${color.code} sd" for="swatch-0-${color.code}-quickview">
                                                <span>${color.title}</span>
                                            </label>
                                        </div>`;
    });

    productContentHtml += `</div>
                                    </div>
                                        <div id="variant-swatch-1-quickview" class="swatch clearfix" data-option="option2" data-option-index="1">
                                            <div class="title-swap header">Kích thước: </div>
                                            <div class="select-swap">`;

    sizes.forEach(function (size) {
      productContentHtml += `<div data-value="${size.title}" class="n-sd swatch-element ${size.code}">
                                                    <input class="variant-1" id="swatch-1-${size.code}-quickview" type="radio" name="option2" value="${size.title}" data-vhandle="${size.code}" checked="">
                                                    <label for="swatch-1-${size.code}-quickview" class="sd">
                                                        <span>${size.title}</span>
                                                    </label>
                                                </div>`;
    });
    productContentHtml += `</div>
                                    </div>
                                    </div>`;
    productContentHtml += "</form>";

    // Tiếp tục thêm phần HTML mới vào .productDetail--content ở đây
    productContentHtml += "</div>";
    productContentHtml += '<div class="product-appxy">';
    productContentHtml += `<div class="product-buyxgety q-selector-buyxgety d-none">
                                    <div id="buyxgety-program">
                                        <div class="buyxgety-heading">
                                            <h3>Các sản phẩm được tặng kèm</h3>
                                            <p>Chọn 1 trong các loại quà tặng</p>
                                        </div>
                                        <div id="buyxgety-product-list" data-id="1051064533" data-title="Chăn Sofa BELLA">
                                            <div class="buyxgety_content clearfix">
                                                <div class="buyxgety_lists"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
    productContentHtml += "</div>";

    // Tiếp tục thêm phần HTML mới vào .productDetail--content ở đây
    productContentHtml +=
      '<div class="product-viewaction quickview-toolbarproduct" id="toolbarProduct">';
    productContentHtml += `<div class="productToolbar-addcart">
                                    <div class="product-actions">
                                        <div class="block-quantity quantity-selector ">
                                            <div class="quantity-title">Số lượng:</div>
                                            <button type="button" onclick="HRT.Quickview.minusQtyView()" class="qty-btn">
                                                <svg focusable="false" class="icon icon--minus " viewBox="0 0 10 2" role="presentation">
                                                    <path d="M10 0v2H0V0z"></path>
                                                </svg>
                                            </button>
                                            <input type="text" id="quickview-qtyvalue" name="quantity" value="1" min="1" class="quickview-qtyvalue quantity-number">
                                            <button type="button" onclick="HRT.Quickview.plusQtyView()" class="qty-btn">
                                                <svg focusable="false" class="icon icon--plus " viewBox="0 0 10 10" role="presentation">
                                                    <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z"></path>
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="block-addcart">
                                            <button type="button" id="add-to-cartQuickview" data-pid="1051064533" class="add-to-cartProduct button dark btn-addtocart addtocart-modal btnred" name="add"><span>Thêm vào giỏ</span></button>
                                        </div>
                                    </div>
                                </div>`;
    productContentHtml += "</div>";
    productContentHtml += '<div class="product-toshare">';
    productContentHtml += `<span>Chia sẻ: </span>
                        <a href="{{$config->facebook}}" target="_blank" class="share-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="{{$config->instagram}}" target="_blank" class="share-twitter">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="{{$config->youtube}}" target="_blank" class="share-pinterest">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>`;
    productContentHtml += "</div>";

    // Tiếp tục thêm phần HTML mới vào .productDetail--content ở đây
    productContentHtml += '<div class="product-viewdetail text-left">';
    productContentHtml +=
      '<a href="/products/chan-sofa-bella" class="productdetail-link">Xem chi tiết sản phẩm</a>';
    productContentHtml +=
      '<i class="fa fa-angle-double-right" aria-hidden="true"></i>';
    productContentHtml += "</div>";
    productContentHtml += "</div>";
    productContentHtml += "</div>";
    modal.find(".productDetail--content").replaceWith(productContentHtml);

    slider = $("#image-gallery-product").lightSlider({
      gallery: true,
      item: 1,
      thumbItem: 6,
      slideMargin: 0,
      speed: 500,
      pauseOnHover: true,
      controls: true,
      prevHtml:
        "<svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-chevron-left' viewBox='0 0 16 16'> <path fill-rule='evenodd' d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0' /> </svg>",
      nextHtml:
        "<svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-chevron-right' viewBox='0 0 16 16'> <path fill-rule='evenodd' d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708' /></svg>",
      // responsive: [{
      //         breakpoint: 990,
      //         settings: {
      //             gallery: true,

      //         },
      //         breakpoint: 900,
      //         settings: {
      //             gallery: false,

      //         }
      //     },
      // ],
    });
  });
  modal.on("hidden.bs.modal", function (event) {
    // console.log(123);
    if (slider) {
      slider.refresh();
      // slider.destroy();
    }
    modal.find(".productDetail--gallery").empty();
    modal.find(".productDetail--content").empty();
  });
});
