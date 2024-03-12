<ul class="pagination">
    @foreach ($elements as $element)
    @if (!$paginator->onFirstPage())
    <li><a href="{{ $paginator->previousPageUrl() }}" title="Previous" class="action previous">
        <i class="fa fa-angle-double-left"></i>
        </a>
    </li>
    @endif
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if($page == $paginator->currentPage())
    <li>
        <span class="current">{{$page}}</span>
    </li>
    @else
    <li class="">
        <a href="{{$url}}" class="page">
            <span>{{$page}}</span>
        </a>
    </li>
    @endif
    @endforeach
    @endif
    @if ($paginator->hasMorePages())
    <li>
        <a href="{{ $paginator->nextPageUrl() }}" title="Next" class="action next">
            <i class="fa fa-angle-double-right"></i>
        </a>
    </li>
    @endif
    @endforeach
</ul>