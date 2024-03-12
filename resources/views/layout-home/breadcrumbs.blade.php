<div class="breadcrumb-shop">
    <div class="container">
        <div class="breadcrumb-list">
            <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="{{route('home')}}" target="_self" itemprop="item"><span itemprop="name">{{__('Home')}}</span></a>
                    <meta itemprop="position" content="1" />
                </li>
                @php
                $num = count($lists) - 1;
                @endphp
                @foreach ($lists as $key => $item)
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    @if($key == $num)
                    <strong itemprop="item">
                        <span itemprop="name">{{$item->title}}</span>
                    </strong>
                    <meta itemprop="position" content="{{ $key + 1}}" />
                    @else
                    @if($item->parent_id == null)
                    <a href="{{route('category', [$item->slug])}}" target="_self" itemprop="item" title="{{$item->title}}">
                        <span itemprop="name">{{$item->title}}</span>
                    </a>
                    <meta itemprop="position" content="{{ $key + 1}}" />
                    @else
                    <a href="{{route('detail.category', [$root->slug, $item->slug])}}" target="_self" itemprop="item" title="{{$item->title}}">
                        <span itemprop="name">{{$item->title}}</span>
                    </a>
                    <meta itemprop="position" content="{{ $key + 1}}" />
                    @endif
                    @endif
                </li>
                @endforeach

            </ol>
        </div>
    </div>
</div>