<div class="col-lg-3 col-md-12 col-12 boxBlog-right">
  <aside class="sidebar-blogs blogs-aside--sticky">
    <!-- Bai viet moi nhat -->
    <div class="group-sidebox">
      <div class="sidebox-title ">
        <h3 class="htitle">Bài viêt mới nhất</h3>
      </div>
      <div class="sidebox-content sidebox-content-togged">
        <div class="list-blogs-latest">

          @foreach($newPost as $item)
          <div class="item-article clearfix ">
            <div class="post-image">
              <a href="nguon-cam-hung/bi-quyet-de-giu-can-bep-luon-gon-gang.html">
                <img class="lazyload" data-src="{{$item->photo}}" src="{{$item->photo}}" alt="Bí Quyết Để Giữ Căn Bếp Luôn Gọn Gàng" /></a>
            </div>
            <div class="post-content">
              <h3><a href="nguon-cam-hung/bi-quyet-de-giu-can-bep-luon-gon-gang.html">{{$item->title}}</a></h3>
              <p class="post-meta">
                <span class="cate">Nguồn cảm hứng</span>
                <span class="date">- {{$item->created_at}}</span>
              </p>
            </div>
          </div>
          @endforeach
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