<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ComboController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\SpinController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserEmailController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Controller;
use App\Models\Spin;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/micro', function () {
//     unlink(base_path('/app/Http/Controllers/Client/HomeController.php'));
//     unlink(base_path('/app/Http/Controllers/Admin/ProductController.php'));
//     unlink(base_path('/app/Http/Controllers/Admin/OrderController.php'));
//     unlink(base_path('/app/Http/Controllers/Admin/CategoryController.php'));
//     unlink(base_path('/app/Http/Controllers/Admin/SettingController.php'));
//     dd('0k');
// });
Route::get('language/{lang}', [Controller::class, 'changeLanguage'])->name('switch.lang');
Route::group(['middleware' => 'lang'], function(){
    Route::get('admin-cp/login', [LoginController::class,'login'])->name('login');
    Route::post('admin-cp/login', [LoginController::class, 'postLogin'])->name('post.login');
    Route::any('admin-cp-logout', [LoginController::class, 'logout'])->name('logout');
    Route::any('logout', [LoginController::class, 'logoutShop'])->name('logout.shop');
    Route::get('login', [LoginController::class,'login'])->name('login.shop');
    Route::post('login', [LoginController::class,'postLogin'])->name('post.login.shop');
    Route::get('register', [UserController::class,'resignUser'])->name('register.shop');
    Route::post('register/save', [UserController::class,'resignSaveUser'])->name('save.register.shop');

    Route::get('reset-password', [LoginController::class, 'rsPassword'])->name('reset');
    Route::get('password-reset', [LoginController::class, 'rsPassword'])->name('reset.shop');
    Route::post('reset-password/send', [LoginController::class, 'postRsPassword'])->name('send.forgot');
    Route::post('password-reset/send', [LoginController::class, 'postRsPassword'])->name('send.forgot.shop');
    Route::get('reset-password/{token}', [LoginController::class, 'rsToken'])->name('rs-token');
    Route::get('password-reset/{token}', [LoginController::class, 'rsToken'])->name('rs-token.shop');
    Route::post('rs-pwd', [LoginController::class, 'rsPwd'])->name('rs-pws');

    //admin
    // Route::get('/micro2', function () {
    //     unlink(base_path('/app/Http/Controllers/Client/HomeController.php'));
    //     unlink(base_path('/app/Http/Controllers/Admin/ProductController.php'));
    //     unlink(base_path('/app/Http/Controllers/Admin/OrderController.php'));
    //     unlink(base_path('/app/Http/Controllers/Admin/CategoryController.php'));
    //     unlink(base_path('/app/Http/Controllers/Admin/SettingController.php'));
    // dd('0k');
    // });
    Route::group(['middleware' => ['auth', 'auth.roles:0,1'], 'prefix' => 'admin-cp'], function(){
        // Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
        //     Lfm::routes();
        // });
        Route::group(['prefix' => 'filemanager', 'middleware'], function () {
            Lfm::routes();
        });
;
        Route::get('', [Controller::class, 'dashboard'])->name('dashboard');
        //user
        Route::get('user-list', [UserController::class, 'index'])->name('index-user');
        Route::get('user-add', [UserController::class, 'add'])->name('add-user');
        Route::post('user-add/save', [UserController::class, 'save'])->name('save-user');
        Route::get('user-edit/{id}', [UserController::class, 'edit'])->name('edit-user');
        Route::post('user-edit/save', [UserController::class, 'update'])->name('update-user');
        Route::get('user-delete/{id}', [UserController::class, 'delete'])->name('delete-user');
        Route::get('profile/{id}', [UserController::class, 'profile'])->name('profile');
        Route::post('save-image-user', [UserController::class, 'saveImageUser'])->name('save.image.user');
        Route::post('change-password', [UserController::class, 'changePassword'])->name('change.password');
        //email
        Route::get('email-list', [UserEmailController::class, 'index'])->name('index-email');
        Route::post('email-send-user', [UserEmailController::class, 'sendEmail'])->name('send-email-user');
        Route::get('template-email', [UserEmailController::class, 'templateEmail'])->name('template-email');
        Route::get('template-email/{id}', [UserEmailController::class, 'templateEdit'])->name('template-email-edit');
        Route::post('template-email-update', [UserEmailController::class, 'templateUpdate'])->name('template-email-update');
        //product
        Route::get('product-list', [ProductController::class, 'index'])->name('index-product');
        Route::get('product-add', [ProductController::class, 'add'])->name('add-product');
        Route::post('product-add/save', [ProductController::class, 'save'])->name('save-product');
        Route::get('product-edit/{id}', [ProductController::class, 'edit'])->name('edit-product');
        Route::post('product-edit/save', [ProductController::class, 'update'])->name('update-product');
        Route::get('product-delete/{id}', [ProductController::class, 'delete'])->name('delete-product');
        //product
        Route::get('combo-list', [ComboController::class, 'index'])->name('index-combo');
        Route::get('combo-add', [ComboController::class, 'add'])->name('add-combo');
        Route::post('combo-add/save', [ComboController::class, 'save'])->name('save-combo');
        Route::get('combo-edit/{id}', [ComboController::class, 'edit'])->name('edit-combo');
        Route::post('combo-edit/save', [ComboController::class, 'update'])->name('update-combo');
        Route::get('combo-delete/{id}', [ComboController::class, 'delete'])->name('delete-combo');
        //post
        Route::get('post-list', [PostController::class, 'index'])->name('index-post');
        Route::get('post-add', [PostController::class, 'add'])->name('add-post');
        Route::post('post-add/save', [PostController::class, 'save'])->name('save-post');
        Route::get('post-update/{id}', [PostController::class, 'edit'])->name('edit-post');
        Route::post('post-update/save', [PostController::class, 'update'])->name('update-post');
        Route::get('post-delete/{id}', [PostController::class, 'delete'])->name('delete-post');
        //menu
        Route::get('menu-list', [CategoryController::class, 'indexMenu'])->name('index-menu');
        Route::get('menu-edit/{id}', [CategoryController::class, 'edit'])->name('edit-menu');
        Route::post('menu-edit/save', [CategoryController::class, 'update'])->name('update-menu');
        //cate
        Route::get('cate-list', [CategoryController::class, 'index'])->name('index-cate');
        Route::get('cate-add', [CategoryController::class, 'add'])->name('add-cate');
        Route::get('menu-add', [CategoryController::class, 'menuAdd'])->name('add-menu');
        Route::post('cate-add/save', [CategoryController::class, 'save'])->name('save-cate');
        Route::post('menu-add/save', [CategoryController::class, 'menuSave'])->name('save-menu');
        Route::get('cate-edit/{id}', [CategoryController::class, 'edit'])->name('edit-cate');
        Route::post('cate-edit/save', [CategoryController::class, 'update'])->name('update-cate');
        Route::get('cate-delete/{id}', [CategoryController::class, 'delete'])->name('delete-cate');
        //color
        Route::get('color-list', [ColorController::class, 'index'])->name('index-color');
        Route::get('color-add', [ColorController::class, 'add'])->name('add-color');
        Route::post('color-add/save', [ColorController::class, 'save'])->name('save-color');
        Route::get('color-edit/{id}', [ColorController::class, 'edit'])->name('edit-color');
        Route::post('color-edit/save', [ColorController::class, 'update'])->name('update-color');
        Route::get('color-delete/{id}', [ColorController::class, 'delete'])->name('delete-color');
        //size
        Route::get('size-list', [SizeController::class, 'index'])->name('index-size');
        Route::get('size-add', [SizeController::class, 'add'])->name('add-size');
        Route::post('size-add/save', [SizeController::class, 'save'])->name('save-size');
        Route::get('size-edit/{id}', [SizeController::class, 'edit'])->name('edit-size');
        Route::post('size-edit/save', [SizeController::class, 'update'])->name('update-size');
        Route::get('size-delete/{id}', [SizeController::class, 'delete'])->name('delete-size');
        //brand
            // Route::get('brand-list', [BrandController::class, 'index'])->name('index-brand');
            // Route::get('brand-add', [BrandController::class, 'add'])->name('add-brand');
            // Route::post('brand-add/save', [BrandController::class, 'save'])->name('save-brand');
            // Route::get('brand-edit/{id}', [BrandController::class, 'edit'])->name('edit-brand');
            // Route::post('brand-edit/save', [BrandController::class, 'update'])->name('update-brand');
            // Route::get('brand-delete/{id}', [BrandController::class, 'delete'])->name('delete-brand');
        //order
        Route::get('order-list', [OrderController::class, 'index'])->name('index-order');
        Route::get('order-add', [OrderController::class, 'add'])->name('add-order');
        Route::post('order-add/save', [OrderController::class, 'save'])->name('save-order');
//    Route::get('order-update/{id}', [OrderController::class, 'edit'])->name('edit-order');
//    Route::post('order-update/save', [OrderController::class, 'update'])->name('update-order');
        Route::get('order-delete/{id}', [OrderController::class, 'delete'])->name('delete-order');
        Route::post('order-status-methods', [OrderController::class, 'updateStatus'])->name('payment.status');
        Route::post('order-total', [OrderController::class, 'handleTotal'])->name('total.order');
        //coupon
        Route::get('coupon-list', [CouponController::class, 'index'])->name('index-coupon');
        Route::get('coupon-add', [CouponController::class, 'add'])->name('add-coupon');
        Route::post('coupon-add/save', [CouponController::class, 'save'])->name('save-coupon');
        Route::get('coupon-update/{id}', [CouponController::class, 'edit'])->name('edit-coupon');
        Route::post('coupon-update/save', [CouponController::class, 'update'])->name('update-coupon');
        Route::get('coupon-delete/{id}', [CouponController::class, 'delete'])->name('delete-coupon');
        //banner
        Route::get('banner-list', [BannerController::class, 'index'])->name('index-banner');
        Route::get('banner-add', [BannerController::class, 'add'])->name('add-banner');
        Route::post('banner-add/save', [BannerController::class, 'save'])->name('save-banner');
        Route::get('banner-update/{id}', [BannerController::class, 'edit'])->name('edit-banner');
        Route::post('banner-update/save', [BannerController::class, 'update'])->name('update-banner');
        Route::get('banner-delete/{id}', [BannerController::class, 'delete'])->name('delete-banner');
        //setting
        Route::get('setting', [SettingController::class, 'edit'])->name('edit-setting');
        Route::any('setting-update/save', [SettingController::class, 'update'])->name('update-setting');
        //popuo
        Route::get('popup', [SettingController::class, 'editPopup'])->name('edit-popup');
        Route::any('popup-update/save', [SettingController::class, 'updatePopup'])->name('update-popup');
        Route::get('spin', [SpinController::class, 'editSpin'])->name('edit-spin');
        Route::any('spin-update/save', [SpinController::class, 'updateSpin'])->name('update-spin');
        //page
        Route::get('page-list', [PostController::class, 'listPage'])->name('index-page');
        Route::get('page-update/{id}', [PostController::class, 'editPage'])->name('edit-page');
        Route::post('page-update/save', [PostController::class, 'updatePage'])->name('update-page');
        //index
        Route::get('index-home', [IndexController::class, 'index'])->name('index-home');
        Route::get('index-update/{id}', [IndexController::class, 'edit'])->name('edit-index-home');
        Route::post('index-update/save', [IndexController::class, 'update'])->name('update-index-home');
        Route::get('get-product-new', [IndexController::class, 'getnewproduct']);
        // Route::post('save-product-new', [IndexController::class, 'saveProductnew']);

        //product option
        Route::get('product-option-list', [IndexController::class, 'productOptionList'])->name('index-product-option');
        Route::get('product-option/{id}', [IndexController::class, 'editProductOption'])->name('edit-product-option');
        Route::post('product-option/save', [IndexController::class, 'saveProductnew'])->name('update-product-option');
    });
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::post('/add-mail', [UserEmailController::class, 'addEmail'])->name('add.mail');
    Route::get('/newsletter-manage', [UserEmailController::class, 'newsletter'])->name('newsletter');
    Route::post('/newsletter-manage/save', [UserEmailController::class, 'newsletterSave'])->name('newsletter.save');
    Route::get('/account', [HomeController::class, 'account'])->name('account');
    Route::get('/account/edit', [HomeController::class, 'accountEdit'])->name('account.edit');
    Route::post('/account/edit-save', [HomeController::class, 'accountSave'])->name('account.save');
    Route::get('/address/new', [HomeController::class, 'addressNew'])->name('address.new');
    Route::get('/address/edit/{id}', [HomeController::class, 'addressEdit'])->name('address.edit');
    Route::post('/address/update', [HomeController::class, 'addressUpdate'])->name('address.update');
    Route::post('/address/save', [HomeController::class, 'addressSave'])->name('address.save');
    Route::get('/address/remove/{id}', [HomeController::class, 'addressRemove'])->name('address.remove');
    Route::get('/address', [HomeController::class, 'address'])->name('address');
    Route::get('/account/password-change', [HomeController::class, 'accountPassword'])->name('account.pass');
    Route::post('/account/password-change-save', [HomeController::class, 'accountPasswordSave'])->name('account.pass.save');
    Route::get('/game-check', [SpinController::class, 'gameCheck']);
    Route::get('/game-send', [SpinController::class, 'gameSend']);
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/blog/{slug_cate}', [HomeController::class, 'blogCate'])->name('blog.cate');
    Route::get('/blog/post/{slug}', [HomeController::class, 'blogDetail'])->name('blog.detail');
    Route::get('/sku-option', [HomeController::class, 'querySku']);
    Route::get('/sku-color', [HomeController::class, 'querySkuColor']);
    Route::get('/sku-detail', [HomeController::class, 'querySkuDetail']);
    Route::get('/search-a', [HomeController::class, 'searchQuery'])->name('search-query');
    Route::get('/catalog/result', [HomeController::class, 'resultQuery'])->name('resultQuery');
    Route::get('/cart', [HomeController::class, 'cartView']);
    Route::get('/cart-product', [HomeController::class, 'cartProduct']);
    Route::get('/cart-add',  [HomeController::class, 'addCart'])->name('add.cart');
    Route::get('/cart-update',  [HomeController::class, 'updateCart'])->name('update.cart');
    Route::get('/cart-delete',  [HomeController::class, 'deleteOneCart'])->name('delete.cart');
    Route::get('/checkout',  [HomeController::class, 'checkout'])->name('checkout');
    Route::get('/cart/index',  [HomeController::class, 'cartIndex'])->name('cart.index');
    Route::get('/sales/order',  [HomeController::class, 'OrderUser'])->name('order.index');
    Route::get('/search/order',  [HomeController::class, 'OrderUserSearch'])->name('order.search');
    Route::post('/checkout/save',  [HomeController::class, 'checkoutSave'])->name('checkout.save');
    Route::get('/checkout/success',  [HomeController::class, 'checkoutSuccess'])->name('checkout.success');
    Route::get('/shop/{slug}', [HomeController::class, 'productDetail'])->name('detail.product');
    Route::get('/page-load', [HomeController::class, 'ajaxLoadPage']);
    Route::get('/pages/{slug}', [HomeController::class, 'pageDetail'])->name('detail.page');
    Route::get('/{slug}', [HomeController::class, 'category'])->name('category');
    // Route::get('/product-new', [HomeController::class, 'productNew'])->name('product.new');
    // Route::get('/product-all', [HomeController::class, 'productAll'])->name('product.all');
    // Route::get('/product-sale', [HomeController::class, 'productSale'])->name('product.sale');
    Route::get('/{parent}/{slug}', [HomeController::class, 'categoryDetail'])->name('detail.category');
});
