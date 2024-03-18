<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Index;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Setting2;
use App\Models\Size;
use App\Models\Spin;
use App\Models\SpinItem;
use App\Models\Banner;
use App\Models\Coupon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\LengthAwarePaginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer(['errors.404-home'], function ($view) {
            $page = Post::where('title', 'page404')->first();
            $view->with('page', $page);
        });
        view()->composer(['layout-home.pages.blogs.includes.header', 'layout-home.pages.blogs.includes.header_mob'], function ($view) {
            $cates = Category::where('type', 'MenuPost')->where('status', 1)->get();
            $id_parent = isset($view['cate']) && $view['cate'] ? $view['cate']->parent_id : null;
            $postHeader = Index::where('title', 'top_blog_slide')->first();
            $view->with('cates', $cates)->with('id_parent', $id_parent)->with('postHeader', $postHeader);
        });
        view()->composer(['layout-home.pages.blogs.includes.footer'], function ($view) {
            $cates = Category::where('type', 'Post')->where('status', 1)->get();
            $postView = Post::where('type', NULL)->where('status', 1)->orderBy('views', 'desc')->limit(3)->get();
            $posts = Post::where('type', NULL)->where('status', 1)->orderBy('created_at', 'desc')->limit(3)->get();
            $view->with('cates', $cates)->with('postView', $postView)->with('posts', $posts);
        });
        view()->composer(['layout-home.pages.blogs.includes.rightbar'], function ($view) {
            $newposts = Post::where('type', NULL)->where('status', 1)->orderBy('created_at')->limit(10)->get();
            $postRight = Index::where('title', 'right_blog_slide')->first();
            $view->with('newposts', $newposts)->with('postRight', $postRight);
        });
        view()->composer('layout-home.includes.header', function ($view) {
            $menu = Category::where('parent_id', null)->where('type', 'Menu')->where('status', 1)->orderby('order_by', 'asc')->get();
            $view->with('menu', $menu); 
        });
        view()->composer('layout-home.includes.footer', function ($view) {
            $posts_1 = Post::where('status', 1)->where('category', 1)->orderBy('created_at', 'desc')->get();
            $posts_2 = Post::where('status', 1)->where('category', 2)->orderBy('created_at', 'desc')->get();
            $posts_3 = Post::where('status', 1)->where('category', 3)->orderBy('created_at', 'desc')->get();
            $view->with('posts_1', $posts_1)->with('posts_2', $posts_2)->with('posts_3', $posts_3);
        });

        view()->composer('layout-home.includes.sidebar', function ($view) {
            $banners = Banner::where('status', 1)->orderBy('created_at', 'desc')->get();
            $view->with('banners', $banners);
        });

        view()->composer('layout-home.includes.support-bar', function ($view) {
            $pages = Post::where('type', 'page')->where('category', 3)->where('title', '!=', 'page404')->get();
            $view->with('pages', $pages);
        });

        view()->composer('*', function ($view) {
            $config = Setting::select('*')->first();
            $popup = Setting2::where('id', 1)->where('status', 1)->first();
            $coupon_list = Coupon::where('status', 1)->orderBy('created_at', 'desc')->get();
            $idx_pos9 = Index::where('name', 'index_pos9')->where('status', 1)->first();
            $view->with('config', $config)->with('popup', $popup)->with('coupon_list', $coupon_list)->with('idx_pos9', $idx_pos9);
        });
        view()->composer('layout-home.layout-base', function ($view) {
            $spin = Spin::where('id', 1)->where('status', 1)->first();
            $spinItem = SpinItem::where('spin_id', @$spin->id)->get();
            $view->with('spin', $spin)->with('spinItem', $spinItem);
        });
        view()->composer('layout-home.pages.blogs.layout-blog', function ($view) {
            $spin = Spin::where('id', 1)->where('status', 1)->first();
            $spinItem = SpinItem::where('spin_id', @$spin->id)->get();
            $view->with('spin', $spin)->with('spinItem', $spinItem);
        });
        Paginator::useBootstrap();
        Collection::macro('paginate', function ($perPage, $total = null, $page = null, $pageName = 'page'): LengthAwarePaginator {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);

            return new LengthAwarePaginator(
                $this->forPage($page, $perPage)->values(),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
    }
}
