@php $prefix = '&nbsp;&nbsp;' .  $prefix ; @endphp
<option @if (in_array($child_cates->id, $listId)) selected @endif value="{{$child_cates->id}}">{!! $prefix !!}  {{$child_cates->title}} </option>
@if($child_cates->childCate)
    @foreach($child_cates->childCate as  $childcates)
        @include('layout-admin.pages.categories.ajax.cate-child-item', ['child_cates' => $childcates, 'prefix' => $prefix, 'listId' => $listId])
    @endforeach
@endif
