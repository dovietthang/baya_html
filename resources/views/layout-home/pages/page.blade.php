@extends('layout-home.layout-base')
@section('title')
<title>{{ $page->title }}</title>
@endsection
@section('content')
<style>
    .layout-pageStores .wrapbox-content {
        background: #fff;
        padding: 25px 30px;
        border-radius: 4px;
    }
</style>
<div class="breadcrumb-shop">
    <div class="container">
        <div class="breadcrumb-list">
            <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="{{route('home')}}" target="_self" itemprop="item"><span itemprop="name">{{__('Home')}}</span></a>
                    <meta itemprop="position" content="1" />
                </li>

                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <span itemprop="item"><strong itemprop="name">{{ $page->title }}</strong></span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>
</div>

<div class="container layout-pageStores">
    @if($page->slug == 'lien-he' || $page->slug == 'he-thong-cua-hang')
    <!-- {!! $page->content !!} -->
    <div>{!! str_replace('{{ $config }}', $config, $page->content) !!}</div>

    @else
    <div class="row">
        <div class="col-lg-9 col-md-8 col-12">
            <div class="wrapper-pageDetail">
                <div class="heading-pageDetail">
                    <h1>{{ $page->title }}</h1>
                </div>
                <div class="content-pageDetail typeList-style">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <aside class="sidebar-page">
                <!-- Menu sidebar  -->
                @include('layout-home.includes.support-bar', $page)
                <!-- Banner sidebar  -->
            </aside>
        </div>
    </div>
    @endif

</div>

@endsection