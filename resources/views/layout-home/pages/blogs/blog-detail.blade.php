@extends('layout-home.pages.blogs.layout-blog')
@section('title')
<title>{{ __('Blog tin tức thời trang') }}</title>
@endsection
@section('content')
<div  class="home td-standard-pack global-block-template-1 td-animation-stack-type0 td-full-layout td-js-loaded">
    <div class="td-main-content-wrap td-container-wrap">

        <div class="td-container td-post-template-default ">
            <div class="td-crumb-container">
                <div class="entry-crumbs"><span><a title="" class="entry-crumb" href="{{route('blog')}}">Trang chủ</a></span>
                    <i class="td-icon-right td-bread-sep"></i> <span>{{$catePost->title}}</span> <i
                        class="td-icon-right td-bread-sep td-bred-no-url-last"></i> <span
                        class="td-bred-no-url-last">{{Str::limit($post->title, 40, '...')}}</span>
                </div>
            </div>
            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content" role="main">
                    <div class="td-ss-main-content">

                        <article id="post-7245"
                            class="post-7245 post type-post status-publish format-standard has-post-thumbnail category-meo-vat">
                            <div class="td-post-header">

                                <!-- category -->
                                <ul class="td-category">
                                    @if($post->cates && count($post->cates) > 0)
                                        @foreach ($post->cates as $cate)
                                        <li class="entry-category"><a >{{$cate->title}}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                                <header class="td-post-title">
                                    <h1 class="entry-title">{{$post->title}}</h1>

                                <!-- 29/12/2023 -->
                                    <!-- <div class="td-module-meta-info">
                                      
                                        <div class="td-post-author-name">
                                            <div class="td-author-by">Được tạo bởi</div> <a
                                                href="javascript:void(0)">{{isset($post->user) ?
                                                            $post->user->name : ''}}</a>
                                            <div class="td-author-line"> - </div>
                                        </div> <span class="td-post-date"><time
                                                class="entry-date updated td-module-date">{{date('d-m-Y',
                                                            $post->created_at->timestamp)}}</time></span>
                                      
                                        <div class="td-post-views"><i class="td-icon-views"></i><span
                                                class="td-nr-views-7245">{{number_format($post->views,0,0,'.')}}</span></div>
                                    </div> -->

                                </header>

                            </div>
{{--
                            <div class="td-post-sharing-top">
                                <div id="td_social_sharing_article_top"
                                    class="td-post-sharing td-ps-bg td-ps-notext td-post-sharing-style1 ">
                                    <style>
                                        .td-post-sharing-classic {
                                            position: relative;
                                            height: 20px;
                                        }

                                        .td-post-sharing {
                                            margin-left: -3px;
                                            margin-right: -3px;
                                            font-family: 'Open Sans', 'Open Sans Regular', sans-serif;
                                            z-index: 2;
                                            white-space: nowrap;
                                            opacity: 0;
                                        }

                                        .td-post-sharing.td-social-show-all {
                                            white-space: normal;
                                        }

                                        .td-js-loaded .td-post-sharing {
                                            -webkit-transition: opacity 0.3s;
                                            transition: opacity 0.3s;
                                            opacity: 1;
                                        }

                                        .td-post-sharing-classic+.td-post-sharing {
                                            margin-top: 15px;
                                            /* responsive portrait phone */
                                        }

                                        @media (max-width: 767px) {
                                            .td-post-sharing-classic+.td-post-sharing {
                                                margin-top: 8px;
                                            }
                                        }

                                        .td-post-sharing-top {
                                            margin-bottom: 30px;
                                        }

                                        @media (max-width: 767px) {
                                            .td-post-sharing-top {
                                                margin-bottom: 20px;
                                            }
                                        }

                                        .td-post-sharing-bottom {
                                            border-style: solid;
                                            border-color: #ededed;
                                            border-width: 1px 0;
                                            padding: 21px 0;
                                            margin-bottom: 42px;
                                        }

                                        .td-post-sharing-bottom .td-post-sharing {
                                            margin-bottom: -7px;
                                        }

                                        .td-post-sharing-visible,
                                        .td-social-sharing-hidden {
                                            display: inline-block;
                                        }

                                        .td-social-sharing-hidden ul {
                                            display: none;
                                        }

                                        .td-social-show-all .td-pulldown-filter-list {
                                            display: inline-block;
                                        }

                                        .td-social-network,
                                        .td-social-handler {
                                            position: relative;
                                            display: inline-block;
                                            margin: 0 3px 7px;
                                            height: 40px;
                                            min-width: 40px;
                                            font-size: 11px;
                                            text-align: center;
                                            vertical-align: middle;
                                        }

                                        .td-ps-notext .td-social-network .td-social-but-icon,
                                        .td-ps-notext .td-social-handler .td-social-but-icon {
                                            border-top-right-radius: 2px;
                                            border-bottom-right-radius: 2px;
                                        }

                                        .td-social-network {
                                            color: #000;
                                            overflow: hidden;
                                        }

                                        .td-social-network .td-social-but-icon {
                                            border-top-left-radius: 2px;
                                            border-bottom-left-radius: 2px;
                                        }

                                        .td-social-network .td-social-but-text {
                                            border-top-right-radius: 2px;
                                            border-bottom-right-radius: 2px;
                                        }

                                        .td-social-network:hover {
                                            opacity: 0.8 !important;
                                        }

                                        .td-social-handler {
                                            color: #444;
                                            border: 1px solid #e9e9e9;
                                            border-radius: 2px;
                                        }

                                        .td-social-handler .td-social-but-text {
                                            font-weight: 700;
                                        }

                                        .td-social-handler .td-social-but-text:before {
                                            background-color: #000;
                                            opacity: 0.08;
                                        }

                                        .td-social-share-text {
                                            margin-right: 18px;
                                        }

                                        .td-social-share-text:before,
                                        .td-social-share-text:after {
                                            content: '';
                                            position: absolute;
                                            top: 50%;
                                            -webkit-transform: translateY(-50%);
                                            transform: translateY(-50%);
                                            left: 100%;
                                            width: 0;
                                            height: 0;
                                            border-style: solid;
                                        }

                                        .td-social-share-text:before {
                                            border-width: 9px 0 9px 11px;
                                            border-color: transparent transparent transparent #e9e9e9;
                                        }

                                        .td-social-share-text:after {
                                            border-width: 8px 0 8px 10px;
                                            border-color: transparent transparent transparent #fff;
                                        }

                                        .td-social-but-text,
                                        .td-social-but-icon {
                                            display: inline-block;
                                            position: relative;
                                        }

                                        .td-social-but-icon {
                                            padding-left: 13px;
                                            padding-right: 13px;
                                            line-height: 40px;
                                            z-index: 1;
                                        }

                                        .td-social-but-icon i {
                                            position: relative;
                                            top: -1px;
                                            vertical-align: middle;
                                        }

                                        .td-social-but-text {
                                            margin-left: -6px;
                                            padding-left: 12px;
                                            padding-right: 17px;
                                            line-height: 40px;
                                        }

                                        .td-social-but-text:before {
                                            content: '';
                                            position: absolute;
                                            top: 12px;
                                            left: 0;
                                            width: 1px;
                                            height: 16px;
                                            background-color: #fff;
                                            opacity: 0.2;
                                            z-index: 1;
                                        }

                                        .td-social-handler i,
                                        .td-social-facebook i,
                                        .td-social-reddit i,
                                        .td-social-linkedin i,
                                        .td-social-tumblr i,
                                        .td-social-stumbleupon i,
                                        .td-social-vk i,
                                        .td-social-viber i {
                                            font-size: 14px;
                                        }

                                        .td-social-telegram i {
                                            font-size: 16px;
                                        }

                                        .td-social-mail i,
                                        .td-social-line i,
                                        .td-social-print i {
                                            font-size: 15px;
                                        }

                                        .td-social-handler .td-icon-share {
                                            top: -1px;
                                            left: -1px;
                                        }

                                        .td-social-twitter .td-icon-twitter {
                                            font-size: 12px;
                                        }

                                        .td-social-pinterest .td-icon-pinterest {
                                            font-size: 13px;
                                        }

                                        .td-social-whatsapp .td-icon-whatsapp {
                                            font-size: 18px;
                                        }

                                        .td-social-reddit .td-social-but-icon {
                                            padding-right: 12px;
                                        }

                                        .td-social-reddit .td-icon-reddit {
                                            left: -1px;
                                        }

                                        .td-social-telegram .td-social-but-icon {
                                            padding-right: 12px;
                                        }

                                        .td-social-telegram .td-icon-telegram {
                                            left: -1px;
                                        }

                                        .td-social-stumbleupon .td-social-but-icon {
                                            padding-right: 11px;
                                        }

                                        .td-social-stumbleupon .td-icon-stumbleupon {
                                            left: -2px;
                                        }

                                        .td-social-digg .td-social-but-icon {
                                            padding-right: 11px;
                                        }

                                        .td-social-digg .td-icon-digg {
                                            left: -2px;
                                            font-size: 17px;
                                        }

                                        .td-social-vk .td-social-but-icon {
                                            padding-right: 11px;
                                        }

                                        .td-social-vk .td-icon-vk {
                                            left: -2px;
                                        }

                                        .td-social-naver .td-icon-naver {
                                            left: -1px;
                                            font-size: 16px;
                                        }

                                        .td-social-expand-tabs i {
                                            top: -2px;
                                            left: -1px;
                                            font-size: 16px;
                                        }

                                        @media (min-width: 767px) {

                                            .td-social-line,
                                            .td-social-viber {
                                                display: none;
                                            }
                                        }

                                        .td-ps-bg .td-social-network {
                                            color: #fff;
                                        }

                                        .td-ps-bg .td-social-facebook .td-social-but-icon,
                                        .td-ps-bg .td-social-facebook .td-social-but-text {
                                            background-color: #516eab;
                                        }

                                        .td-ps-bg .td-social-twitter .td-social-but-icon,
                                        .td-ps-bg .td-social-twitter .td-social-but-text {
                                            background-color: #29c5f6;
                                        }

                                        .td-ps-bg .td-social-pinterest .td-social-but-icon,
                                        .td-ps-bg .td-social-pinterest .td-social-but-text {
                                            background-color: #ca212a;
                                        }

                                        .td-ps-bg .td-social-whatsapp .td-social-but-icon,
                                        .td-ps-bg .td-social-whatsapp .td-social-but-text {
                                            background-color: #7bbf6a;
                                        }

                                        .td-ps-bg .td-social-reddit .td-social-but-icon,
                                        .td-ps-bg .td-social-reddit .td-social-but-text {
                                            background-color: #f54200;
                                        }

                                        .td-ps-bg .td-social-mail .td-social-but-icon,
                                        .td-ps-bg .td-social-digg .td-social-but-icon,
                                        .td-ps-bg .td-social-mail .td-social-but-text,
                                        .td-ps-bg .td-social-digg .td-social-but-text {
                                            background-color: #000;
                                        }

                                        .td-ps-bg .td-social-print .td-social-but-icon,
                                        .td-ps-bg .td-social-print .td-social-but-text {
                                            background-color: #333;
                                        }

                                        .td-ps-bg .td-social-linkedin .td-social-but-icon,
                                        .td-ps-bg .td-social-linkedin .td-social-but-text {
                                            background-color: #0266a0;
                                        }

                                        .td-ps-bg .td-social-tumblr .td-social-but-icon,
                                        .td-ps-bg .td-social-tumblr .td-social-but-text {
                                            background-color: #3e5a70;
                                        }

                                        .td-ps-bg .td-social-telegram .td-social-but-icon,
                                        .td-ps-bg .td-social-telegram .td-social-but-text {
                                            background-color: #179cde;
                                        }

                                        .td-ps-bg .td-social-stumbleupon .td-social-but-icon,
                                        .td-ps-bg .td-social-stumbleupon .td-social-but-text {
                                            background-color: #ee4813;
                                        }

                                        .td-ps-bg .td-social-vk .td-social-but-icon,
                                        .td-ps-bg .td-social-vk .td-social-but-text {
                                            background-color: #4c75a3;
                                        }

                                        .td-ps-bg .td-social-line .td-social-but-icon,
                                        .td-ps-bg .td-social-line .td-social-but-text {
                                            background-color: #00b900;
                                        }

                                        .td-ps-bg .td-social-viber .td-social-but-icon,
                                        .td-ps-bg .td-social-viber .td-social-but-text {
                                            background-color: #5d54a4;
                                        }

                                        .td-ps-bg .td-social-naver .td-social-but-icon,
                                        .td-ps-bg .td-social-naver .td-social-but-text {
                                            background-color: #3ec729;
                                        }

                                        .td-ps-dark-bg .td-social-network {
                                            color: #fff;
                                        }

                                        .td-ps-dark-bg .td-social-network .td-social-but-icon,
                                        .td-ps-dark-bg .td-social-network .td-social-but-text {
                                            background-color: #000;
                                        }

                                        .td-ps-border .td-social-network .td-social-but-icon,
                                        .td-ps-border .td-social-network .td-social-but-text {
                                            line-height: 38px;
                                            border-width: 1px;
                                            border-style: solid;
                                        }

                                        .td-ps-border .td-social-network .td-social-but-text {
                                            border-left-width: 0;
                                        }

                                        .td-ps-border .td-social-network .td-social-but-text:before {
                                            background-color: #000;
                                            opacity: 0.08;
                                        }

                                        .td-ps-border.td-ps-padding .td-social-network .td-social-but-icon {
                                            border-right-width: 0;
                                        }

                                        .td-ps-border.td-ps-padding .td-social-network.td-social-expand-tabs .td-social-but-icon {
                                            border-right-width: 1px;
                                        }

                                        .td-ps-border-grey .td-social-but-icon,
                                        .td-ps-border-grey .td-social-but-text {
                                            border-color: #e9e9e9;
                                        }

                                        .td-ps-border-colored .td-social-facebook .td-social-but-icon,
                                        .td-ps-border-colored .td-social-facebook .td-social-but-text {
                                            border-color: #516eab;
                                        }

                                        .td-ps-border-colored .td-social-twitter .td-social-but-icon,
                                        .td-ps-border-colored .td-social-twitter .td-social-but-text {
                                            border-color: #29c5f6;
                                        }

                                        .td-ps-border-colored .td-social-pinterest .td-social-but-icon,
                                        .td-ps-border-colored .td-social-pinterest .td-social-but-text {
                                            border-color: #ca212a;
                                        }

                                        .td-ps-border-colored .td-social-whatsapp .td-social-but-icon,
                                        .td-ps-border-colored .td-social-whatsapp .td-social-but-text {
                                            border-color: #7bbf6a;
                                        }

                                        .td-ps-border-colored .td-social-reddit .td-social-but-icon,
                                        .td-ps-border-colored .td-social-reddit .td-social-but-text {
                                            border-color: #f54200;
                                        }

                                        .td-ps-border-colored .td-social-mail .td-social-but-icon,
                                        .td-ps-border-colored .td-social-digg .td-social-but-icon,
                                        .td-ps-border-colored .td-social-mail .td-social-but-text,
                                        .td-ps-border-colored .td-social-digg .td-social-but-text {
                                            border-color: #000;
                                        }

                                        .td-ps-border-colored .td-social-print .td-social-but-icon,
                                        .td-ps-border-colored .td-social-print .td-social-but-text {
                                            border-color: #333;
                                        }

                                        .td-ps-border-colored .td-social-linkedin .td-social-but-icon,
                                        .td-ps-border-colored .td-social-linkedin .td-social-but-text {
                                            border-color: #0266a0;
                                        }

                                        .td-ps-border-colored .td-social-tumblr .td-social-but-icon,
                                        .td-ps-border-colored .td-social-tumblr .td-social-but-text {
                                            border-color: #3e5a70;
                                        }

                                        .td-ps-border-colored .td-social-telegram .td-social-but-icon,
                                        .td-ps-border-colored .td-social-telegram .td-social-but-text {
                                            border-color: #179cde;
                                        }

                                        .td-ps-border-colored .td-social-stumbleupon .td-social-but-icon,
                                        .td-ps-border-colored .td-social-stumbleupon .td-social-but-text {
                                            border-color: #ee4813;
                                        }

                                        .td-ps-border-colored .td-social-vk .td-social-but-icon,
                                        .td-ps-border-colored .td-social-vk .td-social-but-text {
                                            border-color: #4c75a3;
                                        }

                                        .td-ps-border-colored .td-social-line .td-social-but-icon,
                                        .td-ps-border-colored .td-social-line .td-social-but-text {
                                            border-color: #00b900;
                                        }

                                        .td-ps-border-colored .td-social-viber .td-social-but-icon,
                                        .td-ps-border-colored .td-social-viber .td-social-but-text {
                                            border-color: #5d54a4;
                                        }

                                        .td-ps-border-colored .td-social-viber .td-social-but-icon,
                                        .td-ps-border-colored .td-social-viber .td-social-but-text {
                                            border-color: #3ec729;
                                        }

                                        .td-ps-icon-bg .td-social-but-icon {
                                            height: 100%;
                                            border-color: transparent !important;
                                        }

                                        .td-ps-icon-bg .td-social-network .td-social-but-icon {
                                            color: #fff;
                                        }

                                        .td-ps-icon-bg .td-social-facebook .td-social-but-icon {
                                            background-color: #516eab;
                                        }

                                        .td-ps-icon-bg .td-social-twitter .td-social-but-icon {
                                            background-color: #29c5f6;
                                        }

                                        .td-ps-icon-bg .td-social-pinterest .td-social-but-icon {
                                            background-color: #ca212a;
                                        }

                                        .td-ps-icon-bg .td-social-whatsapp .td-social-but-icon {
                                            background-color: #7bbf6a;
                                        }

                                        .td-ps-icon-bg .td-social-reddit .td-social-but-icon {
                                            background-color: #f54200;
                                        }

                                        .td-ps-icon-bg .td-social-mail .td-social-but-icon,
                                        .td-ps-icon-bg .td-social-digg .td-social-but-icon {
                                            background-color: #000;
                                        }

                                        .td-ps-icon-bg .td-social-print .td-social-but-icon {
                                            background-color: #333;
                                        }

                                        .td-ps-icon-bg .td-social-linkedin .td-social-but-icon {
                                            background-color: #0266a0;
                                        }

                                        .td-ps-icon-bg .td-social-tumblr .td-social-but-icon {
                                            background-color: #3e5a70;
                                        }

                                        .td-ps-icon-bg .td-social-telegram .td-social-but-icon {
                                            background-color: #179cde;
                                        }

                                        .td-ps-icon-bg .td-social-stumbleupon .td-social-but-icon {
                                            background-color: #ee4813;
                                        }

                                        .td-ps-icon-bg .td-social-vk .td-social-but-icon {
                                            background-color: #4c75a3;
                                        }

                                        .td-ps-icon-bg .td-social-line .td-social-but-icon {
                                            background-color: #00b900;
                                        }

                                        .td-ps-icon-bg .td-social-viber .td-social-but-icon {
                                            background-color: #5d54a4;
                                        }

                                        .td-ps-icon-bg .td-social-naver .td-social-but-icon {
                                            background-color: #3ec729;
                                        }

                                        .td-ps-icon-bg .td-social-but-text {
                                            margin-left: -3px;
                                        }

                                        .td-ps-icon-bg .td-social-network .td-social-but-text:before {
                                            display: none;
                                        }

                                        .td-ps-icon-arrow .td-social-network .td-social-but-icon:after {
                                            content: '';
                                            position: absolute;
                                            top: 50%;
                                            -webkit-transform: translateY(-50%);
                                            transform: translateY(-50%);
                                            left: calc(100% + 1px);
                                            width: 0;
                                            height: 0;
                                            border-style: solid;
                                            border-width: 9px 0 9px 11px;
                                            border-color: transparent transparent transparent #000;
                                        }

                                        .td-ps-icon-arrow .td-social-network .td-social-but-text {
                                            padding-left: 20px;
                                        }

                                        .td-ps-icon-arrow .td-social-network .td-social-but-text:before {
                                            display: none;
                                        }

                                        .td-ps-icon-arrow.td-ps-padding .td-social-network .td-social-but-icon:after {
                                            left: 100%;
                                        }

                                        .td-ps-icon-arrow .td-social-facebook .td-social-but-icon:after {
                                            border-left-color: #516eab;
                                        }

                                        .td-ps-icon-arrow .td-social-twitter .td-social-but-icon:after {
                                            border-left-color: #29c5f6;
                                        }

                                        .td-ps-icon-arrow .td-social-pinterest .td-social-but-icon:after {
                                            border-left-color: #ca212a;
                                        }

                                        .td-ps-icon-arrow .td-social-whatsapp .td-social-but-icon:after {
                                            border-left-color: #7bbf6a;
                                        }

                                        .td-ps-icon-arrow .td-social-reddit .td-social-but-icon:after {
                                            border-left-color: #f54200;
                                        }

                                        .td-ps-icon-arrow .td-social-mail .td-social-but-icon:after,
                                        .td-ps-icon-arrow .td-social-digg .td-social-but-icon:after {
                                            border-left-color: #000;
                                        }

                                        .td-ps-icon-arrow .td-social-print .td-social-but-icon:after {
                                            border-left-color: #333;
                                        }

                                        .td-ps-icon-arrow .td-social-linkedin .td-social-but-icon:after {
                                            border-left-color: #0266a0;
                                        }

                                        .td-ps-icon-arrow .td-social-tumblr .td-social-but-icon:after {
                                            border-left-color: #3e5a70;
                                        }

                                        .td-ps-icon-arrow .td-social-telegram .td-social-but-icon:after {
                                            border-left-color: #179cde;
                                        }

                                        .td-ps-icon-arrow .td-social-stumbleupon .td-social-but-icon:after {
                                            border-left-color: #ee4813;
                                        }

                                        .td-ps-icon-arrow .td-social-vk .td-social-but-icon:after {
                                            border-left-color: #4c75a3;
                                        }

                                        .td-ps-icon-arrow .td-social-line .td-social-but-icon:after {
                                            border-left-color: #00b900;
                                        }

                                        .td-ps-icon-arrow .td-social-viber .td-social-but-icon:after {
                                            border-left-color: #5d54a4;
                                        }

                                        .td-ps-icon-arrow .td-social-naver .td-social-but-icon:after {
                                            border-left-color: #3ec729;
                                        }

                                        .td-ps-icon-arrow .td-social-expand-tabs .td-social-but-icon:after {
                                            display: none;
                                        }

                                        .td-ps-icon-color .td-social-facebook .td-social-but-icon {
                                            color: #516eab;
                                        }

                                        .td-ps-icon-color .td-social-twitter .td-social-but-icon {
                                            color: #29c5f6;
                                        }

                                        .td-ps-icon-color .td-social-pinterest .td-social-but-icon {
                                            color: #ca212a;
                                        }

                                        .td-ps-icon-color .td-social-whatsapp .td-social-but-icon {
                                            color: #7bbf6a;
                                        }

                                        .td-ps-icon-color .td-social-reddit .td-social-but-icon {
                                            color: #f54200;
                                        }

                                        .td-ps-icon-color .td-social-mail .td-social-but-icon,
                                        .td-ps-icon-color .td-social-digg .td-social-but-icon {
                                            color: #000;
                                        }

                                        .td-ps-icon-color .td-social-print .td-social-but-icon {
                                            color: #333;
                                        }

                                        .td-ps-icon-color .td-social-linkedin .td-social-but-icon {
                                            color: #0266a0;
                                        }

                                        .td-ps-icon-color .td-social-tumblr .td-social-but-icon {
                                            color: #3e5a70;
                                        }

                                        .td-ps-icon-color .td-social-telegram .td-social-but-icon {
                                            color: #179cde;
                                        }

                                        .td-ps-icon-color .td-social-stumbleupon .td-social-but-icon {
                                            color: #ee4813;
                                        }

                                        .td-ps-icon-color .td-social-vk .td-social-but-icon {
                                            color: #4c75a3;
                                        }

                                        .td-ps-icon-color .td-social-line .td-social-but-icon {
                                            color: #00b900;
                                        }

                                        .td-ps-icon-color .td-social-viber .td-social-but-icon {
                                            color: #5d54a4;
                                        }

                                        .td-ps-icon-color .td-social-naver .td-social-but-icon {
                                            color: #3ec729;
                                        }

                                        .td-ps-text-color .td-social-but-text {
                                            font-weight: 700;
                                        }

                                        .td-ps-text-color .td-social-facebook .td-social-but-text {
                                            color: #516eab;
                                        }

                                        .td-ps-text-color .td-social-twitter .td-social-but-text {
                                            color: #29c5f6;
                                        }

                                        .td-ps-text-color .td-social-pinterest .td-social-but-text {
                                            color: #ca212a;
                                        }

                                        .td-ps-text-color .td-social-whatsapp .td-social-but-text {
                                            color: #7bbf6a;
                                        }

                                        .td-ps-text-color .td-social-reddit .td-social-but-text {
                                            color: #f54200;
                                        }

                                        .td-ps-text-color .td-social-mail .td-social-but-text,
                                        .td-ps-text-color .td-social-digg .td-social-but-text {
                                            color: #000;
                                        }

                                        .td-ps-text-color .td-social-print .td-social-but-text {
                                            color: #333;
                                        }

                                        .td-ps-text-color .td-social-linkedin .td-social-but-text {
                                            color: #0266a0;
                                        }

                                        .td-ps-text-color .td-social-tumblr .td-social-but-text {
                                            color: #3e5a70;
                                        }

                                        .td-ps-text-color .td-social-telegram .td-social-but-text {
                                            color: #179cde;
                                        }

                                        .td-ps-text-color .td-social-stumbleupon .td-social-but-text {
                                            color: #ee4813;
                                        }

                                        .td-ps-text-color .td-social-vk .td-social-but-text {
                                            color: #4c75a3;
                                        }

                                        .td-ps-text-color .td-social-line .td-social-but-text {
                                            color: #00b900;
                                        }

                                        .td-ps-text-color .td-social-viber .td-social-but-text {
                                            color: #5d54a4;
                                        }

                                        .td-ps-text-color .td-social-naver .td-social-but-text {
                                            color: #3ec729;
                                        }

                                        .td-ps-text-color .td-social-expand-tabs .td-social-but-text {
                                            color: #b1b1b1;
                                        }

                                        .td-ps-notext .td-social-but-icon {
                                            width: 40px;
                                        }

                                        .td-ps-notext .td-social-network .td-social-but-text {
                                            display: none;
                                        }

                                        .td-ps-padding .td-social-network .td-social-but-icon {
                                            padding-left: 17px;
                                            padding-right: 17px;
                                        }

                                        .td-ps-padding .td-social-handler .td-social-but-icon {
                                            width: 40px;
                                        }

                                        .td-ps-padding .td-social-reddit .td-social-but-icon,
                                        .td-ps-padding .td-social-telegram .td-social-but-icon {
                                            padding-right: 16px;
                                        }

                                        .td-ps-padding .td-social-stumbleupon .td-social-but-icon,
                                        .td-ps-padding .td-social-digg .td-social-but-icon,
                                        .td-ps-padding .td-social-expand-tabs .td-social-but-icon {
                                            padding-right: 13px;
                                        }

                                        .td-ps-padding .td-social-vk .td-social-but-icon {
                                            padding-right: 14px;
                                        }

                                        .td-ps-padding .td-social-expand-tabs .td-social-but-icon {
                                            padding-left: 13px;
                                        }

                                        .td-ps-rounded .td-social-network .td-social-but-icon {
                                            border-top-left-radius: 100px;
                                            border-bottom-left-radius: 100px;
                                        }

                                        .td-ps-rounded .td-social-network .td-social-but-text {
                                            border-top-right-radius: 100px;
                                            border-bottom-right-radius: 100px;
                                        }

                                        .td-ps-rounded.td-ps-notext .td-social-network .td-social-but-icon {
                                            border-top-right-radius: 100px;
                                            border-bottom-right-radius: 100px;
                                        }

                                        .td-ps-rounded .td-social-expand-tabs {
                                            border-radius: 100px;
                                        }

                                        .td-ps-bar .td-social-network .td-social-but-icon,
                                        .td-ps-bar .td-social-network .td-social-but-text {
                                            -webkit-box-shadow: inset 0px -3px 0px 0px rgba(0, 0, 0, 0.31);
                                            box-shadow: inset 0px -3px 0px 0px rgba(0, 0, 0, 0.31);
                                        }

                                        .td-ps-bar .td-social-mail .td-social-but-icon,
                                        .td-ps-bar .td-social-digg .td-social-but-icon,
                                        .td-ps-bar .td-social-mail .td-social-but-text,
                                        .td-ps-bar .td-social-digg .td-social-but-text {
                                            -webkit-box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.28);
                                            box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.28);
                                        }

                                        .td-ps-bar .td-social-print .td-social-but-icon,
                                        .td-ps-bar .td-social-print .td-social-but-text {
                                            -webkit-box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.2);
                                            box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.2);
                                        }

                                        .td-ps-big .td-social-but-icon {
                                            display: block;
                                            line-height: 60px;
                                        }

                                        .td-ps-big .td-social-but-icon .td-icon-share {
                                            width: auto;
                                        }

                                        .td-ps-big .td-social-handler .td-social-but-text:before {
                                            display: none;
                                        }

                                        .td-ps-big .td-social-share-text .td-social-but-icon {
                                            width: 90px;
                                        }

                                        .td-ps-big .td-social-expand-tabs .td-social-but-icon {
                                            width: 60px;
                                        }

                                        @media (max-width: 767px) {
                                            .td-ps-big .td-social-share-text {
                                                display: none;
                                            }
                                        }

                                        .td-ps-big .td-social-facebook i,
                                        .td-ps-big .td-social-reddit i,
                                        .td-ps-big .td-social-mail i,
                                        .td-ps-big .td-social-linkedin i,
                                        .td-ps-big .td-social-tumblr i,
                                        .td-ps-big .td-social-stumbleupon i {
                                            margin-top: -2px;
                                        }

                                        .td-ps-big .td-social-facebook i,
                                        .td-ps-big .td-social-reddit i,
                                        .td-ps-big .td-social-linkedin i,
                                        .td-ps-big .td-social-tumblr i,
                                        .td-ps-big .td-social-stumbleupon i,
                                        .td-ps-big .td-social-vk i,
                                        .td-ps-big .td-social-viber i,
                                        .td-ps-big .td-social-share-text i {
                                            font-size: 22px;
                                        }

                                        .td-ps-big .td-social-telegram i {
                                            font-size: 24px;
                                        }

                                        .td-ps-big .td-social-mail i,
                                        .td-ps-big .td-social-line i,
                                        .td-ps-big .td-social-print i {
                                            font-size: 23px;
                                        }

                                        .td-ps-big .td-social-twitter i,
                                        .td-ps-big .td-social-expand-tabs i {
                                            font-size: 20px;
                                        }

                                        .td-ps-big .td-social-whatsapp i,
                                        .td-ps-big .td-social-naver i {
                                            font-size: 26px;
                                        }

                                        .td-ps-big .td-social-pinterest .td-icon-pinterest {
                                            font-size: 21px;
                                        }

                                        .td-ps-big .td-social-telegram .td-icon-telegram {
                                            left: 1px;
                                        }

                                        .td-ps-big .td-social-stumbleupon .td-icon-stumbleupon {
                                            left: -2px;
                                        }

                                        .td-ps-big .td-social-digg .td-icon-digg {
                                            left: -1px;
                                            font-size: 25px;
                                        }

                                        .td-ps-big .td-social-vk .td-icon-vk {
                                            left: -1px;
                                        }

                                        .td-ps-big .td-social-naver .td-icon-naver {
                                            left: 0;
                                        }

                                        .td-ps-big .td-social-but-text {
                                            margin-left: 0;
                                            padding-top: 0;
                                            padding-left: 17px;
                                        }

                                        .td-ps-big.td-ps-notext .td-social-network,
                                        .td-ps-big.td-ps-notext .td-social-handler {
                                            height: 60px;
                                        }

                                        .td-ps-big.td-ps-notext .td-social-network {
                                            width: 60px;
                                        }

                                        .td-ps-big.td-ps-notext .td-social-network .td-social-but-icon {
                                            width: 60px;
                                        }

                                        .td-ps-big.td-ps-notext .td-social-share-text .td-social-but-icon {
                                            line-height: 40px;
                                        }

                                        .td-ps-big.td-ps-notext .td-social-share-text .td-social-but-text {
                                            display: block;
                                            line-height: 1;
                                        }

                                        .td-ps-big.td-ps-padding .td-social-network,
                                        .td-ps-big.td-ps-padding .td-social-handler {
                                            height: 90px;
                                            font-size: 13px;
                                        }

                                        .td-ps-big.td-ps-padding .td-social-network {
                                            min-width: 60px;
                                        }

                                        .td-ps-big.td-ps-padding .td-social-but-icon {
                                            border-bottom-left-radius: 0;
                                            border-top-right-radius: 2px;
                                        }

                                        .td-ps-big.td-ps-padding.td-ps-bar .td-social-but-icon {
                                            -webkit-box-shadow: none;
                                            box-shadow: none;
                                        }

                                        .td-ps-big.td-ps-padding .td-social-but-text {
                                            display: block;
                                            padding-bottom: 17px;
                                            line-height: 1;
                                            border-top-left-radius: 0;
                                            border-top-right-radius: 0;
                                            border-bottom-left-radius: 2px;
                                        }

                                        .td-ps-big.td-ps-padding .td-social-but-text:before {
                                            display: none;
                                        }

                                        .td-ps-big.td-ps-padding .td-social-expand-tabs i {
                                            line-height: 90px;
                                        }

                                        .td-ps-nogap {
                                            margin-left: 0;
                                            margin-right: 0;
                                        }

                                        .td-ps-nogap .td-social-network,
                                        .td-ps-nogap .td-social-handler {
                                            margin-left: 0;
                                            margin-right: 0;
                                            border-radius: 0;
                                        }

                                        .td-ps-nogap .td-social-network .td-social-but-icon,
                                        .td-ps-nogap .td-social-network .td-social-but-text {
                                            border-radius: 0;
                                        }

                                        .td-ps-nogap .td-social-expand-tabs {
                                            border-radius: 0;
                                        }

                                        .td-post-sharing-style7 .td-social-network .td-social-but-icon {
                                            height: 100%;
                                        }

                                        .td-post-sharing-style7 .td-social-network .td-social-but-icon:before {
                                            content: '';
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            width: 100%;
                                            height: 100%;
                                            background-color: rgba(0, 0, 0, 0.31);
                                        }

                                        .td-post-sharing-style7 .td-social-network .td-social-but-text {
                                            padding-left: 17px;
                                        }

                                        .td-post-sharing-style7 .td-social-network .td-social-but-text:before {
                                            display: none;
                                        }

                                        .td-post-sharing-style7 .td-social-mail .td-social-but-icon:before,
                                        .td-post-sharing-style7 .td-social-digg .td-social-but-icon:before {
                                            background-color: rgba(255, 255, 255, 0.2);
                                        }

                                        .td-post-sharing-style7 .td-social-print .td-social-but-icon:before {
                                            background-color: rgba(255, 255, 255, 0.1);
                                        }

                                        @media (max-width: 767px) {

                                            .td-post-sharing-style1 .td-social-share-text .td-social-but-text,
                                            .td-post-sharing-style3 .td-social-share-text .td-social-but-text,
                                            .td-post-sharing-style5 .td-social-share-text .td-social-but-text,
                                            .td-post-sharing-style14 .td-social-share-text .td-social-but-text,
                                            .td-post-sharing-style16 .td-social-share-text .td-social-but-text {
                                                display: none !important;
                                            }
                                        }

                                        @media (max-width: 767px) {

                                            .td-post-sharing-style2 .td-social-share-text,
                                            .td-post-sharing-style4 .td-social-share-text,
                                            .td-post-sharing-style6 .td-social-share-text,
                                            .td-post-sharing-style7 .td-social-share-text,
                                            .td-post-sharing-style15 .td-social-share-text,
                                            .td-post-sharing-style17 .td-social-share-text,
                                            .td-post-sharing-style18 .td-social-share-text,
                                            .td-post-sharing-style19 .td-social-share-text,
                                            .td-post-sharing-style20 .td-social-share-text {
                                                display: none !important;
                                            }
                                        }
                                    </style>

                                    <div class="td-post-sharing-visible"><a
                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook"
                                            href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fonoff.vn%2Fblog%2Fcong-thuc-giup-ban-luon-co-cho-minh-bo-do-lot-ung-y%2F"
                                            title="Facebook">
                                            <div class="td-social-but-icon"><i class="td-icon-facebook"></i></div>
                                            <div class="td-social-but-text">Facebook</div>
                                        </a><a
                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter"
                                            href="https://twitter.com/intent/tweet?text=C%C3%B4ng+th%E1%BB%A9c+gi%C3%BAp+b%E1%BA%A1n+lu%C3%B4n+c%C3%B3+cho+m%C3%ACnh+b%E1%BB%99+%C4%91%E1%BB%93+l%C3%B3t+%C6%B0ng+%C3%BD&amp;url=https%3A%2F%2Fonoff.vn%2Fblog%2Fcong-thuc-giup-ban-luon-co-cho-minh-bo-do-lot-ung-y%2F&amp;via=ONOFF"
                                            title="Twitter">
                                            <div class="td-social-but-icon"><i class="td-icon-twitter"></i></div>
                                            <div class="td-social-but-text">Twitter</div>
                                        </a><a
                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-pinterest"
                                            href="https://pinterest.com/pin/create/button/?url=https://onoff.vn/blog/cong-thuc-giup-ban-luon-co-cho-minh-bo-do-lot-ung-y/&amp;media=https://onoff.vn/blog/wp-content/uploads/2022/12/cong-thuc-de-luon-co-do-lot-ung-y-3.jpg&amp;description=M%e1%ba%b7c%20b%e1%bb%99%20%c4%91%e1%bb%93%20l%c3%b3t%20h%e1%bb%a3p%20gu%20v%c3%a0%20tho%e1%ba%a3i%20m%c3%a1i%20s%e1%ba%bd%20gi%c3%bap%20ch%e1%bb%8b%20em%20tr%e1%bb%9f%20n%c3%aan%20quy%e1%ba%bfn%20r%c5%a9%20v%c3%a0%20t%e1%bb%b1%20tin%20h%c6%a1n%20r%e1%ba%a5t%20nhi%e1%bb%81u.%20H%c6%a1n%20h%e1%ba%bft,%20ch%c3%bang%20gi%c3%bap%20ph%c3%a1i%20%c4%91%e1%ba%b9p%20c%e1%ba%a3m%20gi%c3%a1c%20vui%20v%e1%ba%bb%20v%c3%a0%20h%e1%ba%a1nh%20ph%c3%bac%20khi%20%c4%91%c6%b0%e1%bb%a3c%20l%c3%a0%20ch%c3%adnh%20m%c3%acnh."
                                            title="Pinterest">
                                            <div class="td-social-but-icon"><i class="td-icon-pinterest"></i></div>
                                            <div class="td-social-but-text">Pinterest</div>
                                        </a><a
                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-whatsapp"
                                            href="https://api.whatsapp.com/send?text=C%C3%B4ng+th%E1%BB%A9c+gi%C3%BAp+b%E1%BA%A1n+lu%C3%B4n+c%C3%B3+cho+m%C3%ACnh+b%E1%BB%99+%C4%91%E1%BB%93+l%C3%B3t+%C6%B0ng+%C3%BD%20%0A%0A%20https://onoff.vn/blog/cong-thuc-giup-ban-luon-co-cho-minh-bo-do-lot-ung-y/"
                                            title="WhatsApp">
                                            <div class="td-social-but-icon"><i class="td-icon-whatsapp"></i></div>
                                            <div class="td-social-but-text">WhatsApp</div>
                                        </a></div>
                                    <div class="td-social-sharing-hidden">
                                        <ul class="td-pulldown-filter-list"></ul><a
                                            class="td-social-sharing-button td-social-handler td-social-expand-tabs"
                                            href="#" data-block-uid="td_social_sharing_article_top" title="More">
                                            <div class="td-social-but-icon"><i
                                                    class="td-icon-plus td-social-expand-tabs-icon"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="td-post-content tagdiv-type">
                                <!-- image -->
                                <div class="td-post-featured-image">
                                     <!-- 29/12/2023 -->
                                    <!-- <figure><a
                                            href="{{route('blog.detail', [$post->slug])}}"
                                            data-caption="{{$post->title}}">
                                            <img
                                                width="696" height="468" class="entry-thumb td-modal-image"
                                                src="{{$post->photo}}"
                                                sizes="(max-width: 696px) 100vw, 696px" alt=""
                                                title="{{$post->title}}" />
                                            </a>
                                        <figcaption class="wp-caption-text">{{$post->title}}</figcaption>
                                    </figure> -->
                                </div>
                                <!-- content -->
                                <div class="td-a-rec td-a-rec-id-content_top  tdi_2 td_block_template_1">
                                    {!! $post->content !!}
                                </div>
                            </div>

                            <footer>
                                <!-- post pagination --> <!-- review -->
                                <div class="td-post-source-tags">
                                    <!-- source via --> <!-- tags -->
                                </div>

                                {{-- <div class="td-post-sharing-bottom">
                                    <div class="td-post-sharing-classic"><iframe frameBorder="0"
                                            src="https://www.facebook.com/plugins/like.php?href=https://onoff.vn/blog/cong-thuc-giup-ban-luon-co-cho-minh-bo-do-lot-ung-y/&amp;layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21"
                                            style="border:none; overflow:hidden; width:auto; height:21px; background-color:transparent;"></iframe>
                                    </div>
                                    <div id="td_social_sharing_article_bottom"
                                        class="td-post-sharing td-ps-bg td-ps-notext td-post-sharing-style1 ">
                                        <div class="td-post-sharing-visible"><a
                                                class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook"
                                                href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fonoff.vn%2Fblog%2Fcong-thuc-giup-ban-luon-co-cho-minh-bo-do-lot-ung-y%2F"
                                                title="Facebook">
                                                <div class="td-social-but-icon"><i class="td-icon-facebook"></i>
                                                </div>
                                                <div class="td-social-but-text">Facebook</div>
                                            </a><a
                                                class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter"
                                                href="https://twitter.com/intent/tweet?text=C%C3%B4ng+th%E1%BB%A9c+gi%C3%BAp+b%E1%BA%A1n+lu%C3%B4n+c%C3%B3+cho+m%C3%ACnh+b%E1%BB%99+%C4%91%E1%BB%93+l%C3%B3t+%C6%B0ng+%C3%BD&amp;url=https%3A%2F%2Fonoff.vn%2Fblog%2Fcong-thuc-giup-ban-luon-co-cho-minh-bo-do-lot-ung-y%2F&amp;via=ONOFF"
                                                title="Twitter">
                                                <div class="td-social-but-icon"><i class="td-icon-twitter"></i>
                                                </div>
                                                <div class="td-social-but-text">Twitter</div>
                                            </a><a
                                                class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-pinterest"
                                                href="https://pinterest.com/pin/create/button/?url=https://onoff.vn/blog/cong-thuc-giup-ban-luon-co-cho-minh-bo-do-lot-ung-y/&amp;media=https://onoff.vn/blog/wp-content/uploads/2022/12/cong-thuc-de-luon-co-do-lot-ung-y-3.jpg&amp;description=M%e1%ba%b7c%20b%e1%bb%99%20%c4%91%e1%bb%93%20l%c3%b3t%20h%e1%bb%a3p%20gu%20v%c3%a0%20tho%e1%ba%a3i%20m%c3%a1i%20s%e1%ba%bd%20gi%c3%bap%20ch%e1%bb%8b%20em%20tr%e1%bb%9f%20n%c3%aan%20quy%e1%ba%bfn%20r%c5%a9%20v%c3%a0%20t%e1%bb%b1%20tin%20h%c6%a1n%20r%e1%ba%a5t%20nhi%e1%bb%81u.%20H%c6%a1n%20h%e1%ba%bft,%20ch%c3%bang%20gi%c3%bap%20ph%c3%a1i%20%c4%91%e1%ba%b9p%20c%e1%ba%a3m%20gi%c3%a1c%20vui%20v%e1%ba%bb%20v%c3%a0%20h%e1%ba%a1nh%20ph%c3%bac%20khi%20%c4%91%c6%b0%e1%bb%a3c%20l%c3%a0%20ch%c3%adnh%20m%c3%acnh."
                                                title="Pinterest">
                                                <div class="td-social-but-icon"><i class="td-icon-pinterest"></i>
                                                </div>
                                                <div class="td-social-but-text">Pinterest</div>
                                            </a><a
                                                class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-whatsapp"
                                                href="https://api.whatsapp.com/send?text=C%C3%B4ng+th%E1%BB%A9c+gi%C3%BAp+b%E1%BA%A1n+lu%C3%B4n+c%C3%B3+cho+m%C3%ACnh+b%E1%BB%99+%C4%91%E1%BB%93+l%C3%B3t+%C6%B0ng+%C3%BD%20%0A%0A%20https://onoff.vn/blog/cong-thuc-giup-ban-luon-co-cho-minh-bo-do-lot-ung-y/"
                                                title="WhatsApp">
                                                <div class="td-social-but-icon"><i class="td-icon-whatsapp"></i>
                                                </div>
                                                <div class="td-social-but-text">WhatsApp</div>
                                            </a></div>
                                        <div class="td-social-sharing-hidden">
                                            <ul class="td-pulldown-filter-list"></ul><a
                                                class="td-social-sharing-button td-social-handler td-social-expand-tabs"
                                                href="#" data-block-uid="td_social_sharing_article_bottom"
                                                title="More">
                                                <div class="td-social-but-icon"><i
                                                        class="td-icon-plus td-social-expand-tabs-icon"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- next prev -->
                                <div class="td-block-row td-post-next-prev">
                                    @if($previous)
                                    <div class="td-block-span6 td-post-prev-post">
                                        <div class="td-post-next-prev-content"><span>Bài viết trước</span><a
                                                href="{{route('blog.detail', [$previous->slug])}}">{{$previous->title}}</a></div>
                                    </div>
                                    @endif
                                    <div class="td-next-prev-separator"></div>
                                    @if($next)
                                    <div class="td-block-span6 td-post-next-post">
                                        <div class="td-post-next-prev-content"><span>Bài viết tiếp theo</span><a
                                                href="{{route('blog.detail', [$next->slug])}}">{{$next->title}}</a></div>
                                    </div>
                                    @endif
                                </div> <!-- author box -->
                                <!-- meta -->
                            </footer>
                        </article>
                    </div>
                </div>
                @include('layout-home.pages.blogs.includes.rightbar')
            </div>
        </div>
    </div>

</div>
@endsection

