@if(@$cates)
    <option selected disabled value="">{{__('Select category')}}</option>
    <option value="">{{__('Root')}}</option>
    @php $prefix = '&#9672; &nbsp;' @endphp
    @foreach($cates as $cate)
            <option value="{{$cate->id}}">{{$cate->title}}</option>
            @foreach($cate->childCate as  $childcates)
                @include('layout-admin.pages.categories.ajax.cate-child', ['child_cates' => $childcates, 'prefix' => $prefix])
            @endforeach
    @endforeach
@endif
