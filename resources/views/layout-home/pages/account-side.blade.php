<!-- <div class="sidebar sidebar-main">
    <div class="block block-collapsible-nav">
        <div class="title block-collapsible-nav-title"><strong> Tài khoản của tôi</strong></div>
        <div class="content block-collapsible-nav-content" id="block-collapsible-nav">
            <ul class="nav items">
                <li class="nav item @if(request()->routeIs('account') || request()->routeIs('account.edit') || request()->routeIs('account.pass')) current @endif"><a href="{{route('account')}}">Tài khoản của tôi</a></li>
                <li class="nav item @if(request()->routeIs('order.index')) current @endif"><a href="{{route('order.index')}}">Đơn hàng</a></li>
                <li class="nav item"><span class="delimiter"></span></li>
                <li class="nav item @if(request()->routeIs('address') || request()->routeIs('address.new') || request()->routeIs('address.edit')) current @endif"><a href="{{route('address')}}">Địa chỉ</a></li>
                <li class="nav item"><a href="{{route('newsletter')}}">Đăng ký nhận tin</a></li>
                <li class="nav item"><a href="{{route('logout.shop')}}">Đăng xuất</a></li>
                {{-- <li class="nav item"><a href="https://onoff.vn/vault/cards/listaction/">Phương thức thanh
                        toán</a></li>
                <li class="nav item"><span class="delimiter"></span></li>
                <li class="nav item"><a href="https://onoff.vn/newsletter/manage/">Đăng ký nhận tin</a></li> --}}
                {{-- @if(request()->routeIs('index-menu') || request()->routeIs('edit-menu')) active @endif --}}
            </ul>
        </div>
    </div>
</div> -->


<div class="AccountSidebar">
    <h3 class="AccountTitle titleSidebar">Tài khoản</h3>
    <div class="AccountContent">
        <div class="AccountList">
            <ul class="list-unstyled">
                <li class="current"><a href="{{route('account')}}">Thông tin tài khoản</a></li>
                <li><a href="{{route('order.index')}}">Đơn hàng</a></li>
                <li><a href="{{route('address')}}">Danh sách địa chỉ</a></li>
                <li><a href="{{route('newsletter')}}">Đăng ký nhận tin</a></li>
                <li class="last"><a href="{{route('logout.shop')}}">Đăng xuất</a></li>
            </ul>
        </div>
    </div>
</div>