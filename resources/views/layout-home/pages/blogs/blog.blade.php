@extends('layout-home.pages.blogs.layout-blog')
@section('title')
<title>{{ __('Blog tin tức thời trang') }}</title>
@endsection
@section('content')
@php
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
@endphp
<div class=" td-animation-stack-type0 td-full-layout">
    <div class="td-main-content-wrap td-container-wrap">

        <div class="td-container td-blog-index ">
            <div class="td-crumb-container">
                <div class="entry-crumbs"><span><a title="" class="entry-crumb" href="{{route('blog')}}">Home</a></span>
                    <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> <span
                        class="td-bred-no-url-last">Blog</span>
                </div>
            </div>
            @if(!$isMob)
            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        <!-- module -->
                        @if($posts && count($posts) > 0)
                        @foreach ($posts as $post)
                        <div
                            class="td_module_15 td-animation-stack post-8143 post type-post status-publish format-standard has-post-thumbnail category-xu-huong clearfix">
                            <div class="item-details">
                                <h1 class="entry-title"><a href="{{route('blog.detail', [$post->slug])}}" rel="bookmark"
                                        title="{{$post->title}}">{{$post->title}}</a></h1>
                                        <!-- 29/12/2023 -->
                                <!-- <div class="td-module-meta-info">
                                    <div class="td-post-author-name">
                                        <div class="td-author-by">By</div> <a
                                            href="javascript:void(0)">{{isset($post->user) ? $post->user->name :
                                            ''}}</a>
                                        <div class="td-author-line"> - </div>
                                    </div> <span class="td-post-date"><time
                                            class="entry-date updated td-module-date">{{date('d-m-Y',
                                            $post->created_at->timestamp)}}</time></span>
                                </div> -->

                                <!-- <div class="td-post-featured-image"><a
                                        href="{{route('blog.detail', [$post->slug])}}"><img width="696" height="510"
                                            class="entry-thumb td-animation-stack-type0-2" src="{{$post->photo}}"
                                            title="troc-tru-la-gi">
                                    </a>
                                </div> -->
                                <div class="td-post-text-content td-post-content">
                                    {!! $post->content !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <div class="page-nav td-pb-padding-side">
                            {{ $posts->withQueryString()->onEachSide(5)->links() }}
                        </div>
                    </div>
                </div>
                @include('layout-home.pages.blogs.includes.rightbar')
            </div>
            @else
            <div class="td-main-content">
                @if($posts && count($posts) > 0)
                @foreach ($posts as $post)
                @php
                $parentCate = $post->cates->first();
                @endphp
                <div class="td_module_mob_1 td_module_wrap td-animation-stack ">
                    <div class="td-module-thumb"><a href="{{route('blog.detail', [@$post->slug])}}" rel="bookmark"
                            class="td-image-wrap " title="{{$post->title}}"><img width="265" height="198"
                                class="entry-thumb" src="{{$post->photo}}" sizes="(max-width: 265px) 100vw, 265px"
                                alt="" title="{{$post->title}}"></a></div>
                    <div class="item-details">
                        <h3 class="entry-title td-module-title"><a href="{{route('blog.detail', [$post->slug])}}"
                                rel="bookmark" title="{{$post->title}}">{{$post->title}}</a></h3>
                        <div class="td-module-meta-info">
                            @if($parentCate)
                            <a href="{{route('blog.cate', [$parentCate->slug])}}" class="td-post-category">{{$parentCate
                                ? $parentCate->title : ''}}</a> <span class="td-post-author-name"><a
                                    href="javascript:void(0)">{{isset($post->user) ? $post->user->name :
                                    ''}}</a>
                                @endif
                                <span>-</span> </span> <span class="td-post-date"><time
                                    class="entry-date updated td-module-date">{{date('d-m-Y',
                                    $post->created_at->timestamp)}}</time></span>
                        </div>
                    </div>

                </div>
                @endforeach
                @endif
                <div class="page-nav td-pb-padding-side-mobile">
                    {{ $posts->withQueryString()->onEachSide(5)->links() }}
                </div>
            </div>
            <div class="td-a-rec td-a-rec-id-footer_mob ">
                <a href="{{@$postRight->url}}">
                <img class="d-img-768" alt="Sale" src="{{@$postRight->photo}}">
            </a></div>
            @endif
        </div>
    </div>
</div>
@endsection
