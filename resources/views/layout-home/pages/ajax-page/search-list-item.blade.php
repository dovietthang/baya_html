<ul role="listbox">
    @if(count($product) > 0)
    @foreach ($product as $item)
    @php
    $count = \App\Models\Product::where('title', 'like', $item->title . '%')
    ->where('status', 1)->count();
    $title = str_replace(' ','+', $item->title);
    @endphp
    <li class="" id="qs-option-0" role="option">
        <a href="{{route('resultQuery',['q=' .$title])}}">
            <span class="qs-option-name"> {{$item->title}}</span><span aria-hidden="true" class="amount">{{$count}}</span>
        </a>
    </li>
    @endforeach
    @endif
</ul>
