<div class="breadcrumbs">
    @php $num = count($lists) - 1; @endphp
    <ul class="items">
        <li class="item home"> <a href="{{route('home')}}" title="{{__('Home')}}">{{__('Home')}}</a></li>
        @foreach ($lists as $key => $item)
            @if($key == $num)
                <li class="item category"> <strong>{{$item->title}}</strong> </li>
            @else
                @if($item->parent_id == null)
                    <li class="item category"> <a href="{{route('category', [$item->slug])}}" title="{{$item->title}}">{{$item->title}}</a></li>
                @else
                    <li class="item category"> <a href="{{route('detail.category', [$root->slug, $item->slug])}}" title="{{$item->title}}">{{$item->title}}</a></li>
                @endif
            @endif
        @endforeach
    </ul>
</div>
