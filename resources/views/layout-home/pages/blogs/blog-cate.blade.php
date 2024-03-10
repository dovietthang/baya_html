@extends('layout-home.pages.blogs.layout-blog')
@section('title')
<title>{{@$cate->title}}</title>
@endsection
@section('content')
@php
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
@endphp
<div
    class="archive category category-xu-huong category-9 td-standard-pack global-block-template-1 td_category_template_1 td_category_top_posts_style_1 td-animation-stack-type0 td-full-layout">
    <div id="td-outer-wrap" class="td-theme-wrap">
        <div class="td-category-header td-container-wrap">
            <div class="td-container">
                <div class="td-pb-row">
                    <div class="td-pb-span12">
                        <div class="td-crumb-container">
                            <div class="entry-crumbs"><span><a title="" class="entry-crumb"
                                        href="{{route('blog')}}">Trang chủ</a></span> <i
                                    class="td-icon-right td-bread-sep td-bred-no-url-last"></i> <span
                                    class="td-bred-no-url-last">{{@$cate->parent->title}}</span></div>
                        </div>

                        <h1 class="entry-title td-page-title">{{@$cate->parent->title}}</h1>

                    </div>
                </div>
                <div class="td-category-pulldown-filter td-wrapper-pulldown-filter">
                    <div class="td-pulldown-filter-display-option">
                        <div class="td-subcat-more">Mới nhất <i class="td-icon-menu-down"></i></div>
                        <ul class="td-pulldown-filter-list">
                            <li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="tdi_3"
                                    data-td_block_id="tdi_2" href="{{route('blog.cate', [$cate->slug])}}">Mới nhất</a>
                            </li>
                            <li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="tdi_4"
                                    data-td_block_id="tdi_2" href="?filter_by=old">Cũ nhất</a>
                            </li>
                            <li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="tdi_5"
                                    data-td_block_id="tdi_2" href="?filter_by=views">Phổ biến</a>
                            </li>
                            <li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="tdi_6"
                                    data-td_block_id="tdi_2" href="?filter_by=random">Ngẫu nhiên</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @if(!$isMob)
        <div class="td-category-grid td-container-wrap">
            <div class="td-container">
                <div class="td-pb-row">
                    <div class="td-pb-span12">
                        <div class="td_block_wrap td_block_big_grid_1 tdi_9 td-grid-style-1 td-hover-1 td-big-grids td-pb-border-top td_block_template_1"
                            data-td-block-uid="tdi_9">
                            <div id=tdi_9 class="td_block_inner">
                                <div class="td-big-grid-wrapper">
                                    @if(@$fistPost)
                                    <div
                                        class="td_module_mx5 td-animation-stack td-big-grid-post-0 td-big-grid-post td-big-thumb">
                                        <div class="td-module-thumb"><a
                                                href="{{route('blog.detail', [$fistPost->slug, 'k='.$cate->slug])}}"
                                                rel="bookmark" class="td-image-wrap " title="{{$fistPost->title}}"><img
                                                    class="entry-thumb" src="{{$fistPost->photo}}" alt=""
                                                    title="{{$fistPost->title}}" data-type="image_tag" width="512"
                                                    height="345" /></a>
                                        </div>
                                        <div class="td-meta-info-container">
                                            <div class="td-meta-align">
                                                <div class="td-big-grid-meta">
                                                    <h3 class="entry-title td-module-title"><a
                                                            href="{{route('blog.detail', [$fistPost->slug, 'k='.$cate->slug])}}"
                                                            rel="bookmark"
                                                            title="{{$fistPost->title}}">{{$fistPost->title}}</a>
                                                    </h3>
                                                </div>
                                                <div class="td-module-meta-info">
                                                    <span class="td-post-author-name"><a
                                                            href="javascript:void(0)">{{isset($fistPost->user) ?
                                                            $fistPost->user->name : ''}}</a>
                                                        <span>-</span> </span> <span class="td-post-date"><time
                                                            class="entry-date updated td-module-date">{{date('d-m-Y',
                                                            $fistPost->created_at->timestamp)}}</time></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @if($getPost && count($getPost) > 0)
                                    <div class="td-big-grid-scroll">
                                        @foreach ($getPost as $key => $item)
                                        <div
                                            class="td_module_mx6 td-animation-stack td-big-grid-post-{{$key+1}} td-big-grid-post td-small-thumb">
                                            <div class="td-module-thumb"><a
                                                    href="{{route('blog.detail', [$item->slug, 'k='.$cate->slug])}}"
                                                    rel="bookmark" class="td-image-wrap " title="{{$item->title}}"><img
                                                        class="entry-thumb" src="{{$item->photo}}" alt=""
                                                        title="{{$item->title}}" data-type="image_tag" width="265"
                                                        height="198" /></a></div>
                                            <div class="td-meta-info-container">
                                                <div class="td-meta-align">
                                                    <div class="td-big-grid-meta">
                                                        <h3 class="entry-title td-module-title"><a
                                                                href="{{route('blog.detail', [$item->slug, 'k='.$cate->slug])}}"
                                                                rel="bookmark"
                                                                title="{{$item->title}}">{{$item->title}}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div> <!-- ./block -->
                    </div>
                </div>
            </div>
        </div>

        <div class="td-main-content-wrap td-container-wrap">
            <div class="td-container">
                <!-- content -->
                <div class="td-pb-row">
                    <div class="td-pb-span8 td-main-content">
                        @if($posts && count($posts) > 0)
                        <div class="td-ss-main-content">
                            @foreach ($posts->chunk(2) as $chunk)
                            <div class="td-block-row">
                                @foreach ($chunk as $post)
                                <div class="td-block-span6">
                                    <!-- module -->
                                    <div class="td_module_1 td_module_wrap td-animation-stack">
                                        <div class="td-module-image">
                                            <div class="td-module-thumb"><a
                                                    href="{{route('blog.detail', [$post->slug, 'k='.$cate->slug])}}"
                                                    rel="bookmark" class="td-image-wrap " title="{{$post->title}}"><img
                                                        class="entry-thumb" src="{{$post->photo}}" alt=""
                                                        title="{{$post->title}}" data-type="image_tag" width="324"
                                                        height="160" /></a></div>
                                        </div>
                                        <h3 class="entry-title td-module-title"><a
                                                href="{{route('blog.detail', [$post->slug, 'k='.$cate->slug])}}"
                                                rel="bookmark" title="{{$post->title}}">{{$post->title}}</a></h3>
                                        <div class="td-module-meta-info">
                                            <span class="td-post-author-name"><a
                                                    href="javascript:void(0)">{{isset($post->user) ?
                                                    $post->user->name : ''}}</a> <span>-</span>
                                            </span> <span class="td-post-date"><time
                                                    class="entry-date updated td-module-date">{{date('d-m-Y',
                                                    $post->created_at->timestamp)}}</time></span> <span
                                                class="td-module-comments"><a
                                                    href="{{route('blog.detail', [$post->slug, 'k='.$cate->slug])}}">0</a></span>
                                        </div>


                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endforeach

                            <div class="page-nav td-pb-padding-side">
                                {{ $posts->withQueryString()->onEachSide(5)->links() }}
                            </div>
                        </div>
                        @else
                        <div class="td-pb-span8 td-main-content">
                            <div class="td-ss-main-content">
                                <div class="no-results td-pb-padding-side">
                                    <h2>Không có bài viết</h2>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    @include('layout-home.pages.blogs.includes.rightbar')
                </div>
            </div>
        </div>
        @else
        <div class="td-category-grid">
            <div class="td-container">
                <div class="td-pb-row">
                    <div class="td-pb-span12">
                        <div
                            class="td_block_wrap td_block_big_grid_mob_1 tdi_1 td-grid-style-1 td-hover-1 td-pb-border-top td_block_template_1">
                            <div id="tdi_1" class="td_block_inner">
                                <div class="td-big-grid-wrapper">
                                    @if(@$fistPost)
                                    <div class="td_module_mob_2 td_module_wrap td-animation-stack ">
                                        <div class="td-module-thumb"><a
                                                href="{{route('blog.detail', [$fistPost->slug, 'k='.$cate->slug])}}"
                                                rel="bookmark" class="td-image-wrap " title="{{$fistPost->title}}"><img
                                                    width="480" height="486" class="entry-thumb"
                                                    src="{{$fistPost->photo}}" alt="" title="{{$fistPost->title}}"></a>
                                        </div>
                                        <div class="td-meta-info-container">
                                            <div class="td-meta-align">
                                                <div class="td-big-grid-meta">
                                                    <h3 class="entry-title td-module-title"><a
                                                            href="{{route('blog.detail', [$fistPost->slug, 'k='.$cate->slug])}}"
                                                            rel="bookmark"
                                                            title="{{$fistPost->title}}">{{Str::limit($fistPost->title,40)}}</a></h3>
                                                </div>
                                                <div class="td-module-meta-info">
                                                    <span class="td-post-author-name"><a
                                                            href="javascript:void(0)">{{isset($fistPost->user) ?
                                                            $fistPost->user->name : ''}}</a>
                                                        <span>-</span> </span> <span class="td-post-date"><time
                                                            class="entry-date updated td-module-date">{{date('d-m-Y',
                                                            $fistPost->created_at->timestamp)}}</time></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    @endif
                                    @if($getPost && count($getPost) > 0)
                                    @foreach ($getPost as $key => $item)
                                    <div class="td_module_mob_2 td_module_wrap td-animation-stack ">
                                        <div class="td-module-thumb"><a
                                                href="{{route('blog.detail', [$item->slug, 'k='.$cate->slug])}}"
                                                rel="bookmark" class="td-image-wrap " title="{{$item->title}}"><img
                                                    width="512" height="486" class="entry-thumb" src="{{$item->photo}}"
                                                    alt="" title="{{$item->title}}"></a>
                                        </div>
                                        <div class="td-meta-info-container">
                                            <div class="td-meta-align">
                                                <div class="td-big-grid-meta">
                                                    <h3 class="entry-title td-module-title"><a
                                                            href="{{route('blog.detail', [$item->slug, 'k='.$cate->slug])}}"
                                                            rel="bookmark" title="{{$item->title}}">{{$item->title}}</a>
                                                    </h3>
                                                </div>
                                                <div class="td-module-meta-info">
                                                    <span class="td-post-author-name"><a
                                                            href="javascript:void(0)">{{isset($fistPost->user) ?
                                                            $fistPost->user->name : ''}}</a>
                                                        <span>-</span> </span> <span class="td-post-date"><time
                                                            class="entry-date updated td-module-date">{{date('d-m-Y',
                                                            $fistPost->created_at->timestamp)}}</time></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div> <!-- ./block -->
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 20px" class="td-main-content-wrap">
            <div class="td-container">
                @if($posts && count($posts) > 0)
                @foreach ($posts as $post)
                <div class="td_module_mob_1 td_module_wrap td-animation-stack ">
                    <div class="td-module-thumb">
                        <a href="{{route('blog.detail', [$post->slug])}}" rel="bookmark" class="td-image-wrap "
                            title="{{$post->title}}"><img
                                width="265" height="198" class="entry-thumb"
                                src="{{$post->photo}}"
                                sizes="(max-width: 265px) 100vw, 265px" alt=""
                                title="{{$post->title}}"></a>
                    </div>
                    <div class="item-details">
                        <h3 class="entry-title td-module-title">
                            <a href="{{route('blog.detail', [$post->slug])}}" rel="bookmark"
                                title="{{$post->title}}">{{Str::limit($post->title, 35)}}</a>
                        </h3>
                        <div class="td-module-meta-info">
                            <a href="{{route('blog.cate', [$cate->slug])}}" class="td-post-category">{{$cate->title}}</a> <span
                                class="td-post-author-name"><a href="javascript:void(0)">{{isset($post->user) ? $post->user->name : ''}}</a> <span>-</span> </span> <span class="td-post-date"><time
                                    class="entry-date updated td-module-date">{{date('d-m-Y', $post->created_at->timestamp)}}</time></span>
                        </div>
                    </div>

                </div>
                @endforeach
                @else
                <div class="">
                    <h2>Không có bài viết</h2>
                </div>
                @endif
                <div class="page-nav td-pb-padding-side-mobile">
                    {{ $posts->withQueryString()->onEachSide(5)->links() }}
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
            const params = new URLSearchParams(document.location.search);
            const name = params.get("filter_by");
            let txt = 'Mới nhất'
            if(name){
                if(name == "old"){
                    txt = 'Cũ nhất'
                }
                else if(name == "views"){
                    txt = 'Phổ biến'
                }
                else if(name == "random"){
                    txt = 'Ngẫu nhiên'
                }
            }
            $('.td-subcat-more').text(txt)

            $('.td-pulldown-filter-item').click(function(){
                $('.td-subcat-more').text($(this).text())
            })
        })
</script>
@endsection
