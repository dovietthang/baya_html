@php
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
@endphp
<div class="td-pb-span4 td-main-sidebar">
    <div class="td-ss-main-sidebar">
        @if(!$isMob)
        <aside id="recent-posts-4" class="td_block_template_1 widget recent-posts-4 widget_recent_entries">
            <h4 class="block-title"><span>Bài viết mới</span></h4>
            <ul>
                @if($newposts && count($newposts) > 0)
                @foreach ($newposts as $item)
                    <li>
                        <a href="{{route('blog.detail', [$item->slug])}}">{{$item->title}}</a>
                    </li>
                @endforeach
                @endif
            </ul>
        </aside>
        @endif
        @if(@$postRight)
        <div class="td-a-rec td-a-rec-id-custom_ad_1  tdi_12 td_block_template_1">
            <a
                href="{{$postRight->url}}">
                <img class="d-img-768" alt=""
                    src="{{$postRight->photo}}">
            </a>
        </div>
        @endif
    </div>
