@foreach($cate->childCate()->orderBy('order_by', 'asc')->get() as $child)
<li>
    <a href="{{route('detail.category', [$slug, $child->slug])}}">{{$child->title}}</a>
</li>
    {{-- @if($child->childCate)
        @include('layout-home.includes.sub-menu', ['cate' => $child, 'slug' => $slug])
    @endif --}}
@endforeach


