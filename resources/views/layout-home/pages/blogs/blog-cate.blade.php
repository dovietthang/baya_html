@extends('layout-home.layout-base')
@section('title')
<title>{{ $cate->site_name}}</title>
@endsection
@section('content')
@php
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
@endphp
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
                            <h1>Nguồn cảm hứng</h1>
                        </div>
                        <div class="list-article-content blog-posts row">

                            <!-- Begin: Nội dung blog -->



                            <article class="article-loop col-md-6 col-6">
                                <div class="article-inner">
                                    <div class="article-image">
                                        <a href="nguon-cam-hung/bi-quyet-de-giu-can-bep-luon-gon-gang.html" class="blog-post-thumbnail" title="Bí Quyết Để Giữ Căn Bếp Luôn Gọn Gàng" rel="nofollow">
                                            <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/blog_baya_bq_giu_can_bep_gon_gan_0f15bf82cfa945c884efdc1b49de28ec_1024x1024.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Bí Quyết Để Giữ Căn Bếp Luôn Gọn Gàng">
                                        </a>
                                    </div>
                                    <div class="article-detail">
                                        <div class="article-title">
                                            <h3 class="post-title">
                                                <a href="nguon-cam-hung/bi-quyet-de-giu-can-bep-luon-gon-gang.html" title="Bí Quyết Để Giữ Căn Bếp Luôn Gọn Gàng">Bí Quyết Để Giữ Căn Bếp Luôn Gọn Gàng</a>
                                            </h3>
                                        </div>

                                        <p class="entry-content">Khu vực bếp là không gian quan trọng cho việc cả gia đình tận hưởng bữa ăn sau một ngày dài và là nơi để các chị em nội trợ chế biến ra những món...</p>

                                        <div class="article-post-meta">
                                            <span class="author">bởi: Tâm - Content ScaleUP</span>
                                            <span class="date">
                                                <time pubdate datetime="08 Tháng 03, 2024">08 Tháng 03, 2024</time>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>



                            <article class="article-loop col-md-6 col-6">
                                <div class="article-inner">
                                    <div class="article-image">
                                        <a href="nguon-cam-hung/tips-trang-tri-goc-hoc-tap-lam-viec-dep-va-khoa-hoc.html" class="blog-post-thumbnail" title="Tips Trang Trí Góc Học Tập, Làm Việc Đẹp Và Khoa Học" rel="nofollow">
                                            <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/blog_baya_tt_goc_hoc_tap__lam_vi_d891632de9504a479aa647e560226b51_grande.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Tips Trang Trí Góc Học Tập, Làm Việc Đẹp Và Khoa Học">
                                        </a>
                                    </div>
                                    <div class="article-detail">
                                        <div class="article-title">
                                            <h3 class="post-title">
                                                <a href="nguon-cam-hung/tips-trang-tri-goc-hoc-tap-lam-viec-dep-va-khoa-hoc.html" title="Tips Trang Trí Góc Học Tập, Làm Việc Đẹp Và Khoa Học">Tips Trang Trí Góc Học Tập, Làm Việc Đẹp Và Khoa Học</a>
                                            </h3>
                                        </div>

                                        <p class="entry-content">Những góc học tập, làm việc được bài trí một cách khoa học và thông minh, giúp cho công việc học tập của bạn thuận tiện hơn. Tuy nhiên, chúng ta thường sử dụng quá...</p>

                                        <div class="article-post-meta">
                                            <span class="author">bởi: Tâm - Content ScaleUP</span>
                                            <span class="date">
                                                <time pubdate datetime="01 Tháng 03, 2024">01 Tháng 03, 2024</time>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>



                            <article class="article-loop col-md-6 col-6">
                                <div class="article-inner">
                                    <div class="article-image">
                                        <a href="nguon-cam-hung/su-khac-biet-giua-phong-cach-thiet-ke-noi-that-vintage-va-retro.html" class="blog-post-thumbnail" title="Sự Khác Biệt Giữa Phong Cách Thiết Kế Nội Thất Vintage và Retro" rel="nofollow">
                                            <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/blog_baya_vintage_va_retro_cd57fb8114b74988bc115873094b4ba2_grande.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Sự Khác Biệt Giữa Phong Cách Thiết Kế Nội Thất Vintage và Retro">
                                        </a>
                                    </div>
                                    <div class="article-detail">
                                        <div class="article-title">
                                            <h3 class="post-title">
                                                <a href="nguon-cam-hung/su-khac-biet-giua-phong-cach-thiet-ke-noi-that-vintage-va-retro.html" title="Sự Khác Biệt Giữa Phong Cách Thiết Kế Nội Thất Vintage và Retro">Sự Khác Biệt Giữa Phong Cách Thiết Kế Nội Thất Vintage và Retro</a>
                                            </h3>
                                        </div>

                                        <p class="entry-content">Khi nói đến thiết kế nội thất, hai từ "vintage" và "retro" thường được sử dụng thay thế cho nhau. Tuy nhiên, mặc dù có nhiều điểm chung, hai phong cách này thực sự mang...</p>

                                        <div class="article-post-meta">
                                            <span class="author">bởi: Thứ - ScaleUP</span>
                                            <span class="date">
                                                <time pubdate datetime="15 Tháng 02, 2024">15 Tháng 02, 2024</time>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>



                            <article class="article-loop col-md-6 col-6">
                                <div class="article-inner">
                                    <div class="article-image">
                                        <a href="nguon-cam-hung/10-y-tuong-trang-tri-san-vuon-hien-dai-va-doc-dao.html" class="blog-post-thumbnail" title="10 Ý Tưởng Trang Trí Sân Vườn Hiện Đại và Độc Đáo" rel="nofollow">
                                            <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/blog_baya_tt_san_vuon_62a6ee9496dc4c30a235b906ef50f4b8_grande.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="10 Ý Tưởng Trang Trí Sân Vườn Hiện Đại và Độc Đáo">
                                        </a>
                                    </div>
                                    <div class="article-detail">
                                        <div class="article-title">
                                            <h3 class="post-title">
                                                <a href="nguon-cam-hung/10-y-tuong-trang-tri-san-vuon-hien-dai-va-doc-dao.html" title="10 Ý Tưởng Trang Trí Sân Vườn Hiện Đại và Độc Đáo">10 Ý Tưởng Trang Trí Sân Vườn Hiện Đại và Độc Đáo</a>
                                            </h3>
                                        </div>

                                        <p class="entry-content">Bạn muốn biến sân vườn nhà mình thành một không gian nghệ thuật, nơi hòa mình cùng thiên nhiên và thư giãn sau những giờ làm việc căng thẳng? Hãy khám phá 10 ý tưởng...</p>

                                        <div class="article-post-meta">
                                            <span class="author">bởi: Thứ - ScaleUP</span>
                                            <span class="date">
                                                <time pubdate datetime="05 Tháng 02, 2024">05 Tháng 02, 2024</time>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>



                            <article class="article-loop col-md-6 col-6">
                                <div class="article-inner">
                                    <div class="article-image">
                                        <a href="nguon-cam-hung/10-cach-trang-tri-ban-an-dep-mat-ngay-tet.html" class="blog-post-thumbnail" title="10 Cách Trang Trí Bàn Ăn Đẹp Mắt Ngày Tết" rel="nofollow">
                                            <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/blog_baya_tt_ban_an_ngay_tet_d069cd66d96a4ab09dc5f02f91539b19_grande.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="10 Cách Trang Trí Bàn Ăn Đẹp Mắt Ngày Tết">
                                        </a>
                                    </div>
                                    <div class="article-detail">
                                        <div class="article-title">
                                            <h3 class="post-title">
                                                <a href="nguon-cam-hung/10-cach-trang-tri-ban-an-dep-mat-ngay-tet.html" title="10 Cách Trang Trí Bàn Ăn Đẹp Mắt Ngày Tết">10 Cách Trang Trí Bàn Ăn Đẹp Mắt Ngày Tết</a>
                                            </h3>
                                        </div>

                                        <p class="entry-content">Tết không chỉ là dịp để sum họp gia đình, mà còn là cơ hội để thể hiện gu thẩm mỹ và sự sáng tạo trong trang trí nhà cửa, đặc biệt là bàn ăn....</p>

                                        <div class="article-post-meta">
                                            <span class="author">bởi: Thứ - ScaleUP</span>
                                            <span class="date">
                                                <time pubdate datetime="29 Tháng 01, 2024">29 Tháng 01, 2024</time>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>



                            <article class="article-loop col-md-6 col-6">
                                <div class="article-inner">
                                    <div class="article-image">
                                        <a href="nguon-cam-hung/bi-quyet-trang-tri-noi-that-cho-khong-gian-tet-am-cung.html" class="blog-post-thumbnail" title="Bí Quyết Trang Trí Nội Thất Cho Không Gian Tết Ấm Cúng" rel="nofollow">
                                            <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/blog_baya_tt_noi_that_cho_kg_tet_am_cung_7a6ea0bed99949b6ba1e22c67f3eef42_grande.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Bí Quyết Trang Trí Nội Thất Cho Không Gian Tết Ấm Cúng">
                                        </a>
                                    </div>
                                    <div class="article-detail">
                                        <div class="article-title">
                                            <h3 class="post-title">
                                                <a href="nguon-cam-hung/bi-quyet-trang-tri-noi-that-cho-khong-gian-tet-am-cung.html" title="Bí Quyết Trang Trí Nội Thất Cho Không Gian Tết Ấm Cúng">Bí Quyết Trang Trí Nội Thất Cho Không Gian Tết Ấm Cúng</a>
                                            </h3>
                                        </div>

                                        <p class="entry-content">Tết Nguyên Đán không chỉ là dịp để sum họp gia đình mà còn là cơ hội để làm mới không gian sống của chúng ta. Việc trang trí nội thất sao cho vừa mang...</p>

                                        <div class="article-post-meta">
                                            <span class="author">bởi: Thứ - ScaleUP</span>
                                            <span class="date">
                                                <time pubdate datetime="25 Tháng 01, 2024">25 Tháng 01, 2024</time>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>



                            <article class="article-loop col-md-6 col-6">
                                <div class="article-inner">
                                    <div class="article-image">
                                        <a href="nguon-cam-hung/tam-quan-trong-cua-thiet-ke-noi-that-trong-cuoc-song.html" class="blog-post-thumbnail" title="Tầm Quan Trọng Của Thiết Kế Nội Thất Trong Cuộc Sống" rel="nofollow">
                                            <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/blog_baya_tk_noi_that_trong_cs_b294eef399af4303add750e08c987994_grande.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Tầm Quan Trọng Của Thiết Kế Nội Thất Trong Cuộc Sống">
                                        </a>
                                    </div>
                                    <div class="article-detail">
                                        <div class="article-title">
                                            <h3 class="post-title">
                                                <a href="nguon-cam-hung/tam-quan-trong-cua-thiet-ke-noi-that-trong-cuoc-song.html" title="Tầm Quan Trọng Của Thiết Kế Nội Thất Trong Cuộc Sống">Tầm Quan Trọng Của Thiết Kế Nội Thất Trong Cuộc Sống</a>
                                            </h3>
                                        </div>

                                        <p class="entry-content">Thiết kế nội thất là một phần không thể thiếu và cực kỳ quan trọng trong mọi dự án xây dựng, bất kể đó là nhà cửa, văn phòng hay cửa hàng. Nó không chỉ...</p>

                                        <div class="article-post-meta">
                                            <span class="author">bởi: Thứ - ScaleUP</span>
                                            <span class="date">
                                                <time pubdate datetime="16 Tháng 01, 2024">16 Tháng 01, 2024</time>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>



                            <article class="article-loop col-md-6 col-6">
                                <div class="article-inner">
                                    <div class="article-image">
                                        <a href="nguon-cam-hung/phong-cach-noi-that-chau-a-nam-2024.html" class="blog-post-thumbnail" title="Phong Cách Nội Thất Châu Á Năm 2024" rel="nofollow">
                                            <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/blog_baya_nt_chau_a_2024_b27d711223e24eb283c12f2192ed20b6_grande.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Phong Cách Nội Thất Châu Á Năm 2024">
                                        </a>
                                    </div>
                                    <div class="article-detail">
                                        <div class="article-title">
                                            <h3 class="post-title">
                                                <a href="nguon-cam-hung/phong-cach-noi-that-chau-a-nam-2024.html" title="Phong Cách Nội Thất Châu Á Năm 2024">Phong Cách Nội Thất Châu Á Năm 2024</a>
                                            </h3>
                                        </div>

                                        <p class="entry-content">Năm mới đã đến và đây là thời điểm tuyệt vời để làm mới không gian sống của bạn. Nếu bạn đang tìm kiếm sự thay đổi trong trang trí nội thất, thì phong cách...</p>

                                        <div class="article-post-meta">
                                            <span class="author">bởi: Thứ - ScaleUP</span>
                                            <span class="date">
                                                <time pubdate datetime="11 Tháng 01, 2024">11 Tháng 01, 2024</time>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>



                            <article class="article-loop col-md-6 col-6">
                                <div class="article-inner">
                                    <div class="article-image">
                                        <a href="nguon-cam-hung/goi-y-10-cach-thiet-ke-noi-that-chuan-cho-can-ho-nho.html" class="blog-post-thumbnail" title="Gợi Ý 10 Cách Thiết Kế Nội Thất Chuẩn Cho Căn Hộ Nhỏ" rel="nofollow">
                                            <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/blog_baya_tk_cho_can_ho_nho_4653ff22fdf44262ad865a00800126d5_grande.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Gợi Ý 10 Cách Thiết Kế Nội Thất Chuẩn Cho Căn Hộ Nhỏ">
                                        </a>
                                    </div>
                                    <div class="article-detail">
                                        <div class="article-title">
                                            <h3 class="post-title">
                                                <a href="nguon-cam-hung/goi-y-10-cach-thiet-ke-noi-that-chuan-cho-can-ho-nho.html" title="Gợi Ý 10 Cách Thiết Kế Nội Thất Chuẩn Cho Căn Hộ Nhỏ">Gợi Ý 10 Cách Thiết Kế Nội Thất Chuẩn Cho Căn Hộ Nhỏ</a>
                                            </h3>
                                        </div>

                                        <p class="entry-content">Căn hộ có diện tích nhỏ luôn đòi hỏi sự sáng tạo và khéo léo trong thiết kế nội thất để tạo ra không gian thoải mái và tiện nghi cho&nbsp;cả gia đình. Bài viết...</p>

                                        <div class="article-post-meta">
                                            <span class="author">bởi: Thứ - ScaleUP</span>
                                            <span class="date">
                                                <time pubdate datetime="03 Tháng 01, 2024">03 Tháng 01, 2024</time>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>



                            <article class="article-loop col-md-6 col-6">
                                <div class="article-inner">
                                    <div class="article-image">
                                        <a href="nguon-cam-hung/nhung-xu-huong-thiet-ke-noi-that-dang-chu-y-nam-2023.html" class="blog-post-thumbnail" title="Những Xu Hướng Thiết Kế Nội Thất Đáng Chú Ý Năm 2023" rel="nofollow">
                                            <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/blog_baya_xu_huong_noi_that_2023_d22699dd03d248c6872a5d191591a8e5_grande.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Những Xu Hướng Thiết Kế Nội Thất Đáng Chú Ý Năm 2023">
                                        </a>
                                    </div>
                                    <div class="article-detail">
                                        <div class="article-title">
                                            <h3 class="post-title">
                                                <a href="nguon-cam-hung/nhung-xu-huong-thiet-ke-noi-that-dang-chu-y-nam-2023.html" title="Những Xu Hướng Thiết Kế Nội Thất Đáng Chú Ý Năm 2023">Những Xu Hướng Thiết Kế Nội Thất Đáng Chú Ý Năm 2023</a>
                                            </h3>
                                        </div>

                                        <p class="entry-content">Thiết kế nội thất không chỉ đơn giản&nbsp;là việc&nbsp;bài trí những món đồ trong ngôi nhà của bạn mà còn là cách tạo ra không gian sống đẹp và thoải mái. Mỗi năm, xu hướng...</p>

                                        <div class="article-post-meta">
                                            <span class="author">bởi: Thứ - ScaleUP</span>
                                            <span class="date">
                                                <time pubdate datetime="25 Tháng 12, 2023">25 Tháng 12, 2023</time>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>



                            <article class="article-loop col-md-6 col-6">
                                <div class="article-inner">
                                    <div class="article-image">
                                        <a href="nguon-cam-hung/mang-giang-sinh-vao-khong-gian-phong-khach.html" class="blog-post-thumbnail" title="Mang Giáng Sinh Vào Không Gian Phòng Khách" rel="nofollow">
                                            <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/xmas_21.12_3e15487d19c8482f83f6ade74cc182fc_grande.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Mang Giáng Sinh Vào Không Gian Phòng Khách">
                                        </a>
                                    </div>
                                    <div class="article-detail">
                                        <div class="article-title">
                                            <h3 class="post-title">
                                                <a href="nguon-cam-hung/mang-giang-sinh-vao-khong-gian-phong-khach.html" title="Mang Giáng Sinh Vào Không Gian Phòng Khách">Mang Giáng Sinh Vào Không Gian Phòng Khách</a>
                                            </h3>
                                        </div>

                                        <p class="entry-content">Giáng Sinh luôn là khoảnh khắc đặc biệt mà mọi người mong đợi và chờ đón vào cuối năm. Đó là thời gian tận hưởng niềm vui, hạnh phúc và sự ấm áp bên&nbsp;gia đình.&nbsp;Trong...</p>

                                        <div class="article-post-meta">
                                            <span class="author">bởi: Thứ - ScaleUP</span>
                                            <span class="date">
                                                <time pubdate datetime="22 Tháng 12, 2023">22 Tháng 12, 2023</time>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>



                            <article class="article-loop col-md-6 col-6">
                                <div class="article-inner">
                                    <div class="article-image">
                                        <a href="nguon-cam-hung/bua-tiec-giang-sinh-hoan-hao-voi-victoria-collection.html" class="blog-post-thumbnail" title="Bộ Sưu Tập Tủ Kệ Đầu Giường " BÁN CHẠY NHẤT" Tại Baya" rel="nofollow">
                                            <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/fix_a69e9d6c913c4badade5978d819b9480_grande.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Bộ Sưu Tập Tủ Kệ Đầu Giường " BÁN CHẠY NHẤT" Tại Baya">
                                        </a>
                                    </div>
                                    <div class="article-detail">
                                        <div class="article-title">
                                            <h3 class="post-title">
                                                <a href="nguon-cam-hung/bua-tiec-giang-sinh-hoan-hao-voi-victoria-collection.html" title="Bộ Sưu Tập Tủ Kệ Đầu Giường " BÁN CHẠY NHẤT" Tại Baya">Bộ Sưu Tập Tủ Kệ Đầu Giường "BÁN CHẠY NHẤT" Tại Baya</a>
                                            </h3>
                                        </div>

                                        <p class="entry-content">Tủ đầu giường là phụ kiện không thể thiếu cho mọi không gian phòng ngủ, đóng một vai trò quan trọng trong thiết kế nội thất căn nhà. Trong bài viết này, hãy cùng Baya...</p>

                                        <div class="article-post-meta">
                                            <span class="author">bởi: Thứ - ScaleUP</span>
                                            <span class="date">
                                                <time pubdate datetime="11 Tháng 12, 2023">11 Tháng 12, 2023</time>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>


                        </div>
                        <div class="pagination-shop pagi  text-center">
                            <div id="pagination">
                                <ul class="pagination">
                                    <li>
                                        <span class="current">
                                            1
                                        </span>
                                    </li>
                                    <li>
                                        <a href="nguon-cam-hung4658.html?page=2">2</a>
                                    </li>
                                    <li>
                                        <a href="nguon-cam-hung4658.html?page=2">
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12 boxBlog-right">
                    <aside class="sidebar-blogs blogs-aside--sticky">
                        <!-- Bai viet moi nhat -->
                        <div class="group-sidebox">
                            <div class="sidebox-title ">
                                <h3 class="htitle">Bài viêt mới nhất</h3>
                            </div>
                            <div class="sidebox-content sidebox-content-togged">
                                <div class="list-blogs-latest">



                                    <div class="item-article clearfix ">
                                        <div class="post-image">
                                            <a href="nguon-cam-hung/bi-quyet-de-giu-can-bep-luon-gon-gang.html">
                                                <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/blog_baya_bq_giu_can_bep_gon_gan_0f15bf82cfa945c884efdc1b49de28ec_compact.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Bí Quyết Để Giữ Căn Bếp Luôn Gọn Gàng" /></a>
                                        </div>
                                        <div class="post-content">
                                            <h3><a href="nguon-cam-hung/bi-quyet-de-giu-can-bep-luon-gon-gang.html">Bí Quyết Để Giữ Căn Bếp Luôn Gọn Gàng</a></h3>
                                            <p class="post-meta">
                                                <span class="cate">Nguồn cảm hứng</span>
                                                <span class="author d-none"><a href="nguon-cam-hung/bi-quyet-de-giu-can-bep-luon-gon-gang.html">Tâm - Content ScaleUP</a></span>
                                                <span class="date">- 08.03.2024</span>
                                            </p>
                                        </div>
                                    </div>



                                    <div class="item-article clearfix ">
                                        <div class="post-image">
                                            <a href="nguon-cam-hung/tips-trang-tri-goc-hoc-tap-lam-viec-dep-va-khoa-hoc.html">
                                                <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/blog_baya_tt_goc_hoc_tap__lam_vi_d891632de9504a479aa647e560226b51_compact.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Tips Trang Trí Góc Học Tập, Làm Việc Đẹp Và Khoa Học" /></a>
                                        </div>
                                        <div class="post-content">
                                            <h3><a href="nguon-cam-hung/tips-trang-tri-goc-hoc-tap-lam-viec-dep-va-khoa-hoc.html">Tips Trang Trí Góc Học Tập, Làm Việc Đẹp Và Khoa Học</a></h3>
                                            <p class="post-meta">
                                                <span class="cate">Nguồn cảm hứng</span>
                                                <span class="author d-none"><a href="nguon-cam-hung/tips-trang-tri-goc-hoc-tap-lam-viec-dep-va-khoa-hoc.html">Tâm - Content ScaleUP</a></span>
                                                <span class="date">- 01.03.2024</span>
                                            </p>
                                        </div>
                                    </div>



                                    <div class="item-article clearfix ">
                                        <div class="post-image">
                                            <a href="news/10-phong-cach-thiet-ke-phong-tam-dep-va-hien-dai.html">
                                                <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/10_phong_cach_thiet_ke_ddepjj_va_hien_dai_f6f7df446bc44fb8afa05035b42fa4ed_compact.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="10 Phong Cách Thiết Kế Phòng Tắm Đẹp và Hiện Đại" /></a>
                                        </div>
                                        <div class="post-content">
                                            <h3><a href="news/10-phong-cach-thiet-ke-phong-tam-dep-va-hien-dai.html">10 Phong Cách Thiết Kế Phòng Tắm Đẹp và Hiện Đại</a></h3>
                                            <p class="post-meta">
                                                <span class="cate">Tin tức</span>
                                                <span class="author d-none"><a href="news/10-phong-cach-thiet-ke-phong-tam-dep-va-hien-dai.html">Thứ - ScaleUP</a></span>
                                                <span class="date">- 23.02.2024</span>
                                            </p>
                                        </div>
                                    </div>



                                    <div class="item-article clearfix ">
                                        <div class="post-image">
                                            <a href="news/kham-pha-phong-cach-noi-that-bac-au-scandinavia.html">
                                                <img class="lazyload" data-src="//file.hstatic.net/200000796751/article/kham_pha_phong_cach_bac_au-scandinavia_3d8237249a07410695844b8733c3a519_compact.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Khám Phá Phong Cách Nội Thất Bắc Âu - Scandinavia" /></a>
                                        </div>
                                        <div class="post-content">
                                            <h3><a href="news/kham-pha-phong-cach-noi-that-bac-au-scandinavia.html">Khám Phá Phong Cách Nội Thất Bắc Âu - Scandinavia</a></h3>
                                            <p class="post-meta">
                                                <span class="cate">Tin tức</span>
                                                <span class="author d-none"><a href="news/kham-pha-phong-cach-noi-that-bac-au-scandinavia.html">Thứ - ScaleUP</a></span>
                                                <span class="date">- 19.02.2024</span>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Menu bai viet -->

                        <div class="group-sidebox">
                            <div class="sidebox-title ">
                                <h3 class="htitle">Danh mục bài viết</h3>
                            </div>
                            <div class="sidebox-content sidebox-content-togged">
                                <ul class="menuList-links">


                                    <li class=""><a href="news.html" title="Tin tức"><span>Tin tức</span></a></li>



                                    <li class=" active "><a href="nguon-cam-hung.html" title="Nguồn cảm hứng"><span>Nguồn cảm hứng</span></a></li>


                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection