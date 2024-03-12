@extends('layout-home.layout-base')
@section('title')
<title>404</title>
@endsection
@section('content')
<main class="wrapperMain_content">
    <div class="layout-pageNot">
        <div class="container">
            <div class="content-pagenot text-center">
                <h1><span>404</span>Không tìm thấy trang</h1>
                <p class="subtext">Trang bạn đang tìm kiếm có thể đã bị xóa,
                    chuyển đi, thay đổi link hoặc chưa bao giờ tồn tại.</p>
                <p class=""><a href="{{ route('home') }}" class="button">TRỞ VỀ TRANG CHỦ</a></p>
            </div>
        </div>
    </div>
</main>
@endsection