<div class="group-sidebox">
    <div class="sidebox-title">
        <h3 class="htitle">{{__('Các nội dung khác')}}</h3>
    </div>
    <div class="sidebox-content sidebox-content-togged">
        <ul class="menuList-links">
            @if($pages && count($pages) > 0)
            @foreach ($pages as $item)
            <li class="">
                <a class="@if($page && ($item->id == $page->id))active @endif" href="{{$item->slug}}" title="{{$item->title}}"><span>{{$item->title}}</span></a>
            </li>
            @endforeach
            @endif
        </ul>
    </div>
</div>