var hasChangeSort = false;
var activeFilter = true;
var activeSort = true;
function sortby() {
  var parent = this;
  var collectionsort = "best-selling";
  Haravan.queryParams = {};
  if (location.search.length) {
    for (
      var aKeyValue, i = 0, aCouples = location.search.substr(1).split("&");
      i < aCouples.length;
      i++
    ) {
      aKeyValue = aCouples[i].split("=");
      if (aKeyValue.length > 1) {
        Haravan.queryParams[decodeURIComponent(aKeyValue[0])] =
          decodeURIComponent(aKeyValue[1]);
      }
    }
  }
  jQuery(".sort-by li").each(function () {
    if ($(this).find("span").data("value") == collectionsort) {
      $(this).addClass("active");
    }
  });
}
function closeFilterMobile() {
  $(".collection-filter")
    .find(".layered_filter_parent")
    .removeClass("show-filter");
  setTimeout(function () {
    $(".collection-filter").find(".layered_filter_parent").fadeOut();
    $(".layered_filter_parent .overlays-rgba").remove();
  }, 100);
}

var query = "",
  total_page = 0,
  total_product = 0,
  cur_page = 1,
  str = "",
  sortByPicked = "";
//var current = $(".product-loop").length;
//console.log(current)
jQuery(document).ready(function () {
  sortby();
  // jQuery(".sort-by li").click(function () {
  //   hasChangeSort = true;
  //   if ($(this).hasClass("active")) {
  //   } else {
  //     var defaultSort = $(this).find("span").data("value");
  //     $(".sort-by li").removeClass("active");
  //     $(".checkbox-sortby li").removeClass("active");
  //     $(this).addClass("active");
  //     $('.checkbox-sortby li span[data-value="' + defaultSort + '"]')
  //       .parent()
  //       .addClass("active");
  //     Stringfilter();
  //   }
  // });
  // jQuery(".checkbox-sortby li").click(function () {
  //   if ($(this).hasClass("active")) {
  //   } else {
  //     $(".checkbox-sortby li").removeClass("active");
  //     $(this).addClass("active");
  //   }
  // });
  // jQuery(".checkbox-list li > input").click(function () {
  //   jQuery(this).parent().toggleClass("active");
  //   if (jQuery(window).width() >= 992) Stringfilter();
  //   var indexTitle = jQuery(this).parents(".filter_group").index();
  //   if (jQuery(this).parents(".filter_group").find("li.active").length > 0) {
  //     var textFilter = [];
  //     jQuery(this)
  //       .parents(".filter_group")
  //       .find("li.active")
  //       .each(function () {
  //         var textVal = $(this).find("label").html();
  //         textFilter.push(textVal);
  //       });
  //     //console.log(textFilter)
  //     $(".filter_tags:eq(" + indexTitle + ") b")
  //       .html(textFilter.join(","))
  //       .parent()
  //       .addClass("opened");
  //     if ($(".filter_tags:not(.filter_tags_remove_all).opened").length > 1) {
  //       $(".filter_tags_remove_all").addClass("opened");
  //     }
  //   } else {
  //     $(".filter_tags:eq(" + indexTitle + ") b")
  //       .html("")
  //       .parent()
  //       .removeClass("opened");
  //     $(".filter_tags_remove_all").removeClass("opened");
  //   }

  //   if ($(".checkbox-list li.active").length == 0) {
  //     $(".btn-collection.btn_clear_filter").hide();
  //   } else {
  //     $(".btn-collection.btn_clear_filter").show();
  //   }
  //   //console.log($('.checkbox-list li.active').length)
  // });
  // jQuery(".filter_tags_remove").click(function () {
  //   $(this).parent().removeClass("opened").find("b").html();
  //   var indexClick = $(this).parent().index();
  //   $(".filter_group:eq(" + indexClick + ") li.active input").prop(
  //     "checked",
  //     false
  //   );
  //   $(".filter_group:eq(" + indexClick + ") li.active").removeClass("active");
  //   if ($(".filter_tags:not(.filter_tags_remove_all).opened").length == 1) {
  //     $(".filter_tags_remove_all").removeClass("opened");
  //   }
  //   if ($(".checkbox-list li.active").length == 0) {
  //     LoadOrigin();
  //     hasChangeSort = false;
  //   } else {
  //     Stringfilter();
  //   }
  // });
  // jQuery(".filter_tags_remove_all").click(function () {
  //   $(".checkbox-list li.active input").prop("checked", false);
  //   $(".checkbox-list li.active").removeClass("active");
  //   $(".filter_tags b").html("").parent().removeClass("opened");
  //   $(".filter_tags_remove_all").removeClass("opened");
  //   hasChangeSort = false;
  //   LoadOrigin();
  // });
  // jQuery(".btn_clear_filter").on("click", function () {
  //   $(".checkbox-list li.active input").prop("checked", false);
  //   $(".checkbox-list li.active").removeClass("active");
  //   $(".filter_tags b").html("").parent().removeClass("opened");
  //   $(".filter_tags_remove_all").removeClass("opened");
  //   $(".btn-collection.btn_clear_filter").hide();
  //   hasChangeSort = false;
  //   LoadOrigin();
  // });
  // jQuery("#apply-btn-filter").on("click", function () {
  //   if ($(".checkbox-list li.active").length == 0) {
  //     var dataSort = $(".checkbox-sortby li.active").find("span").data("value");
  //     $('.sort-by li span[data-value="' + dataSort + '"]').trigger("click");
  //   } else {
  //     Stringfilter();
  //   }
  //   closeFilterMobile();
  // });
  // jQuery("#clear-btn-filter").on("click", function () {
  //   if ($(".checkbox-list li.active").length == 0) {
  //     var originSort = $(".sort-by li.active").find("span").data("value");
  //     $(".checkbox-sortby li").removeClass("active");
  //     $('.checkbox-sortby li span[data-value="' + originSort + '"]')
  //       .parent()
  //       .addClass("active");
  //   } else {
  //     $(".checkbox-list li.active input").prop("checked", false);
  //     $(".checkbox-list li.active").removeClass("active");
  //     $(".filter_tags b").html("").parent().removeClass("opened");
  //     $(".filter_tags_remove_all").removeClass("opened");
  //     hasChangeSort = false;
  //     LoadOrigin();
  //   }
  //   closeFilterMobile();
  // });

  // var Stringfilter = function () {
  //   var q = "",
  //     gia = "",
  //     vendor = "",
  //     color = "",
  //     size = "",
  //     sortBy = "";
  //   var handle_coll = $("#coll-handle").val();

  //   var pathName = window.location.pathname;
  //   if (pathName.indexOf("vendors") > -1) {
  //     handle_coll =
  //       "(vendor:product contains " + paramUrl.q.replaceAll("-", " ") + ")";
  //     //console.log(handle_coll)
  //   }
  //   if (pathName.indexOf("types") > -1) {
  //     handle_coll =
  //       "(product_type:product=" + paramUrl.q.replaceAll("-", " ") + ")";
  //   }
  //   var str_url = "filter%3d.html";
  //   q = "(" + handle_coll;

  //   jQuery(".filter-price ul.checkbox-list li.active").each(function () {
  //     gia = gia + jQuery(this).find("input").data("price") + "||";
  //   });
  //   gia = gia.substring(0, gia.length - 2);
  //   if (gia != "") {
  //     gia = "(" + gia + ")";
  //     q += "&&" + gia;
  //   }

  //   jQuery(".filter-brand ul.checkbox-list li.active").each(function () {
  //     vendor = vendor + jQuery(this).find("input").data("vendor") + "||";
  //   });
  //   vendor = vendor.substring(0, vendor.length - 2);
  //   if (vendor != "") {
  //     vendor = "(" + vendor + ")";
  //     q += "&&" + vendor;
  //   }

  //   jQuery(".filter-color ul.checkbox-list li.active").each(function () {
  //     color = color + jQuery(this).find("input").data("color") + "||";
  //     //size2 = size2 + jQuery(this).data('s') + '--';
  //   });
  //   color = color.substring(0, color.length - 2);
  //   if (color != "") {
  //     color = "(" + color + ")";
  //     q += "&&" + color;
  //   }
  //   jQuery(".filter-size ul.checkbox-list li.active").each(function () {
  //     size = size + jQuery(this).find("input").data("size") + "||";
  //   });
  //   size = size.substring(0, size.length - 2);
  //   if (size != "") {
  //     size = "(" + size + ")";
  //     q += "&&" + size;
  //   }
  //   if ($(".sort-by").length > 0) {
  //     $(".sort-by li").each(function () {
  //       if ($(this).hasClass("active")) {
  //         if ($(this).find("span").data("value") == "manual") {
  //           sortBy = "";
  //         } else {
  //           sortBy = "&sortby=" + $(this).find("span").data("filter");
  //         }
  //       }
  //     });
  //     sortByPicked = sortBy;
  //   }
  //   //console.log(str_url + q)
  //   str_url += encodeURIComponent(q) + ")";
  //   str = str_url;

  //   // jQuery.ajax({
  //   //   // lấy tổng số trang của kết quả filter
  //   //   url: "/search?q=" + str_url + "&view=pagesize",
  //   //   async: false,
  //   //   success: function (data) {
  //   //     data = JSON.parse(data);
  //   //     total_page = parseInt(data.pages);
  //   //     total_product = parseInt(data.products);
  //   //   },
  //   // });
  //   if (cur_page <= total_page) {
  //     // jQuery.ajax({
  //     //   url: "/search?q=" + str_url + "&view=filter" + sortBy,
  //     //   success: function (data) {
  //     //     setTimeout(function () {
  //     //       $(".product-noloop").remove();
  //     //       $(".listProduct-filter").html("");
  //     //       $(".listProduct-filter").html(data);
  //     //       $(".title-count b").html(total_product);
  //     //       if (productReviewsApp && productReviewsProloop) {
  //     //         ProductReviews.init();
  //     //       }
  //     //       if (promotionApp) {
  //     //         if (promotionApp_name == "app_combo") {
  //     //           comboApp.showGiftLabel();
  //     //         } else {
  //     //           buyXgetY.showGiftLabel();
  //     //         }
  //     //       }
  //     //       if ($(window).width() > 1200) {
  //     //         $('[data-toggle="popover"]').popover({
  //     //           container: "body",
  //     //         });
  //     //       }
  //     //       if (total_page > 1) {
  //     //         $(".wraplist-collection .collection-loadmore")
  //     //           .addClass("loadmore-filter")
  //     //           .show();
  //     //         $(".wraplist-collection .collection-loadmore a").attr(
  //     //           "data-page",
  //     //           cur_page + 1
  //     //         );
  //     //       } else {
  //     //         $(".wraplist-collection .listProduct-filter")
  //     //           .siblings(":not(h3)")
  //     //           .hide();
  //     //       }
  //     //     }, 300);
  //     //   },
  //     // });
  //   } else {
  //     jQuery(".listProduct-filter").html("");
  //     jQuery(".listProduct-filter").append(
  //       '<div class="col-md-12 product-noloop"><div class="collection-alert-no"><p>Không tìm thấy kết quả. Vui lòng thử lại!</p></div></div>'
  //     );
  //     jQuery(".wraplist-collection .collection-loadmore").hide();
  //     jQuery(".title-count b").html("0");
  //   }
  //   var x = $("#collection-body").offset().top;
  //   HRT.All.smoothScroll(x, 500);
  // };
  // var LoadOrigin = function () {
  //   var view = "?view=data",
  //     pageView = "?view=pagesize";
  //   cur_page = 1;
  //   var collectionHd = "/collections/sofa-ghe-thu-gian";
  //   var urlQuery = collectionHd + view;

  //   var pathName = window.location.pathname;
  //   if (pathName.indexOf("vendors") > -1 || pathName.indexOf("types") > -1) {
  //     collectionHd = pathName + "?q=" + paramUrl.q;
  //     urlQuery = pathName + "?q=" + paramUrl.q + view.replace("?", "&");
  //   }

  //   if ($(".sort-by").length > 0) {
  //     $(".sort-by li").each(function () {
  //       if ($(this).hasClass("active")) {
  //         if ($(this).find("span").data("value") == "manual") {
  //           sortBy = "";
  //         } else {
  //           sortBy = "&sort_by=" + $(this).find("span").data("value");
  //         }
  //       }
  //     });
  //     sortByPicked = sortBy;
  //   }

  //   $.ajax({
  //     url:
  //       collectionHd +
  //       (collectionHd.indexOf("?") > -1
  //         ? pageView.replace("?", "&")
  //         : pageView),
  //     type: "GET",
  //     async: false,
  //     success: function (data) {
  //       data = JSON.parse(data);
  //       total_page = parseInt(data.pages);
  //       total_product = parseInt(data.products);
  //     },
  //   });

  //   $.ajax({
  //     url: urlQuery + "&page=" + cur_page + sortByPicked,
  //     type: "GET",
  //     async: false,
  //     success: function (data) {
  //       $(".wraplist-collection .listProduct-filter").html("");
  //       if (cur_page >= total_page && total_page > 1) {
  //         $(".wraplist-collection .listProduct-filter")
  //           .siblings(":not(h3)")
  //           .hide();
  //       } else {
  //         setTimeout(function () {
  //           $(".wraplist-collection .listProduct-filter")
  //             .append(data)
  //             .addClass("loaded");
  //           $(".title-count b").html(total_product);
  //           $(".collection-loadmore .btn-loadmore").attr(
  //             "data-page",
  //             cur_page + 1
  //           );
  //           $(".collection-loadmore")
  //             .find(".btn-loadmore")
  //             .removeClass("btn-loading");
  //           $(".collection-loadmore").show();
  //           if (productReviewsApp && productReviewsProloop) {
  //             ProductReviews.init();
  //           }
  //           if (promotionApp) {
  //             if (promotionApp_name == "app_combo") {
  //               comboApp.showGiftLabel();
  //             } else {
  //               buyXgetY.showGiftLabel();
  //             }
  //           }
  //           if ($(window).width() > 1200) {
  //             $('[data-toggle="popover"]').popover({
  //               container: "body",
  //             });
  //           }
  //         }, 400);
  //       }
  //     },
  //   });

  //   var x = $("#collection-body").offset().top;
  //   HRT.All.smoothScroll(x, 500);
  // };
  // nut xem them 
  // $(document).on(
  //   "click",
  //   "#collection-body .collection-loadmore .btn-loadmore:not(.btn-loading)",
  //   function (e) {
  //     e.preventDefault();
  //     $(this).addClass("btn-loading");
  //     var btn = $(this);
  //     var view = "?view=data",
  //       pageView = "?view=pagesize";
  //     var link = parseInt($(this).attr("data-page"));
  //     var collectionHd = "/collections/sofa-ghe-thu-gian";
  //     var urlQuery = collectionHd + view;
  //     var pathName = window.location.pathname;

  //     if (pathName.indexOf("vendors") > -1 || pathName.indexOf("types") > -1) {
  //       collectionHd = pathName + "?q=" + paramUrl.q;
  //       urlQuery = pathName + "?q=" + paramUrl.q + view.replace("?", "&");
  //     }

  //     if ($(".sort-by").length > 0) {
  //       if ($(".sort-by li.active").length > 0) {
  //         if ($(".sort-by li.active").find("span").data("value") == "manual") {
  //           sortBy = "";
  //         } else {
  //           if (hasChangeSort || $(".checkbox-list li.active").length > 0) {
  //             sortBy =
  //               "&sortby=" +
  //               $(".sort-by li.active").find("span").data("filter");
  //           } else {
  //             sortBy =
  //               "&sort_by=" +
  //               $(".sort-by li.active").find("span").data("value");
  //           }
  //         }
  //       } else {
  //         sortBy = "";
  //       }
  //       sortByPicked = sortBy;
  //     }

  //     if (
  //       (activeFilter &&
  //         $(".checkbox-list li.active").length == 0 &&
  //         hasChangeSort == false) ||
  //       (!activeFilter && activeSort && hasChangeSort == false)
  //     ) {
  //       $.ajax({
  //         url:
  //           collectionHd +
  //           (collectionHd.indexOf("?") > -1
  //             ? pageView.replace("?", "&")
  //             : pageView),
  //         type: "GET",
  //         async: false,
  //         success: function (data) {
  //           data = JSON.parse(data);
  //           total_page = parseInt(data.pages);
  //         },
  //       });

  //       $.ajax({
  //         url: urlQuery + "&page=" + link + sortByPicked,
  //         type: "GET",
  //         async: false,
  //         success: function (data) {
  //           setTimeout(function () {
  //             $(".wraplist-collection .listProduct-filter")
  //               .append(data)
  //               .addClass("loaded");
  //             $(".collection-loadmore")
  //               .find(".btn-loadmore")
  //               .removeClass("btn-loading");
  //             if (productReviewsApp && productReviewsProloop) {
  //               ProductReviews.init();
  //             }
  //             if (promotionApp) {
  //               if (promotionApp_name == "app_combo") {
  //                 comboApp.showGiftLabel();
  //               } else {
  //                 buyXgetY.showGiftLabel();
  //               }
  //             }
  //             if ($(window).width() > 1200) {
  //               $('[data-toggle="popover"]').popover({
  //                 container: "body",
  //               });
  //             }

  //             if (link == 1) {
  //               $(".wraplist-collection .listProduct-filter").html("");
  //             }
  //             if (link >= total_page) {
  //               $(".wraplist-collection .listProduct-filter")
  //                 .siblings(":not(h3)")
  //                 .hide();
  //             }
  //           }, 400);
  //         },
  //       });
  //       $(this).attr("data-page", link + 1);
  //     } else {
  //       jQuery.ajax({
  //         url:
  //           "/search?q=" +
  //           str +
  //           "&view=filter" +
  //           sortByPicked +
  //           "&page=" +
  //           link,
  //         success: function (data) {
  //           jQuery(".product-noloop").remove();
  //           setTimeout(function () {
  //             $(".wraplist-collection .listProduct-filter")
  //               .append(data)
  //               .addClass("loaded");
  //             $(".collection-loadmore")
  //               .find(".btn-loadmore")
  //               .removeClass("btn-loading");
  //             if (productReviewsApp && productReviewsProloop) {
  //               ProductReviews.init();
  //             }
  //             if (promotionApp) {
  //               if (promotionApp_name == "app_combo") {
  //                 comboApp.showGiftLabel();
  //               } else {
  //                 buyXgetY.showGiftLabel();
  //               }
  //             }
  //             if (link >= total_page && total_page > 1) {
  //               $(".wraplist-collection .listProduct-filter")
  //                 .siblings(":not(h3)")
  //                 .hide();
  //             } else {
  //               btn.attr("data-page", link + 1);
  //             }
  //             if ($(window).width() > 1200) {
  //               $('[data-toggle="popover"]').popover({
  //                 container: "body",
  //               });
  //             }
  //           }, 400);
  //         },
  //       });
  //     }
  //   }
  // );

  // nut filter banr moba
  $(document).on("click", ".heading-box .title-filter", function (e) {
    console.log(11111111111);
    e.preventDefault();
    $(".layered_filter_parent").append('<div class="overlays-rgba"></div>');
    $(".collection-filter").find(".layered_filter_parent").fadeIn(100);
    $(".collection-filter")
      .find(".layered_filter_parent")
      .addClass("show-filter");
  });
  
  // nut dong fillter moba
  $(document).on(
    "click",
    ".layered_filter_parent .close_filter,.layered_filter_parent .overlays-rgba",
    function (e) {
      e.preventDefault();
      if ($(".checkbox-list li.active").length == 0) {
        var originSort = $(".sort-by li.active").find("span").data("value");
        $(".checkbox-sortby li").removeClass("active");
        $('.checkbox-sortby li span[data-value="' + originSort + '"]')
          .parent()
          .addClass("active");
      }
      closeFilterMobile();
    }
  );
});
