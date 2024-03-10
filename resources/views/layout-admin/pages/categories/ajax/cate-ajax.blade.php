@if(@$cates)
    @php $prefix = '&#9672; &nbsp;' @endphp
    <option value="root">{{__('Root')}}</option>
    @foreach($cates as $cate)
        <option value="{{$cate->id}}">{{$cate->title}}</option>
        @if($cate->type !== 'MenuPost')
            @foreach($cate->childCate as  $childcates)
                @include('layout-admin.pages.categories.ajax.cate-child', ['child_cates' => $childcates, 'prefix' => $prefix])
            @endforeach
        @endif
    @endforeach
@endif
