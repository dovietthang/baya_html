@extends('layout-home.layout-base')
@section('title')
<title>{{ __('Blog') }}</title>
@endsection
@section('content')
<div class="layout-article" id="article">
    <div class="breadcrumb-shop">
        <div class="container">
            <div class="breadcrumb-list blog-breadcrumb">
                <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="{{route('home')}}" target="_self" itemprop="item"><span itemprop="name">{{__('Home')}}</span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="{{route('blog.cate', [$catePost->slug])}}" itemprop="item">
                            <span itemprop="name">{{@$catePost->title}}</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <span itemprop="item" content="{{@$post->title}}"><strong itemprop="name">{{@$post->title}}</strong></span>
                        <meta itemprop="position" content="3" />
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="wrapper-contentArticle">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-12 boxAricle-left">
                    <div class="inforArticle-content">
                        <div class="boxArticle-detail">
                            <div class="heading-article">
                                <h1>
                                    {{@$post->title}}
                                </h1>
                                <div class="article-post-meta">
                                    @if(isset($post->user))
                                    <span class="author">bởi: {{$post->user->name}}</span>
                                    @endif
                                    <span class="date">
                                        <time pubdate datetime="01 Tháng 03, 2024">{{@$post->created_at}}</time>
                                    </span>
                                </div>
                            </div>
                            <div class="article-content">
                                <div class="box-article-heading clearfix">
                                    <div class="background-img">
                                        <img src="{{@$post->photo}}" alt="{{@$post->title}}" />
                                    </div>
                                </div>
                                <div class="box-article-detail article-body article-table-contents typeList-style">
                                    <p>
                                        <span style="font-size: 16px">{{@$post->description}}</span>
                                    </p>
                                    {!! @$post->content !!}
                                </div>
                                <!-- <div class="box-article-tags">
                                    <strong class="tags-title">Tags: </strong>

                                    <a class="tag" href="../all/tagged/bo-suu-tap-noi-that.html">#bộ sưu tập nội thất,</a>

                                    <a class="tag" href="../all/tagged/noi-that.html">#nội thất,</a>

                                    <a class="tag" href="../all/tagged/noi-that-go.html">#nội thất gỗ,</a>

                                    <a class="tag" href="../all/tagged/noi-that-baya.html">#nội thất baya,</a>

                                    <a class="tag" href="../all/tagged/noi-that-van-phong.html">#nội thất văn phòng,</a>

                                    <a class="tag" href="../all/tagged/ban-lam-viec.html">#bàn làm việc,</a>
                                </div> -->

                                <div class="box-article-navigation post-navigation articleToolbar">
                                    <div class="flex-row-articleToolbar">
                                        <div class="articleToolbar-title col-lg-8 col-md-12 col-12">
                                            <p>
                                                Đang xem:<span> {{ @$post->title }}</span>
                                            </p>
                                        </div>
                                        <div class="articleToolbar-navigation col-lg-4 col-md-12 col-12">
                                            <div class="articleToolbar--nav">
                                                @if($previous)
                                                <span>
                                                    <svg class="arrow-left" role="presentation" viewBox="0 0 11 18">
                                                        <path d="M9.5 1.5L1.5 9l8 7.5" stroke-width="2" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                                    </svg>
                                                    <a href="{{route('blog.detail', [$previous->slug])}}" title="">Bài trước</a>
                                                </span>
                                                @endif
                                                @if($next && $previous)
                                                <span class="separator"></span>
                                                @endif
                                                @if($next)
                                                <span>
                                                    <a href="{{route('blog.detail', [$next->slug])}}" title="">Bài sau</a>
                                                    <svg class="arrow-right" role="presentation" viewBox="0 0 11 18">
                                                        <path d="M1.5 1.5l8 7.5-8 7.5" stroke-width="2" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                                    </svg>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="article-related">
                            <h3 class="title-blog-related">
                                <span> Bài viết liên quan </span>
                            </h3>
                            <div class="content-blogs-related">
                                <div class="list-blogs-related list-article-content owl-carousel owlCarousel-style owlCarousel-dfex">
                                @if($relatedPost)
                                @foreach(@$relatedPost as $item)
                                    <article class="article-loop">
                                        <div class="article-inner">
                                            <div class="article-image">
                                                <a href="{{route('blog.detail', [$item->slug])}}" class="blog-post-thumbnail" title="{{$item->title}}" rel="nofollow">
                                                    <img class="lazyload" data-src="{{$item->photo}}" src="{{$item->photo}}" alt="{{$item->title}}" />
                                                </a>
                                            </div>
                                            <div class="article-detail">
                                                <div class="article-title">
                                                    <h3 class="post-title">
                                                        <a href="{{route('blog.detail', [$item->slug])}}" title="{{$item->title}}">{{@$item->title}}</a>
                                                    </h3>
                                                </div>

                                                <p class="entry-content">
                                                {{@$item->description}}
                                                </p>

                                                <div class="article-post-meta">
                                                    <span class="date">
                                                        <time pubdate datetime="{{@$item->created_at}}">{{@$item->created_at}}</time>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layout-home.pages.blogs.blog-sidebar', ['newPost' => $newPost, 'catePost' => $catePost2])
            </div>
        </div>
    </div>
</div>
@endsection