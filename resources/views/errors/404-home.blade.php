@extends('layout-home.layout-base')
@section('title')
<title>404</title>
@endsection
@section('content')
<div class="cms-home cms-index-index page-layout-1column">
    <main id="maincontent" class="page-main">
        <div class="mce-content-body">
            {!! @$page->content !!}
        </div>
    </main>
</div>
@endsection
