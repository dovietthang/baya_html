@extends('layout-home.layout-base')
@section('title')
<title>{{ $page->title }}</title>
@endsection
@section('content')
<div class="cms-page-view page-layout-1column">
    <div class="breadcrumbs">
        <ul class="items">
            <li class="item home"> <a href="{{route('home')}}" title="Tới trang chủ">Trang Chủ</a> </li>
            <li class="item cms_page"> <strong>{{$page->title}}</strong> </li>
        </ul>
    </div>
    <main id="maincontent" class="page-main">
        <div data-bind="scope: 'messages'">
            <div role="alert" class="messages">
                @if(session('success'))
                <div class="message-success success message" data-ui-id="message-success">
                    <div>{{session('success')}}</div>
                </div>
                @endif
                @if(session('errors'))
                <div class="message-error error message" data-ui-id="message-error">
                    <div>{{session('errors')}}</div>
                </div>
                @endif
            </div>
        </div> <a id="contentarea" tabindex="-1"></a>
        <div class="page messages">
            <div data-placeholder="messages"></div>
        </div>
        <div class="columns">
            <div class="column main"><input name="form_key" type="hidden" value="xRadCShyc2hpncQF">
                <div id="authenticationPopup"
                    style="display: none;">
                </div>
                <div class="row">
                    <div class="col-md-3">
                        @include('layout-home.includes.support-bar', $page)
                    </div>
                    <div class="col-md-9">
                        <div class="mce-content-body">
                            {!! $page->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
