@php $prefix = '&nbsp;&nbsp;' .  $prefix ; @endphp
@if(isset($cateId))
    @if(!isset($cateId->id))
        <option @if(in_array($child_cates->id, $cateId->pluck('id')->toArray()))selected @endif value="{{$child_cates->id}}">{!! $prefix !!}  {{$child_cates->title}}</option>
    @else
        <option @if($child_cates->id == @$cateId->parent_id)selected @endif value="{{$child_cates->id}}">{!! $prefix !!}  {{$child_cates->title}}</option>
    @endif
@else
    <option value="{{$child_cates->id}}">{!! $prefix !!}  {{$child_cates->title}}</option>
@endif
@if($child_cates->childCate)
    @if(isset($cateId))
        @foreach($child_cates->childCate->where('id', '<>', $cateId->id) as  $childcates)
            @include('layout-admin.pages.categories.ajax.cate-child', ['child_cates' => $childcates, 'prefix' => $prefix, 'cateId' => $cateId])
        @endforeach
    @else
        @foreach($child_cates->childCate as  $childcates)
            @include('layout-admin.pages.categories.ajax.cate-child', ['child_cates' => $childcates, 'prefix' => $prefix])
        @endforeach
    @endif
@endif
