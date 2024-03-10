<!-- Footer -->
@php
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
@endphp
@if(!$isMob)
<div class="td-footer-wrapper td-footer-container td-container-wrap ">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span12">
            </div>
        </div>
        <div class="td-pb-row">
            <div class="td-pb-span4">
                <div class="td_block_wrap td_block_7 tdi_14 td-pb-border-top td_block_template_1 td-column-1 td_block_padding"
                    data-td-block-uid="tdi_14">
                    <div class="td-block-title-wrap">
                        <h4 class="block-title td-block-title"><span class="td-pulldown-size">Bài biết</span></h4>
                    </div>
                    <div id="tdi_14" class="td_block_inner">

                        @foreach ($posts as $post)
                        <div class="td-block-span12">

                            <div class="td_module_6 td_module_wrap td-animation-stack">

                                <div class="td-module-thumb"><a
                                        href="{{route('blog.detail', [$post->slug])}}"
                                        rel="bookmark" class="td-image-wrap "
                                        title="{{$post->title}}"><img
                                            class="entry-thumb td-animation-stack-type0-2"
                                            src="{{$post->photo}}"
                                            alt="" title="{{$post->title}}"
                                            data-type="image_tag"
                                            width="100" height="70"></a></div>
                                <div class="item-details">
                                    <h3 class="entry-title td-module-title"><a
                                            href="{{route('blog.detail', [$post->slug])}}"
                                            rel="bookmark"
                                            title="{{$post->title}}">{{Str::limit($post->title, 50, '...')}}</a></h3>
                                    <div class="td-module-meta-info">
                                        <span class="td-post-date"><time
                                                class="entry-date updated td-module-date">{{date('d-m-Y', $post->created_at->timestamp)}}</time></span>
                                    </div>
                                </div>

                            </div>


                        </div>
                        @endforeach
                    </div>
                </div> <!-- ./block -->
            </div>
            <div class="td-pb-span4">
                <div class="td_block_wrap td_block_7 tdi_15 td-pb-border-top td_block_template_1 td-column-1 td_block_padding"
                    data-td-block-uid="tdi_15">
                    <div class="td-block-title-wrap">
                        <h4 class="block-title td-block-title"><span class="td-pulldown-size">Bài viết phổ biến</span></h4>
                    </div>
                    <div id="tdi_15" class="td_block_inner">
                        @foreach (@$postView as $view)
                        <div class="td-block-span12">
                            <div class="td_module_6 td_module_wrap td-animation-stack">
                                <div class="td-module-thumb"><a
                                        href="{{route('blog.detail', [$view->slug])}}"
                                        rel="bookmark" class="td-image-wrap "
                                        title="{{$view->title}}"><img
                                            class="entry-thumb td-animation-stack-type0-2"
                                            src="{{$view->photo}}"
                                            alt="Thương hiệu đồ lót"
                                            title="{{$view->title}}"
                                            data-type="image_tag"
                                            width="70" height="70"></a></div>
                                <div class="item-details">
                                    <h3 class="entry-title td-module-title"><a
                                            href="{{route('blog.detail', [$view->slug])}}"
                                            rel="bookmark"
                                            title="{{$view->title}}">{{Str::limit($view->title, 50, '...')}}</a></h3>
                                    <div class="td-module-meta-info">
                                        <span class="td-post-date"><time
                                                class="entry-date updated td-module-date">{{date('d-m-Y', $view->created_at->timestamp)}}</time></span>
                                    </div>
                                </div>

                            </div>


                        </div>
                        @endforeach
                    </div>
                </div> <!-- ./block -->
            </div>

            <div class="td-pb-span4">
                <div class="td_block_wrap td_block_popular_categories tdi_16 widget widget_categories td-pb-border-top td_block_template_1"
                    data-td-block-uid="tdi_16">
                    <div class="td-block-title-wrap">
                        <h4 class="block-title td-block-title"><span class="td-pulldown-size">Danh mục</span></h4>
                    </div>
                    <ul class="td-pb-padding-side">
                        @foreach ($cates as $cate)
                         <li><a href="{{route('blog.cate', [$cate->slug])}}"><span class="td-cat-name">{{$cate->title}}</span>
                            <span class="td-cat-no">{{$cate->posts->count()}}</span></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Sub Footer -->
<div class="td-sub-footer-container td-container-wrap ">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span td-sub-footer-menu">
            </div>

            <div class="td-pb-span td-sub-footer-copy">{{$config->site_copyright}}</div>
        </div>
    </div>
</div>
