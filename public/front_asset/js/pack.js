$(document).ready(function(){
    $('.slider .owl-carousel').owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        navText:["<span></span>","<span></span>"],
        nav:true,
        center: true,
        responsive:{0:{dots:false}, 768:{dots:true}}
    });
    $('.product-items.owl-carousel').owlCarousel({
        items:5,
        loop:false,
        autoplay:false,
        navText:["<span></span>","<span></span>"],
        nav:true,
        margin: 5,
        dots:false,
        responsive:{0:{items: 2},480:{items: 3},768:{}}
    });
    $(".slick-carousel-list").slick({
        infinite: true,
        vertical: true,
        verticalSwiping:true,
        slidesToShow: 5,
        slidesToScroll: 1,
        focusOnSelect: true,
        adaptiveHeight: true,
        asNavFor: ".slider-preview",
        arrows: false,
        dots: false,
    });
    $(".slider-preview").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: ".slick-carousel-list",
        arrows: true,
        dots: false,
        nextArrow: `<span type="button" class="slick-next slick-arrow"></span>`,
        prevArrow: `<span type="button" class="slick-prev slick-arrow"></span>`,
    });
    $('.action.nav-toggle').click(function(){
        if($(this).hasClass('children')){
            $(this).removeClass('children')
            $('div.dropdown-menu').removeClass('open')
        }
        else{
            $(this).toggleClass('opened')
            $('body').toggleClass('navbar-active')
        }
    })
    $('.ui-menu > li.dropdown').click(function(e){
        const child = $(this).find('.dropdown-menu')
        if($('.action.nav-toggle').is(":hidden") == false && child.length > 0){
            e.preventDefault()
            $(this).find('div.dropdown-menu').addClass('open')
            $('.action.nav-toggle').addClass('children')
        }
    })
    $('.ui-menu .submenu > li').click(function(e){
        e.stopPropagation()
        const child = $(this).find('.sub-child')
        if($('.action.nav-toggle').is(":hidden") == false && (child && child.length > 0)){
            e.preventDefault()
            $(this).find('.sub-child.box-toggle').css({display: 'block'})
        }
    })
    $('.submenu .sub-child > li').click(function(e){
        e.stopPropagation()
        const child = $(this).find('ul.sub-child')
        console.log(child);
        if($('.action.nav-toggle').is(":hidden") == false && (child && child.length > 0)){
            e.preventDefault()
        }
    })
    $('.page-footer .title.toggle').click(function(){
        $(this).find('.sub').toggleClass('closed')
        $(this).next().slideToggle()
    })
    $(document).on('click', '.coupon-card',function(){
        var voucher = $(this).data('coupon');
        navigator.clipboard.writeText(voucher);
        alert('Đã lưu mã '+voucher+' thành công');
        return false;
    });
    $('.footer-sidebar .search').click(function(){
        $('.block.block-search').slideToggle()
    })

    $('.action-show-register-coupon').click(function () {
        $('.modals-wrapper-popup .modal-popup').html(popup_)
        $('body').addClass("_has-modal");
        $(".modals-wrapper-popup").append(
            '<div class="modals-overlay"></div>'
        );
        $(".modals-wrapper-popup .modal-popup").css({
            "z-index": 10001,
        });
        setTimeout(() => {
            $('.modals-wrapper-popup .modal-popup').addClass('modal-slide _inner-scroll _show popup-register-coupon')
        }, 100);
     })
    $('.wheel-icon.acton-spin').click(function () {
        $(this).hide()
        $('body').addClass("_has-modal");
        $(".modals-wrapper2").append(
            '<div class="modals-overlay"></div>'
        );
        $(".modals-wrapper2 .modal-popup.popup-wheel").css({
            "z-index": 10001,
        });
        setTimeout(() => {
            $('.modals-wrapper2 .modal-popup.popup-wheel').addClass('_show')
        }, 100);
     })

     const getTabId = localStorage.getItem('ui')
     const isTab = sessionStorage.tabID ?
     sessionStorage.tabID :
     sessionStorage.tabID = Math.random();
     if(!getTabId || isTab != getTabId){
        setTimeout(() => {
	if(spin_){
        	$('.wheel-icon.acton-spin').hide()
        	$('body').addClass("_has-modal");
        	$(".modals-wrapper2").append(
            	'<div class="modals-overlay"></div>'
        	);
        	$(".modals-wrapper2 .modal-popup.popup-wheel").css({
            	"z-index": 10001,
        	});
        	setTimeout(() => {
            		$('.modals-wrapper2 .modal-popup.popup-wheel').addClass('_show')
        	}, 100);
        	localStorage.setItem('ui', isTab)
	}
        }, 1000);
    }


     function fixTop (){
        const top = $(this).scrollTop()
        if(top > 20){
            $('.page-header').addClass('fix-top')
        }
        else{
            $('.page-header').removeClass('fix-top')
        }
     }
     fixTop()
     $(window).on('scroll', function (e){
        fixTop()
    });

})


