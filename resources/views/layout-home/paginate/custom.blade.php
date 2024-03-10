<ul class="items pages-items">
    @foreach ($elements as $element)
    @if (!$paginator->onFirstPage())
    <li class="item pages-item-previous"><a href="{{ $paginator->previousPageUrl() }}" title="Previous"
            class="action previous"><span class="label">Page</span>
        </a>
    </li>
    @endif
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if($page == $paginator->currentPage())
    <li class="item current">
        <strong class="page"><span>{{$page}}</span></strong>
    </li>
    @else
    <li class="item">
        <a href="{{$url}}" class="page">
            <span>{{$page}}</span>
        </a>
    </li>
    @endif
    @endforeach
    @endif
    @if ($paginator->hasMorePages())
    <li class="item pages-item-next"><a href="{{ $paginator->nextPageUrl() }}" title="Next" class="action next"><span
                class="label">Page</span>
        </a>
    </li>
    @endif
    @endforeach
</ul>

