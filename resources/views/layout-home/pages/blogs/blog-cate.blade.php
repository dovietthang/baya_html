@extends('layout-home.layout-base')
@section('title')
<title>{{ $cate->site_name}}</title>
@endsection
@section('content')

<div class="layout-blogs">

    <div class="breadcrumb-shop">
        <div class="container">
            <div class="breadcrumb-list">
                <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="{{route('home')}}" target="_self" itemprop="item"><span itemprop="name">{{__('Home')}}</span></a>
                        <meta itemprop="position" content="1" />
                    </li>

                    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <span itemprop="item"><strong itemprop="name">{{@$cate->title}}</strong></span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="wrapper-contentBlogs">
        <div class="container">
            <div class="row dFlex-row">
                <div class="col-lg-9 col-md-12 col-12 boxBlog-left">
                    <div class="listBlogs-content">
                        <div class="heading-page">
                            <h1>{{@$cate->title}}</h1>
                        </div>
                        <div class="list-article-content blog-posts row">

                            <!-- Begin: Nội dung blog -->


                            @foreach($posts as $item)
                            <article class="article-loop col-md-6 col-6">
                                <div class="article-inner">
                                    <div class="article-image">
                                        <a href="{{route('blog.detail', [$item->slug])}}" class="blog-post-thumbnail" title="{{$item->title}}" rel="nofollow">
                                            <img class="lazyload" data-src="{{$item->photo}}" src="{{$item->photo}}" alt="{{$item->title}}">
                                        </a>
                                    </div>
                                    <div class="article-detail">
                                        <div class="article-title">
                                            <h3 class="post-title">
                                                <a href="{{route('blog.detail', [$item->slug])}}" title="{{$item->title}}">{{$item->title}}</a>
                                            </h3>
                                        </div>

                                        <p class="entry-content">{{$item->description}}</p>

                                        <div class="article-post-meta">
                                            @if(isset($item->user))
                                            <span class="author">bởi: {{$item->user->name}}</span>
                                            @endif
                                            <span class="date">
                                                <time pubdate datetime="{{$item->updated_at}}">{{$item->updated_at}}</time>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach

                        </div>

                        <!-- {{$posts}} -->
                        @if(count($posts) > 11)
                        <div class="pagination-shop pagi text-center">
                            <div id="pagination">
                                {{ $posts->onEachSide(5)->links('layout-home.paginate.custom') }}
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
                @include('layout-home.pages.blogs.blog-sidebar', ['newPost' => $newPost, 'catePost' => $catePost])
            </div>
        </div>
    </div>

</div>
@endsection