<div class="box-menu">
    <h3 class="title toggle" data-mobile="991">{{__('Support')}}</h3>
    <ul class="ui-menu box-toggle">
        @if($pages && count($pages) > 0)
            @foreach ($pages as $item)
                <li>
                    <a class="@if($page && ($item->id == $page->id))active @endif" href="{{$item->slug}}">{{$item->title}}</a>
                </li>
            @endforeach
        @endif
    </ul>
</div>
