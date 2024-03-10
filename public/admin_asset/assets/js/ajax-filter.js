$(document).ready(function () {
    let pagenum = ''
    let search = ''
    let t = ''
    let p = ''
    $('select.form-select.filter-stt').on('change', function () {
        t = $(this).val()
        ajaxFilter(pagenum, search, t, p)
    })
    $('select.form-select.filter-stt-s').on('change', function () {
        p = $(this).val()
        ajaxFilter(pagenum, search, t, p)
    })
    $('select.form-select.filter').on('change', function () {
        pagenum = $(this).val()
        ajaxFilter(pagenum, search, t, p)
    })
    $('input[type=search]').on('keyup', function (e) {
        search = e.target.value
        ajaxFilter(pagenum, search, t, p)
    })
    $('input[type=search]').on('search', function (e) {
        search = e.target.value
        ajaxFilter(pagenum, search , t, p)
    })
    $(document).on('click', '.pagination a.page-link', function (e) {
        pagenum = $('select.form-select').val()
        search = $('input[type=search]').val()
        e.preventDefault()
        let page = $(this).attr('href').split('page=')[1]
        ajaxFilter(pagenum, search, t='', p='', page)
    })
    function ajaxFilter(pagenum, search, t='', p='', page = '') {
        console.log(t, p);
        pagenum = pagenum != '' ? '&pagenum=' + pagenum : ''
        search = search != '' ? '&search=' + search : ''
        t = t != '' ? '&t=' + t : ''
        p = p != '' ? '&p=' + p : ''
        let url = ''
        if (page !== '') {
            url = document.location.origin + document.location.pathname + '?page=' + page + pagenum + search + t + p
        } else {
            url = document.location.origin + document.location.pathname + '?filter=true' + pagenum + search + t + p
        }
        $.ajax({
            url: url,
            type: 'get',
            success: function (data) {
                $('.showPage').html(data)
            }
        })
    }

    $(document).on('click', '.product-color-options li', function () {
        $(this).addClass('selected').siblings().removeClass('selected')
        let getId = $(this).parents('.modal ')
        let elColor = $(this).parents('.product-color-options').find('li.elColor.selected');
        let elSize = $(this).parents('.product-color-options').find('li.elSize.selected');
        let product_id = $(this).parents('.product-color-options').attr('data-pr')
        let product_sku_id = $('.product-color-options').attr('data-pr-detail')
        let color = elColor ? elColor.attr('data-attribute-color') : ''
        let size = elSize ? elSize.attr('data-attribute-size') : ''
        let data = {
            product_id: product_id,
            product_sku_id: product_sku_id,
            color: color,
            size: size
        }
        ajaxProduct(data, getId)
    })
    $(document).on('click', '.item-product-show', function (e) {
        let getId = e.currentTarget.getAttribute('data-bs-target')
        let product_id = e.currentTarget.getAttribute('product-id')
        let data = {
            'product_id': product_id
        }
        ajaxProduct(data, getId, 1)
    })
})

function ajaxProduct(data, getId, type) {
    $.ajax({
            url: location.href,
            type: 'get',
            data: data,
            success: function (data) {
                $(getId).find('.productDetail').html(data)
                if (type == 1) {
                    $('body').append(`<div class="button button-ts">
                                                        <span class="loading loading-1"> </span>
                                                    </div>`)
                    setTimeout(function () {
                        $('.button-ts').remove()
                    }, 700)
                    setTimeout(function () {
                        $(getId).modal('show')
                    }, 750)
                }
                else {
                    $(getId).find('.productDetail .views').fadeTo('fast', 0.3)
                    $(getId).find('.productDetail .photo_thumb').fadeTo('fast', 0.6)
                    $(getId).find('.productDetail .views').fadeTo('slow', 1)
                    $(getId).find('.productDetail .photo_thumb').fadeTo('slow', 1)
                }
            }
        }
    )
}


